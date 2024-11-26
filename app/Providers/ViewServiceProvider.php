<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

use App\Models\Course;
use App\Models\ExcludedIP;
use App\Models\FormSubmission; // Adjust if you use a different model for messages
use App\Models\Transactions;
use App\Models\User;
use App\Models\Visitor;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['admin.*', 'components.admin.*'], function ($view) {
            $courses = Course::all();
            $active_courses = Course::where('active', 1)->get() ?? null;

            $transaction_count = Transactions::all()->count() ?? 0;
            $message_count = FormSubmission::where('is_read', false)->orWhere('is_read', null)->count() ?? 0;
            $user_count = User::all()->count() ?? 0;
            $last_users = User::orderBy('created_at', 'desc')->take(5)->get();
            $last_transactions = Transactions::orderBy('created_at', 'desc')->take(3)->get();
            $last_visitors =  Visitor::orderBy('created_at', 'desc')->take(5)->get();
            $visitor_count = Visitor::all()->count() ?? 0;

            $last_transactions = Transactions::get()->map(function ($last_transaction) {
                // Decode the JSON column (e.g., 'response') into an array
            $discountAmount = ($last_transaction->amount * $last_transaction->discount) / 100;
            $coursePriceWithDiscount = $last_transaction->amount - $discountAmount;

            $last_transaction->transaction_amount = $coursePriceWithDiscount;
                return $last_transaction;
            });

            $view->with([
                'transaction_count' => $transaction_count,
                'message_count' => $message_count,
                'courses' => $courses,
                'active_courses' => $active_courses,
                'user_count' => $user_count,
                'last_users' => $last_users,
                'last_transactions' => $last_transactions,
                'last_visitors' => $last_visitors,
                'visitor_count' => $visitor_count,

            ]);
        });




        View::composer('admin.visitors', function ($view) {
            $excludedIps = ExcludedIP::paginate(10); // Fetch paginated excluded IPs

            // Check if the requested page exceeds total pages
            if (request('page') > $excludedIps->lastPage() && $excludedIps->lastPage() > 0) {
                // Redirect to the last valid page
                redirect()->route('admin.visitors', ['page' => $excludedIps->lastPage()])->send();
            } elseif ($excludedIps->lastPage() === 0) {
                // If there are no pages, handle empty dataset case
                $excludedIps = collect(); // Empty collection
            }

            // Always pass $excludedIps to the view
            $view->with('excludedIps', $excludedIps);
        });


    }
}
