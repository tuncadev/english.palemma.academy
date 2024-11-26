<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class MaintenanceModeMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        //Log::info('Update Mode: ' . env('UPDATE_MODE', 'not set'));
        //Log::info('Current URL: ' . $request->path());

        if (env('UPDATE_MODE', false)) {
            // Allow access to /login route during maintenance
            if ($request->is('login')) {
                return $next($request);
            }

            // Check if user is logged in and has 'sudo' role
            if (Auth::check()) {
                if (Auth::user()->role === 'sudo') {
                    return $next($request); // Allow access for sudo users
                } else {
                    return redirect('/bebacksoon'); // Redirect other roles to /bebacksoon
                }
            }

            // Redirect guests to /bebacksoon
            if (!$request->is('bebacksoon')) {
                return redirect('/bebacksoon');
            }
        } else {
            // Normal operation, ensure users aren't stuck on /bebacksoon
            if ($request->is('bebacksoon')) {
                return redirect('/');
            }
        }

        return $next($request);

    }
}
