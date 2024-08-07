<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Subscribtion;

class CheckSubscription
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        Log::info('CheckSubscription middleware executed.');

        // Check if user is authenticated
        if (!Auth::check()) {
            Log::info('User is not authenticated.');
            return redirect()->route('home')->with('error', 'You need to sign in first.');
        }

        $user = Auth::user();
        $course_id = $request->route('course_id');

        Log::info('Authenticated user ID: ' . $user->id);
        Log::info('Course ID: ' . $course_id);

        // Check if the user has a subscription for the course
        $subscription = Subscribtion::where('user_id', $user->id)
                                    ->where('course_id', $course_id)
                                    ->first();

        if (!$subscription) {
            Log::info('No subscription found.');
        } else {
            Log::info('Subscription found with payment status: ' . $subscription->payment_status);
        }

        if (!$subscription || $subscription->payment_status !== 'completed') {
            Log::info('User does not have a valid subscription.');
            return redirect()->route('home')->with('error', 'You need to subscribe to this course to access the content.');
        }

        return $next($request);
    }
}
