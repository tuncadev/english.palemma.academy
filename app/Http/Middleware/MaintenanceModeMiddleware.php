<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MaintenanceModeMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        //Log::info('Update Mode: ' . env('UPDATE_MODE', 'not set'));
        //Log::info('Current URL: ' . $request->path());

        if (env('UPDATE_MODE', false)) {
            if (!$request->is('bebacksoon')) {
                return redirect('/bebacksoon');
            }
        } else {
            if ($request->is('bebacksoon')) {
                return redirect('/');
            }
        }

        return $next($request);
    }
}
