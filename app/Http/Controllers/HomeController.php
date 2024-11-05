<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

use App\Models\Section;
use App\Models\Course;
use App\Models\Subscribtion;
use App\Models\Phrase;
use App\Models\Practice;
use App\Models\Quiz;
use App\Models\Subscribtions;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        Log::info($courses);
        $locale = App::getLocale(); // Get the current locale
        $courses->transform(function($course) {
            $totalPhrases = Phrase::where('course_id', $course->id)->count();
            $totalPractice = Practice::where('course_id', $course->id)->count();
            $totalQuiz = Quiz::where('course_id', $course->id)->count();
            $course->totalPhrases = $totalPhrases;
            $course->totalPractice = $totalPractice;
            $course->totalQuiz = $totalQuiz;
            $course->id = $course->id;
            $totalSections = Section::where('course_id', $course->id)->count();
            $course->totalSections = $totalSections;
            $course->subscribed = "";

            $user_id = Auth::id() ?? "";

            if ($user_id) {
                $course->subscribed = Subscribtion::where('course_id', $course->id)->where('user_id', $user_id)->exists() ?? "";
            }


            return $course;
        });

        return view('pages.homepage', compact('courses', 'locale'));
    }
}
