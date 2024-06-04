<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\App;


class HomeController extends Controller
{
    public function index()
    {
      $courses = Course::all();
      $locale = App::getLocale(); // Get the current locale
      return view('pages.homepage', compact('courses', 'locale'));
    }
}
