<?php

namespace App\Http\Controllers;

use App\Models\Practice;
use App\Models\Section;
use App\Models\Score;
use App\Models\Subscribtion;
use App\Models\Phrase;
use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\App;
use App\Models\CompletedSection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class CourseController extends Controller
{
    public function sections($course_id) {
        $locale = session('locale', config('app.locale'));
        $user_id = Auth::id();
        $sections = Section::where('course_id', $course_id)->get();
        $completedSections = CompletedSection::where('user_id', $user_id)
                                          ->where('course_id', $course_id)
                                          ->pluck('section_id')
                                          ->toArray();
     //   $completedSections = session()->get('completed_sections', []);

        $course = Course::where('id', $course_id)->firstOrFail();

        switch ($locale) {
          case 'uk':
              $localizedSections = $sections->map(function($section) {
                return [
                    'section_name' => $section->section_name_uk,
                    'en' => $section->section_name_en,
                    'id' => $section->id,
                ];
               });
              $courseName = $course->course_name_uk;
              break;
          case 'ru':
              $localizedSections = $sections->map(function($section) {
                return [
                    'section_name' => $section->section_name_ru,
                    'en' => $section->section_name_en,
                    'id' => $section->id,
                ];
              });
              $courseName = $course->course_name_ru;
              break;
          default:
          $localizedSections = $sections->map(function($section) {
            return [
                'section_name' => $section->section_name_uk,
                'en' => $section->section_name_en,
                'id' => $section->id,
            ];
           });
              $courseName = $course->course_name_uk; // Default to English if locale is not specified
              break;
      }

        return view('courses.sections', compact('localizedSections', 'courseName', 'completedSections', 'locale', 'course_id'));

    }
    public function subscribtions() {
        $user_id = Auth::id();
        $subscribtions = Subscribtion::where('user_id', $user_id)->get()->pluck('course_id');
        $courses = Course::whereIn('id', $subscribtions)->get();
        $locale = session('locale', config('app.locale'));

        switch ($locale) {
            case 'uk':
                $localizedCourses = $courses->map(function($course) {
                  return [
                    'id' => $course->id,
                    'course_name' => $course->course_name_uk,
                    'course_description_' => $course->course_description_uk,
                    'active' => $course->active,
                  ];
                 });
                break;
            case 'ru':
                $localizedCourses = $courses->map(function($course) {
                  return [
                    'id' => $course->id,
                    'course_name' => $course->course_name_ru,
                    'course_description_' => $course->course_description_ru,
                    'active' => $course->active,
                  ];
                });
                break;
            default:
            $localizedCourses = $courses->map(function($course) {
              return [
                'id' => $course->id,
                'course_name' => $course->course_name_uk,
                'course_description_' => $course->course_description_uk,
                'active' => $course->active,
              ];
             });
                break;
        }

        return view('courses.dashboard.subscribtions', compact('subscribtions', 'localizedCourses'));

    }

    public function dashboard($course_id) {
        $user_id = Auth::id();
        $sections = Section::where('course_id', $course_id)->get();
        $completedSections = CompletedSection::where('user_id', $user_id)
                                          ->where('course_id', $course_id)
                                          ->pluck('section_id')
                                          ->toArray();
     //   $completedSections = session()->get('completed_sections', []);
        $locale = session('locale', config('app.locale'));

        $course = Course::where('id', $course_id)->firstOrFail();

        switch ($locale) {
          case 'uk':
              $localizedSections = $sections->map(function($section) {
                return [
                    'section_name' => $section->section_name_uk,
                    'en' => $section->section_name_en,
                    'id' => $section->id,
                ];
               });
              $courseName = $course->course_name_uk;
              break;
          case 'ru':
              $localizedSections = $sections->map(function($section) {
                return [
                    'section_name' => $section->section_name_ru,
                    'en' => $section->section_name_en,
                    'id' => $section->id,
                ];
              });
              $courseName = $course->course_name_ru;
              break;
          default:
          $localizedSections = $sections->map(function($section) {
            return [
                'section_name' => $section->section_name_uk,
                'en' => $section->section_name_en,
                'id' => $section->id,
            ];
           });
              $courseName = $course->course_name_uk; // Default to English if locale is not specified
              break;
      }

        return view('courses.dashboard', compact('localizedSections', 'courseName', 'completedSections', 'locale', 'course_id'));

    }

    public function serveVideo($filename)
    {
        $path = public_path('video/' . $filename);

        if (!File::exists($path)) {
            abort(404);
        }

        $response = new BinaryFileResponse($path);
        $response->headers->set('Cache-Control', 'public, max-age=31536000');
        Log::info('Headers set in controller', ['headers' => $response->headers->all()]);

        return $response;
    }

    public function index($course_id, Request $request)
    {
        $colorClass = $request->query('colorClass', null);
        $user_id = Auth::id();
        $sections = Section::where('course_id', $course_id)->get();
        $completedSections = CompletedSection::where('user_id', $user_id)
                                          ->where('course_id', $course_id)
                                          ->pluck('section_id')
                                          ->toArray();
     //   $completedSections = session()->get('completed_sections', []);
        $locale = session('locale', config('app.locale'));

        $course = Course::where('id', $course_id)->firstOrFail();

        switch ($locale) {
          case 'uk':
              $localizedSections = $sections->map(function($section) {
                return [
                    'section_name' => $section->section_name_uk,
                    'en' => $section->section_name_en,
                    'id' => $section->id,
                ];
               });
              $courseName = $course->course_name_uk;
              break;
          case 'ru':
              $localizedSections = $sections->map(function($section) {
                return [
                    'section_name' => $section->section_name_ru,
                    'en' => $section->section_name_en,
                    'id' => $section->id,
                ];
              });
              $courseName = $course->course_name_ru;
              break;
          default:
          $localizedSections = $sections->map(function($section) {
            return [
                'section_name' => $section->section_name_uk,
                'en' => $section->section_name_en,
                'id' => $section->id,
            ];
           });
              $courseName = $course->course_name_uk;
              break;
      }

        return view('courses.course', compact('course', 'colorClass', 'localizedSections', 'courseName', 'completedSections', 'locale', 'course_id'));
    }

    public function show($course_id, $section_id, Request $request)
    {
        $colorClass = $request->query('colorClass', null);
        $locale = session('locale', config('app.locale'));
        $completedSections = CompletedSection::pluck('section_id')->toArray();
        $completedSectionNames = Section::whereIn('id', $completedSections)
                                 ->where('id', '!=', $section_id)
                                 ->pluck('section_name_' . $locale)
                                 ->toArray();
        $locked = false;
        //$completedSections = session()->get('completed_sections', []);
        if (!in_array($section_id - 1, $completedSections) && $section_id != 1) {
            $locked = true;
            //return view('courses.course'.$course_id.'.s' . $section_id . '.s' . $section_id . '_show', compact('locked', 'course_id', 'section_id'));
            //return redirect()->route('course.show', ['course_id' => $course_id, 'section_id' => $section_id - 1 ]);
        }

        $section = Section::where('id', $section_id)->where('course_id', $course_id)->firstOrFail();

        $sectionID = "0" . $section->id;
        $course = Course::where('id', $course_id)->firstOrFail();
        $phrases = Phrase::where('section_id', $section_id)->get();
        $allSections = Section::where('course_id', $course_id)->get();


        // Determine the course name and section name based on the current locale
        switch ($locale) {
            case 'uk':
                $courseName = $course->course_name_uk;
                $sectionName = $section->section_name_uk;
                $localizedPhrases = $phrases->map(function($phrase) {
                    return [
                        'localized' => $phrase->phrase_uk,
                        'en' => $phrase->phrase_en,
                        'id' => $phrase->id,
                    ];
                });       // Log::info('Completing section', [
       //     'correctAnswers' => $correctAnswers,
       // ]);
                break;
            case 'ru':
                $courseName = $course->course_name_ru;
                $sectionName = $section->section_name_ru;
                $localizedPhrases = $phrases->map(function($phrase) {
                    return [
                        'localized' => $phrase->phrase_ru,
                        'en' => $phrase->phrase_en,
                        'id' => $phrase->id,
                    ];
                });
                break;
            default:
                $courseName = $course->course_name_uk; // Default to English if locale is not specified
                $sectionName = $section->section_name_uk;
                $localizedPhrases = $phrases->map(function($phrase) {
                    return [
                        'localized' => $phrase->phrase_uk, // Default to English if locale is not specified
                        'en' => $phrase->phrase_uk,
                        'id' => $phrase->id,
                    ];
                });
                break;
        }

        return view('courses.section.show', compact('locale', 'allSections', 'completedSections', 'completedSectionNames', 'colorClass', 'locked','section_id', 'phrases', 'sectionName', 'localizedPhrases', 'courseName', 'course_id'));
    }

    public function practice($course_id, $section_id)
    {
        $user_id = Auth::id();
        $section = Section::where('id', $section_id)->where('course_id', $course_id)->firstOrFail();
        $questions = Practice::where('section_id', $section_id)->get();
        $course = Course::where('id', $course_id)->firstOrFail();
        $phrases = Phrase::where('section_id', $section_id)->get();
        $locale = session('locale', config('app.locale'));
        $highestPracticeScore = CompletedSection::where('user_id', Auth::id())
                                            ->where('course_id', $course_id)
                                            ->where('section_id', $section_id)
                                            ->max('highest_practice_score');
        $allSections = Section::where('course_id', $course_id)->get();
        $completedSections = CompletedSection::pluck('section_id')->toArray();
        $completedSection = CompletedSection::firstOrNew([
          'user_id' => $user_id,
          'course_id' => $course_id,
          'section_id' => $section_id,
        ]);

        if ($completedSection->exists) {
          $update_at = $completedSection->updated_at;
        } else {
          $update_at = "";
        }

          switch ($locale) {
            case 'uk':
                $sectionName = $section->section_name_uk;
                $courseName = $course->course_name_uk;
                $localizedPhrases = $phrases->map(function($phrase) {
                    return [
                        'localized' => $phrase->phrase_uk,
                        'en' => $phrase->phrase_en,
                        'id' => $phrase->id,
                    ];
                });
                break;
            case 'ru':
                $courseName = $course->course_name_ru;
                $sectionName = $section->section_name_ru;
                $localizedPhrases = $phrases->map(function($phrase) {
                    return [
                        'localized' => $phrase->phrase_ru,
                        'en' => $phrase->phrase_en,
                        'id' => $phrase->id,
                    ];
                });
                break;
            default:
                $sectionName = $section->section_name_en;
                $courseName = $course->course_name_en;
                $localizedPhrases = $phrases->map(function($phrase) {
                    return [
                        'localized' => $phrase->phrase_uk,
                        'en' => $phrase->phrase_en,
                        'id' => $phrase->id,
                    ];
                });
                break;
        }

        $correctAnswers = $questions->pluck('correct_answer', 'id');
       // Log::info('Completing section', [
       //     'correctAnswers' => $correctAnswers,
       // ]);
        return view("courses.section.practice", compact('update_at','completedSections','locale','allSections','localizedPhrases','correctAnswers','questions', 'highestPracticeScore', 'courseName', 'section', 'phrases', 'course_id', 'section_id', 'sectionName'));
    }

    public function quiz($course_id, $section_id)
{
    $user_id = Auth::id();
    $section = Section::where('id', $section_id)->where('course_id', $course_id)->firstOrFail();
    $phrases = Phrase::where('section_id', $section_id)->get();
    $questions = Quiz::where('section_id', $section_id)->get();
    $allSections = Section::where('course_id', $course_id)->get();
    $completedSections = CompletedSection::pluck('section_id')->toArray();
        $completedSection = CompletedSection::firstOrNew([
          'user_id' => $user_id,
          'course_id' => $course_id,
          'section_id' => $section_id,
        ]);

    // Prepare correct answers and their points
    $correctAnswers = [];
    foreach ($questions as $question) {
        $question_text = $question->question;
        $how_many = substr_count($question_text, '_');

        if ($how_many == 1) {
            $answers = [$question->correct_answer];
            $points = [5];
        } elseif ($how_many == 2) {
            $answers = explode(' ', $question->correct_answer);
            $points = [2.5, 2.5];
        } else {
            $answers = [$question->correct_answer]; // Default to single answer
            $points = [5]; // Default to 5 points
        }

        $correctAnswers[$question->id] = [
            'answers' => $answers,
            'points' => $points
        ];
    }

    $highestPracticeScore = CompletedSection::where('user_id', Auth::id())
        ->where('course_id', $course_id)
        ->where('section_id', $section_id)
        ->max('highest_practice_score');

    $highestQuizScore = CompletedSection::where('user_id', Auth::id())
        ->where('course_id', $course_id)
        ->where('section_id', $section_id)
        ->max('highest_quiz_score');
    $locale = session('locale', config('app.locale'));

    $completedSection = CompletedSection::firstOrNew([
        'user_id' => $user_id,
        'course_id' => $course_id,
        'section_id' => $section_id,
    ]);
    $update_at = $completedSection->exists ? $completedSection->updated_at : "";

    switch ($locale) {
        case 'uk':
            $sectionName = $section->section_name_uk;
            $courseName = $section->course_name_uk;
            break;
        case 'ru':
            $courseName = $section->course_name_ru;
            $sectionName = $section->section_name_ru;
            break;
        default:
            $sectionName = $section->section_name_en;
            $courseName = $section->course_name_en;
            break;
    }

    return view("courses.section.quiz", compact('allSections', 'completedSections', 'update_at', 'questions', 'correctAnswers', 'courseName', 'sectionName', 'section', 'phrases', 'course_id', 'section_id', 'highestPracticeScore', 'highestQuizScore'));
}



      public function completeSection($course_id, $section_id)
{
    $user_id = Auth::id();
    $completedSections = session()->get('completed_sections', []);
    $type = request('type'); // Retrieve the type (practice or quiz) from the request
    $score = 0;

    if ($type == 'practice') {
        $score = request('practice_score');
    } else if ($type == 'quiz') {
        $score = request('quiz_score');
    }

    //Log::info('Completing section', [
    //    'user_id' => $user_id,
    //   'course_id' => $course_id,
    //    'section_id' => $section_id,
    //    'type' => $type,
    //    'score' => $score,
    //]);

    // Ensure session tracking for completed sections
    if (!in_array($section_id, $completedSections)) {
        $completedSections[] = $section_id;
        session()->put('completed_sections', $completedSections);
    }

    $completedSection = CompletedSection::firstOrNew([
        'user_id' => $user_id,
        'course_id' => $course_id,
        'section_id' => $section_id,
    ]);

    // Update the highest scores if applicable
    if ($type == 'practice') {
        $completedSection->highest_practice_score = max($completedSection->highest_practice_score ?? 0, $score);
        $completedSection->practice_score = $score;
    } else if ($type == 'quiz') {
        $completedSection->highest_quiz_score = max($completedSection->highest_quiz_score ?? 0, $score);
        $completedSection->quiz_score = $score;
    }

    // Calculate the overall score
    $completedSection->highest_overall_score = max($completedSection->highest_overall_score ?? 0, ($completedSection->highest_practice_score ?? 0) + ($completedSection->highest_quiz_score ?? 0));
    $completedSection->overall_score = ($completedSection->practice_score ?? 0) + ($completedSection->quiz_score ?? 0);

    if ($completedSection->exists) {
        $completedSection->updated_at = now();
    } else {
        $completedSection->created_at = now();
    }

    $completedSection->save();

    //Log::info('Section completed and saved:', $completedSection->toArray());

    // Check if there is a next section to redirect to
    $nextSection = Section::where('course_id', $course_id)
                            ->where('id', '>', $section_id)
                            ->orderBy('id')
                            ->first();

    if ($nextSection) {
        Log::info('Redirecting to next section', ['course_id' => $course_id, 'section_id' => $nextSection->id]);
        return redirect()->route('course.show', ['course_id' => $course_id, 'section_id' => $nextSection->id]);
    } else {
        // If no more sections, redirect to the course index page
        Log::info('No more sections, redirecting to course index', ['course_id' => $course_id]);
        return redirect()->route('course.index', ['course_id' => $course_id]);
    }
}

public function updatePracticeScore(Request $request, $course_id, $section_id){
    $user_id = Auth::id();
    $practice_score = $request->input('practice_score');

    $score = Score::firstOrNew([
        'user_id' => $user_id,
        'course_id' => $course_id,
        'section_id' => $section_id,
    ]);

    $score->practice_score = $practice_score;
    $score->highest_practice_score = max($score->highest_practice_score, $practice_score);
    $score->overall_score = $score->practice_score + $score->quiz_score;
    $score->highest_overall_score = max($score->highest_overall_score, $score->overall_score);

    $score->save();

    return redirect()->route('course.quiz', ['course_id' => $course_id, 'section_id' => $section_id]);
}

public function updateQuizScore(Request $request, $course_id, $section_id)
{
    $user_id = Auth::id();
    $quiz_score = $request->input('quiz_score');

    $score = Score::firstOrNew([
        'user_id' => $user_id,
        'course_id' => $course_id,
        'section_id' => $section_id,
    ]);

    $score->quiz_score = $quiz_score;
    $score->highest_quiz_score = max($score->highest_quiz_score, $quiz_score);
    $score->overall_score = $score->practice_score + $score->quiz_score;
    $score->highest_overall_score = max($score->highest_overall_score, $score->overall_score);

    $score->save();

    // Mark the section as completed
    CompletedSection::firstOrCreate([
        'user_id' => $user_id,
        'course_id' => $course_id,
        'section_id' => $section_id,
    ]);

    // Redirect to the next section or course index
    $nextSection = Section::where('course_id', $course_id)
        ->where('id', '>', $section_id)
        ->orderBy('id')
        ->first();

    if ($nextSection) {
        return redirect()->route('course.show', ['course_id' => $course_id, 'section_id' => $nextSection->id]);
    } else {
        return redirect()->route('course.index', ['course_id' => $course_id]);
    }
}





}
