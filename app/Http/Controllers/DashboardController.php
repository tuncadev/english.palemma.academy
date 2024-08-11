<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\Practice;
use App\Models\Section;
use App\Models\Subscribtion;
use App\Models\Phrase;
use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\App;
use App\Models\CompletedSection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class DashboardController extends Controller
{
    public function home() {
        $user_id = Auth::id();
        $subscribtions = Subscribtion::where('user_id', $user_id)->get()->pluck('course_id');
        $courses = Course::whereIn('id', $subscribtions)->get();
        $locale = session('locale', config('app.locale'));
        $subscribed = count($courses);

        return view('dashboard', compact('courses', 'subscribtions', 'subscribed'));
    }

    public function subscribtions() {
        $user_id = Auth::id();
        $subscriptions = Subscribtion::where('user_id', $user_id)->get();
        $courseIds = $subscriptions->pluck('course_id');
        $courses = Course::whereIn('id', $courseIds)->get();
        $locale = session('locale', config('app.locale'));
        // Transform the courses collection
        $courses->transform(function($course) use ($subscriptions, $locale, $user_id) {
            $subscription = $subscriptions->firstWhere('course_id', $course->id);
            $isExpired = $subscription && $subscription->expiry_date <= today();
            $paymentStatus = $subscription && $subscription->payment_status;
            $hasSubscription = $subscription && $subscription->payment_status === 'completed' && !$isExpired;
            $pending = $subscription && $subscription->payment_status === 'pending' && !$isExpired;
            // Add subscription status to the course object
            $course->hasSubscription = $hasSubscription;
            $course->isExpired = $isExpired;
            $course->subscribtionDate = $subscription->subscription_date;
            $course->expiryDate = $subscription->expiry_date;
            $course->pending = $pending;
            // Add localized course name and description based on the locale
            switch ($locale) {
                case 'uk':
                    $course->course_name = $course->course_name_uk;
                    $course->course_description = $course->course_description_uk;

                    break;
                case 'ru':
                    $course->course_name = $course->course_name_ru;
                    $course->course_description = $course->course_description_ru;
                    break;
                default:
                    $course->course_name = $course->course_name_en;
                    $course->course_description = $course->course_description_en;
                    break;
            }

            // Count the number of completed sections for this course by the user
        $completedSectionsCount = CompletedSection::where('user_id', $user_id)
        ->where('course_id', $course->id)
        ->count();
        $totalSections = Section::where('course_id', $course->id)->count();
        // Calculate completion percentage
        $completionPercentage = $totalSections > 0 ? round(($completedSectionsCount / $totalSections) * 100) : 0;

        // Add the completion percentage to the course object
        $course->completionPercentage = round($completionPercentage, 2); // Round to 2 decimal places
       // $percentageCompleted = ( 100 * $completedSectionsCount ) / $totalSections;
        // Add the completed sections count to the course object
        $course->completedSectionsCount = $completedSectionsCount;
        $course->totalSections = $totalSections;
        //$course->percentageCompleted = $percentageCompleted;

        $totalPhrases = Phrase::where('course_id', $course->id)->count();
        $totalPractice = Practice::where('course_id', $course->id)->count();
        $totalQuiz = Quiz::where('course_id', $course->id)->count();
        $course->totalPhrases = $totalPhrases;
        $course->totalPractice = $totalPractice;
        $course->totalQuiz = $totalQuiz;

        return $course;

        });

        // Sort courses: active first, then pending, then expired
        $sortedCourses = $courses->sortBy(function($course) {
            if ($course->hasSubscription) {
                return 1;
            } elseif ($course->pending) {
                return 2;
            } else {
                return 3;
            }
        });

        return view('courses.dashboard.subscribtions', ['courses' => $sortedCourses]);
    }


}
