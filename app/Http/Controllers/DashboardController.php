<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\Practice;
use App\Models\Section;
use App\Models\Subscribtion;
use App\Models\Phrase;
use App\Models\Quiz;
use App\Models\Course;
use App\Models\CompletedSection;
use App\Models\UserProgress;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
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

            $totalPhrases = Phrase::where('course_id', $course->id)->count();
            $totalPractice = Practice::where('course_id', $course->id)->count();
            $totalQuiz = Quiz::where('course_id', $course->id)->count();


            // Count the number of completed sections for this course by the user

             // Count the number of completed sections for this course by the user
             $user_practice_progress = DB::table('user_progress')
             ->where('user_id', $user_id)
             ->where('course_id', $course->id)
             ->whereNotNull('dropdown_value')
             ->count();

              // Count the number of completed sections for this course by the user
            $user_quiz_progress = DB::table('user_progress')
            ->where('user_id', $user_id)
            ->where('course_id', $course->id)
            ->WhereNotNull('input_value')
            ->count();

            $user_progress = $user_quiz_progress + $user_practice_progress;

            $completedSectionsCount = CompletedSection::where('user_id', $user_id)
            ->where('course_id', $course->id)
            ->count();

            $totalSections = Section::where('course_id', $course->id)->count();


            $subscription = $subscriptions->firstWhere('course_id', $course->id);
            $isExpired = $subscription && $subscription->expiry_date <= today();
            $paymentStatus = $subscription && $subscription->payment_status;
            $hasSubscription = $subscription && $subscription->payment_status === 'completed' && !$isExpired;
            $pending = $subscription && $subscription->payment_status === 'pending' && !$isExpired;
            // Add subscription status to the course object

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


            // Calculate completion percentage

            $completionPercentage = $totalSections > 0 ? round(($user_progress / ($totalQuiz + $totalPractice) ) * 100) : 0;
            $practiceProgressPercent = $totalPractice > 0 ? round( ( $user_practice_progress / $totalPractice ) * 100 ) : 0;
            $quizProgressPercent = $totalQuiz > 0 ? round( ( $user_quiz_progress / $totalQuiz ) * 100 ) : 0;
            // Add the completion percentage to the course object

        // $percentageCompleted = ( 100 * $completedSectionsCount ) / $totalSections;
            // Add the completed sections count to the course object

            //$course->percentageCompleted = $percentageCompleted;



            $course->totalPhrases = $totalPhrases;
            $course->totalPractice = $totalPractice;
            $course->totalQuiz = $totalQuiz;
            $course->completedSectionsCount = $completedSectionsCount;
            $course->totalSections = $totalSections;
            $course->completionPercentage = round($completionPercentage, 2); // Round to 2 decimal places
            $course->hasSubscription = $hasSubscription;
            $course->isExpired = $isExpired;
            $course->subscribtionDate = $subscription->subscription_date;
            $course->expiryDate = $subscription->expiry_date;
            $course->pending = $pending;
            $course->practiceProgressPercent = $practiceProgressPercent;
            $course->quizProgressPercent = $quizProgressPercent;
            $course->user_progress = $user_progress;
            $course->user_practice_progress = $user_practice_progress;
            $course->user_quiz_progress = $user_quiz_progress;

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
