<?php

namespace App\Http\Controllers;

use App\Models\SiteActivity;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;


class ActivityController extends Controller
{
    public function trackUserActivity(Request $request)
    {
        $userId = Auth::id();  // Get the logged-in user's ID, or null if not logged in
        $ipAddress = $request->ip();

        // Check if an activity record already exists for this IP or user
        $activity = SiteActivity::where('user_id', $userId)
                    ->orWhere('ip_address', $ipAddress)
                    ->first();

        if ($activity) {
            // Record exists, so we update only the 'last_visit' and 'pages_visited'
            $activity->last_visit = Carbon::now();

            // Append the current page visit to the 'pages_visited' JSON array
            $pagesVisited = $activity->pages_visited ?? [];
            $pagesVisited[] = [
                'page' => $request->path(),
                'timestamp' => Carbon::now(),
            ];
            $activity->pages_visited = $pagesVisited;

            $activity->save();
        } else {
            // Record does not exist, create a new one with 'first_visit'
            SiteActivity::create([
                'ip_address' => $ipAddress,
                'user_id' => $userId,
                'first_visit' => Carbon::now(),
                'last_visit' => Carbon::now(),
                'pages_visited' => [
                    [
                        'page' => $request->path(),
                        'timestamp' => Carbon::now(),
                    ],
                ],
            ]);
        }
    }
}
