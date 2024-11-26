<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Models\PageView;
use App\Models\PageVisitCount;
use App\Models\ExcludedIP;
use Illuminate\Support\Str;

class VisitorTrackingController extends Controller
{
    /**
     * Handle tracking logic.
     */
    public function track(Request $request)
    {
        // Step 1: Extract IP and check for exclusion
        $ipAddress = $request->ip();
        if ($this->isExcludedIp($ipAddress)) {
            return response()->json(['message' => 'IP excluded from tracking.'], 204);
        }

        // Step 2: Identify visitor
        $visitorToken = $this->getVisitorToken($request);
        $visitor = $this->getOrCreateVisitor($visitorToken, $ipAddress, $request->userAgent());

        // Step 3: Log raw page view
        $this->logPageView($visitor, $request);

        // Step 4: Update aggregated visit count
        $this->updateVisitCount($visitor, $request->fullUrl());

        // Step 5: Set visitor token in a cookie (if newly created)
        return response()->json(['message' => 'Page visit tracked.'])
            ->cookie('visitor_token', $visitorToken, 525600); // Cookie valid for 1 year
    }

    /**
     * Check if the IP address is excluded.
     */
    private function isExcludedIp($ipAddress)
    {
        return ExcludedIP::where('ip_address', $ipAddress)->exists();
    }

    /**
     * Get visitor token from cookies or generate a new one.
     */
    private function getVisitorToken(Request $request)
    {
        return $request->cookie('visitor_token') ?? (string) Str::uuid();
    }

    /**
     * Retrieve or create a visitor based on the token.
     */
    private function getOrCreateVisitor($visitorToken, $ipAddress, $userAgent)
    {
        $visitor = Visitor::where('visitor_token', $visitorToken)->first();

        if (!$visitor) {
            $visitor = Visitor::create([
                'visitor_token' => $visitorToken,
                'ip_address' => $ipAddress,
                'user_agent' => $userAgent,
            ]);
        }

        return $visitor;
    }

    /**
     * Log raw data for a page view.
     */
    private function logPageView(Visitor $visitor, Request $request)
    {
        PageView::create([
            'visitor_id' => $visitor->id,
            'url' => $request->fullUrl(),
            'referrer_url' => $request->headers->get('referer'),
            'device' => $this->getDeviceType($request->userAgent()),
            'browser' => $this->getBrowser($request->userAgent()),
            'os' => $this->getOperatingSystem($request->userAgent()),
        ]);
    }

    /**
     * Update or create a visit count for the page.
     */
    private function updateVisitCount(Visitor $visitor, $url)
    {
        $pageVisitCount = PageVisitCount::firstOrNew([
            'visitor_id' => $visitor->id,
            'url' => $url,
        ]);

        $pageVisitCount->visit_count = $pageVisitCount->visit_count + 1;
        $pageVisitCount->last_visited_at = now();
        $pageVisitCount->save();
    }

    // Utility functions to parse user-agent

    /**
     * Get the device type from the user-agent string.
     */
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

    /**
     * Get the browser from the user-agent string.
     */
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

    /**
     * Get the operating system from the user-agent string.
     */
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
