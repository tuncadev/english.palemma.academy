<?php

namespace App\Http\Middleware;

use App\Http\Controllers\ActivityController;
use Illuminate\Http\Request;
use Closure;

class TrackUserActivity
{
    public function handle(Request $request, Closure $next)
    {
        // Call the activity tracking method
        $activityController = new ActivityController();
        $activityController->trackUserActivity($request);

        return $next($request);
    }
}
