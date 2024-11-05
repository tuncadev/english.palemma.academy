<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckSubscription;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\WebhookController;
use App\Http\Controllers\PortmoneController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('locale/{lang}', [LocaleController::class, 'setLocale'])->name('setLocale');




Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/avatar', [ProfileController::class, 'uploadAvatar'])->name('profile.avatar');
    Route::get('/course/{course_id}/sections', [CourseController::class, 'sections'])->name('course.sections');
    Route::get('/dashboard', [DashboardController::class, 'subscribtions'])->name('dashboard.courses');
    Route::get('/generatetext', function () {
        return view('textgenerate');
    });
});






Route::post('/course/{course_id}/section/{section_id}/save-phrase-progress', [CourseController::class, 'savePhraseProgress'])->name('course.savePhraseProgress');
Route::post('/course/{course_id}/section/{section_id}/save-practice-progress', [CourseController::class, 'savePracticeProgress'])->name('course.savePracticeProgress');
Route::post('/course/{course_id}/section/{section_id}/save-quiz-progress', [CourseController::class, 'saveQuizProgress'])->name('course.saveQuizProgress');

Route::get('/course/{course_id}/section/{section_id}', [CourseController::class, 'show'])->name('course.show');
Route::get('/course/{course_id}/section/{section_id}/practice', [CourseController::class, 'practice'])->name('course.practice');
Route::get('/course/{course_id}/section/{section_id}/update-practice', [CourseController::class, 'updatePracticeScore'])->name('course.updatePracticeScore');
Route::get('/course/{course_id}/section/{section_id}/quiz', [CourseController::class, 'quiz'])->name('course.quiz');
Route::get('/course/{course_id}/section/{section_id}/update-quiz', [CourseController::class, 'updateQuizScore'])->name('course.updateQuizScore');
Route::post('/course/{course_id}/section/{section_id}/complete', [CourseController::class, 'completeSection'])->name('course.complete');

Route::get('/course/{course_id}/introduction', [CourseController::class, 'introduction'])->name('course.introduction');
Route::get('/course/{course_id}/instructions', [CourseController::class, 'instructions'])->name('course.instructions');

Route::get('/course/{course_id}/videotutorials', [CourseController::class, 'tutorials'])->name('course.tutorials');



//Route::get('/dashboard/paid/courses', [DashboardController::class, 'subscribtions'])->middleware(['auth', 'verified'])->name('dashboard.paid_courses');
//Route::get('/dashboard/paid/course-{course_id}', [DashboardController::class, 'dashboard'])->name('course.dashboard');

Route::get('/terms', function () {
    return view('terms');
});
Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/about-me', function () {
    return view('about-me');
});
Route::get('/oferta', function () {
    return view('oferta');
});
Route::get('/guest/course/{course_id}', [CourseController::class, 'index'])
    ->name('course.index');

//Route::patch('/video/{filename}', [CourseController::class, 'serveVideo'])->name('video.serve')->middleware('cache.video');


Route::post('/send-email', [FormController::class, 'sendForm'])->name('send.email');




/* Payments */

Route::get('/payment', function () {
    return view('payment');
});

// routes/web.php

Route::get('/guest/course/{course_id}/pay', [PaymentController::class, 'createInvoice'])->name('payment.create');
Route::get('/payment/callback', [PaymentController::class, 'callback'])->name('payment.callback');
Route::post('/payment/webhook', [PaymentController::class, 'webhook'])->name('payment.webhook');


Route::get('/payment/success/{invoiceId}', [PaymentController::class, 'success'])->name('payment.success');
Route::post('payment/saveuser', [PaymentController::class, 'saveUser'])->name('payment.saveuser');



require __DIR__.'/auth.php';
