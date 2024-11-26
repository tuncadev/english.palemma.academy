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
    // Step 1: Exclude certain IPs from tracking
    $ipAddress = $request->ip();

    // Validate IP format
    if (!filter_var($ipAddress, FILTER_VALIDATE_IP)) {
        // Log and ignore invalid IP addresses
        Log::warning("Invalid IP format ignored: $ipAddress");
        return $next($request); // Skip tracking for invalid IPs
    }

    // Check if IP address is excluded
    if (ExcludedIP::where('ip_address', $ipAddress)->exists()) {
        return $next($request);
    }

    // Step 2: Identify visitor
    $visitorToken = $request->cookie('visitor_token') ?? (string) Str::uuid();
    $visitor = Visitor::firstOrCreate(
        ['visitor_token' => $visitorToken],
        ['ip_address' => $ipAddress, 'user_agent' => $request->userAgent()]
    );

    // Step 3: Log raw page view
    PageView::create([
        'visitor_id' => $visitor->id,
        'url' => $request->fullUrl(),
        'referrer_url' => $request->headers->get('referer'),
        'device' => $this->getDeviceType($request->userAgent()),
        'browser' => $this->getBrowser($request->userAgent()),
        'os' => $this->getOperatingSystem($request->userAgent()),
    ]);

    // Step 4: Update aggregated visit count
    $pageVisitCount = PageVisitCount::firstOrNew([
        'visitor_id' => $visitor->id,
        'url' => $request->fullUrl(),
    ]);
    $pageVisitCount->visit_count++;
    $pageVisitCount->last_visited_at = now();
    $pageVisitCount->save();

    // Step 5: Set visitor token cookie
    return $next($request)->cookie('visitor_token', $visitorToken, 525600); // 1 year
}

    // Utility methods for parsing user-agent (from the controller)
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
