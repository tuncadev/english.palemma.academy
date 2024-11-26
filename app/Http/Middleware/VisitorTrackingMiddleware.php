<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Models\PageView;
use App\Models\PageVisitCount;
use App\Models\ExcludedIP;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class VisitorTrackingMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Step 1: Get IP address
        $ipAddress = $request->ip();

        // Validate IP format
        if (!filter_var($ipAddress, FILTER_VALIDATE_IP)) {

            return $next($request); // Skip tracking for invalid IPs
        }

        // Step 2: Check if the IP address is excluded
        if ($this->isExcludedIp($ipAddress)) {

            return $next($request);
        }

        // Step 3: Identify visitor
        $visitorToken = $request->cookie('visitor_token') ?? (string) Str::uuid();
        $visitor = Visitor::firstOrCreate(
            ['visitor_token' => $visitorToken],
            ['ip_address' => $ipAddress, 'user_agent' => $request->userAgent()]
        );

        // Step 4: Log raw page view
        PageView::create([
            'visitor_id' => $visitor->id,
            'url' => $request->fullUrl(),
            'referrer_url' => $request->headers->get('referer'),
            'device' => $this->getDeviceType($request->userAgent()),
            'browser' => $this->getBrowser($request->userAgent()),
            'os' => $this->getOperatingSystem($request->userAgent()),
        ]);

        // Step 5: Update aggregated visit count
        $pageVisitCount = PageVisitCount::firstOrNew([
            'visitor_id' => $visitor->id,
            'url' => $request->fullUrl(),
        ]);
        $pageVisitCount->visit_count++;
        $pageVisitCount->last_visited_at = now();
        $pageVisitCount->save();

        // Step 6: Set visitor token cookie
        return $next($request)->cookie('visitor_token', $visitorToken, 525600); // 1 year
    }

    /**
     * Check if the IP address is excluded (exact match or range).
     */
    private function isExcludedIp($ipAddress)
    {
        // Step 1: Check for exact matches where block_range is false
        if (ExcludedIP::where('ip_address', $ipAddress)->where('block_range', false)->exists()) {
            return true;
        }

        // Step 2: Dynamically generate ranges for block_range = true
        $excludedRanges = ExcludedIP::where('block_range', true)->pluck('ip_address');

        foreach ($excludedRanges as $baseIp) {
            $rangePattern = $this->generateRangePattern($baseIp); // Generate range from IP
            if ($this->ipMatchesPattern($ipAddress, $rangePattern)) {
                Log::info("Excluded IP range detected: $ipAddress");
                return true;
            }
        }

        return false;
    }

    private function generateRangePattern($ipAddress)
    {
        $segments = explode('.', $ipAddress);

        // Ensure it's a valid IPv4 address with four segments
        if (count($segments) !== 4) {
            return null; // Invalid input, handle gracefully
        }

        // Replace the last two segments with wildcards
        $segments[2] = '*';
        $segments[3] = '*';

        // Return the generated range pattern
        return implode('.', $segments);
    }



    /**
     * Check if an IP address matches a range pattern.
     */
    private function ipMatchesPattern($ipAddress, $pattern)
    {
        if (!$pattern) {
            return false; // Gracefully handle invalid patterns
        }

        // Convert pattern to a regex (e.g., 192.168.*.* -> 192\.168\.[0-9]+\.[0-9]+)
        $regex = '/^' . str_replace(['.', '*'], ['\.', '[0-9]+'], $pattern) . '$/';

        // Log for debugging
       /* Log::debug("Checking IP address against range", [
            'ip_address' => $ipAddress,
            'pattern' => $pattern,
            'regex' => $regex,
        ]); */

        return preg_match($regex, $ipAddress);
    }


    // Utility methods for parsing user-agent (unchanged)

    private function getDeviceType($userAgent)
    {
        if (stripos($userAgent, 'mobile') !== false) {
            return 'Mobile';
        } elseif (stripos($userAgent, 'tablet') !== false) {
            return 'Tablet';
        } else {
            return 'Desktop';
        }
    }

    private function getBrowser($userAgent)
    {
        if (stripos($userAgent, 'chrome') !== false) {
            return 'Chrome';
        } elseif (stripos($userAgent, 'firefox') !== false) {
            return 'Firefox';
        } elseif (stripos($userAgent, 'safari') !== false) {
            return 'Safari';
        } elseif (stripos($userAgent, 'edge') !== false) {
            return 'Edge';
        } elseif (stripos($userAgent, 'opera') !== false || stripos($userAgent, 'opr/') !== false) {
            return 'Opera';
        } else {
            return 'Unknown Browser';
        }
    }

    private function getOperatingSystem($userAgent)
    {
        if (stripos($userAgent, 'windows') !== false) {
            return 'Windows';
        } elseif (stripos($userAgent, 'mac') !== false) {
            return 'MacOS';
        } elseif (stripos($userAgent, 'linux') !== false) {
            return 'Linux';
        } elseif (stripos($userAgent, 'android') !== false) {
            return 'Android';
        } elseif (stripos($userAgent, 'iphone') !== false || stripos($userAgent, 'ipad') !== false) {
            return 'iOS';
        } else {
            return 'Unknown OS';
        }
    }
}
