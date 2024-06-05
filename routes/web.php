<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('locale/{lang}', [LocaleController::class, 'setLocale'])->name('setLocale');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->middleware(['auth', 'verified'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->middleware(['auth', 'verified'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->middleware(['auth', 'verified'])->name('profile.destroy');
});

Route::get('/dashboard', [DashboardController::class, 'subscribtions'])->middleware(['auth', 'verified'])->name('dashboard.courses');
Route::get('/dashboard/paid/courses', [DashboardController::class, 'subscribtions'])->middleware(['auth', 'verified'])->name('dashboard.courses');
//Route::get('/dashboard/paid/course-{course_id}', [DashboardController::class, 'dashboard'])->name('course.dashboard');


Route::get('/guest/course/{course_id}', [CourseController::class, 'index'])->middleware(['auth', 'verified'])->name('course.index');
Route::get('/course/{course_id}/sections', [CourseController::class, 'sections'])->middleware(['auth', 'verified'])->name('course.sections');
Route::get('/course/{course_id}/section/{section_id}', [CourseController::class, 'show'])->middleware(['auth', 'verified'])->name('course.show');
Route::get('/course/{course_id}/section/{section_id}/practice', [CourseController::class, 'practice'])->middleware(['auth', 'verified'])->name('course.practice');
Route::post('/course/{course_id}/section/{section_id}/update-practice', [CourseController::class, 'updatePracticeScore'])->middleware(['auth', 'verified'])->name('course.updatePracticeScore');
Route::get('/course/{course_id}/section/{section_id}/quiz', [CourseController::class, 'quiz'])->middleware(['auth', 'verified'])->name('course.quiz');
Route::post('/course/{course_id}/section/{section_id}/update-quiz', [CourseController::class, 'updateQuizScore'])->middleware(['auth', 'verified'])->name('course.updateQuizScore');
Route::post('/course/{course_id}/section/{section_id}/complete', [CourseController::class, 'completeSection'])->middleware(['auth', 'verified'])->name('course.complete');

require __DIR__.'/auth.php';
