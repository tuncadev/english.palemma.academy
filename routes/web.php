<?php

use Illuminate\Support\Facades\App;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckSubscription;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\WebhookController;
use App\Http\Controllers\PortmoneController;

use App\Models\Course;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('locale/{lang}', [LocaleController::class, 'setLocale'])->name('setLocale');




Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/avatar', [ProfileController::class, 'uploadAvatar'])->name('profile.avatar');
    Route::get('/course/{course_id}/sections', [CourseController::class, 'sections'])->name('course.sections');
    Route::get('/dashboard', [DashboardController::class, 'subscribtions'])->name('dashboard.courses');


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
    Route::get('/course/{course_id}/finished', [CourseController::class, 'finished'])->name('course.finished');
});

//Route::get('/dashboard/paid/courses', [DashboardController::class, 'subscribtions'])->middleware(['auth', 'verified'])->name('dashboard.paid_courses');
//Route::get('/dashboard/paid/course-{course_id}', [DashboardController::class, 'dashboard'])->name('course.dashboard');

Route::get('/terms', function () {
    $locale = App::getLocale(); // Get the current locale
    $pageTitle = match ($locale) {
        'ru' => 'Условия и положения',      // Russian title
        'uk' => 'Умови та положення',     // Ukrainian title
        default => 'Умови та положення',  // Fallback title in English or other language
    };
    return view('terms', compact('pageTitle'));
});
Route::get('/privacy', function () {

    $locale = App::getLocale(); // Get the current locale
    // Set pageTitle based on the locale
    $pageTitle = match ($locale) {
        'ru' => 'Политика конфиденциальности',      // Russian title
        'uk' => 'Політика конфіденційності',     // Ukrainian title
        default => 'Політика конфіденційності',  // Fallback title in English or other language
    };

    return view('privacy', compact('pageTitle'));
});

Route::get('/contact-us', function () {
    $locale = App::getLocale(); // Get the current locale

    $pageTitle = match ($locale) {
        'ru' => 'Контакты',      // Russian title
        'uk' => 'Контакти',     // Ukrainian title
        default => 'Контакти',  // Fallback title in English or other language
    };

    return view('contact-us', compact('pageTitle'));
});
Route::get('/about-me', function () {
    $locale = App::getLocale(); // Get the current locale

    // Set pageTitle based on the locale
    $pageTitle = match ($locale) {
        'ru' => 'Обо мне',      // Russian title
        'uk' => 'Про мене',     // Ukrainian title
        default => 'Про мене',  // Fallback title in English or other language
    };

    $courses = Course::get();
    return view('about-me', compact('courses', 'pageTitle'));
});

Route::get('/oferta', function () {
    $locale = App::getLocale(); // Get the current locale

    // Set pageTitle based on the locale
    $pageTitle = "Оферта";

    $courses = Course::get();
    return view('oferta', compact('pageTitle'));
});

Route::get('/guest/course/{course_id}', [CourseController::class, 'index'])
    ->name('course.index');

//Route::patch('/video/{filename}', [CourseController::class, 'serveVideo'])->name('video.serve')->middleware('cache.video');


Route::post('/submit-form', [MailController::class, 'sendForm'])->name('form.submit');


// routes/web.php

Route::post('/guest/course/{course_id}/pay', [PaymentController::class, 'createInvoice'])->name('payment.create');
Route::post('/payment/finalize/{course_id}/{token}', [PaymentController::class, 'finalize'])->name('payment.finalize');
Route::get('/payment/direct/{course_id}/{token}', [PaymentController::class, 'directPay'])->name('payment.direct');

Route::get('/payment/callback/{token}', [PaymentController::class, 'callback'])->name('payment.callback');
Route::post('/payment/webhook', [PaymentController::class, 'webhook'])->name('payment.webhook');


Route::get('/payment/success/{invoiceId}/{token}', [PaymentController::class, 'success'])->name('payment.success');
Route::get('/payment/failure/{invoiceId}', [PaymentController::class, 'failure'])->name('payment.failure');

Route::post('payment/saveuser/{token}', [PaymentController::class, 'saveUser'])->name('payment.saveuser');



require __DIR__.'/auth.php';
