<?php

namespace App\Http\Controllers;

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

        return view('dashboard', compact('courses', 'subscribtions'));
    }

    public function subscribtions() {
        $user_id = Auth::id();
        $subscribtions = Subscribtion::where('user_id', $user_id)->get()->pluck('course_id');
        $courses = Course::whereIn('id', $subscribtions)->get();
        $locale = session('locale', config('app.locale'));

        return view('courses.dashboard.subscribtions', compact('courses', 'subscribtions'));
    }
}
