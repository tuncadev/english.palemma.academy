<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('locale/{lang}', [LocaleController::class, 'setLocale'])->name('setLocale');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/course/{course_id}', [CourseController::class, 'index'])->name('course.index');
Route::get('/course/{course_id}/section/{section_id}', [CourseController::class, 'show'])->name('course.show');
Route::get('/dashboard/course-{course_id}', [CourseController::class, 'dashboard'])->name('course.dashboard');
Route::get('/course/{course_id}/section/{section_id}/practice', [CourseController::class, 'practice'])->name('course.practice');
Route::post('/course/{course_id}/section/{section_id}/update-practice', [CourseController::class, 'updatePracticeScore'])->name('course.updatePracticeScore');
Route::get('/course/{course_id}/section/{section_id}/quiz', [CourseController::class, 'quiz'])->name('course.quiz');
Route::post('/course/{course_id}/section/{section_id}/update-quiz', [CourseController::class, 'updateQuizScore'])->name('course.updateQuizScore');
Route::post('/course/{course_id}/section/{section_id}/complete', [CourseController::class, 'completeSection'])->name('course.complete');



require __DIR__.'/auth.php';
