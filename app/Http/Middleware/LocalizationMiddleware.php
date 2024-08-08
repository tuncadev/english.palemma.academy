<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class LocalizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->has('locale')) {
            $locale = $request->get('locale');
            Session::put('locale', $locale);
            Log::info('Locale set from request: ' . $locale);
        }

        $locale = Session::get('locale', config('app.locale'));
        Log::info('Locale from session: ' . $locale);
        App::setLocale($locale);

        return $next($request);
    }
}
