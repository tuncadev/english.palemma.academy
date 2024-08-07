<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckSubscription;
use Illuminate\Support\Facades\Log;
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('locale/{lang}', [LocaleController::class, 'setLocale'])->name('setLocale');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware([CheckSubscription::class])->group(function () {
        Route::get('/course/{course_id}/sections', [CourseController::class, 'sections'])->name('course.sections');
        Route::get('/course/{course_id}/section/{section_id}', [CourseController::class, 'show'])->name('course.show');
        Route::get('/course/{course_id}/section/{section_id}/practice', [CourseController::class, 'practice'])->name('course.practice');
        Route::post('/course/{course_id}/section/{section_id}/update-practice', [CourseController::class, 'updatePracticeScore'])->name('course.updatePracticeScore');
        Route::get('/course/{course_id}/section/{section_id}/quiz', [CourseController::class, 'quiz'])->name('course.quiz');
        Route::post('/course/{course_id}/section/{section_id}/update-quiz', [CourseController::class, 'updateQuizScore'])->name('course.updateQuizScore');
        Route::post('/course/{course_id}/section/{section_id}/complete', [CourseController::class, 'completeSection'])->name('course.complete');
    });
});
Route::get('/dashboard', [DashboardController::class, 'subscribtions'])->middleware(['auth', 'verified'])->name('dashboard.courses');
//Route::get('/dashboard/paid/courses', [DashboardController::class, 'subscribtions'])->middleware(['auth', 'verified'])->name('dashboard.paid_courses');
//Route::get('/dashboard/paid/course-{course_id}', [DashboardController::class, 'dashboard'])->name('course.dashboard');


Route::get('/guest/course/{course_id}', [CourseController::class, 'index'])->name('course.index');
Route::patch('/video/{filename}', [CourseController::class, 'serveVideo'])->name('video.serve')->middleware('cache.video');


require __DIR__.'/auth.php';
