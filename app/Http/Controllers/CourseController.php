<?php

namespace App\Http\Controllers;

use App\Models\Practice;
use App\Models\Section;
use App\Models\Score;
use App\Models\Course;
use App\Models\UserProgress;
use App\Models\Subscribtion;
use App\Models\Phrase;
use App\Models\Quiz;
use App\Models\CompletedSection;
use App\Models\Video;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Crypt;

use Symfony\Component\HttpFoundation\BinaryFileResponse;

class CourseController extends Controller
{
    public function introduction($course_id) {
        $locale = session('locale', config('app.locale'));
        $user_id = Auth::id();
        $allSections = Section::where('course_id', $course_id)->get();
        $completedSections = CompletedSection::where('user_id', $user_id)
                                          ->where('course_id', $course_id)
                                          ->pluck('section_id')
                                          ->toArray();
        $course = Course::where('id', $course_id)->firstOrFail();
        $courseNameEn = $course->course_name_en;
        $subscription = Subscribtion::where('user_id', $user_id)
        ->where('course_id', $course_id)
        ->first();
        $hasSubscription = $subscription && $subscription->payment_status === 'completed';
        return view('courses.video.introduction', compact('user_id', 'courseNameEn', 'course_id', 'completedSections', 'allSections', 'hasSubscription'));
    }


    public function instructions($course_id) {
        $locale = session('locale', config('app.locale'));
        $user_id = Auth::id();
        $allSections = Section::where('course_id', $course_id)->get();
        $completedSections = CompletedSection::where('user_id', $user_id)
                                          ->where('course_id', $course_id)
                                          ->pluck('section_id')
                                          ->toArray();
        $course = Course::where('id', $course_id)->firstOrFail();
        $courseNameEn = $course->course_name_en;
        $subscription = Subscribtion::where('user_id', $user_id)
        ->where('course_id', $course_id)
        ->first();
        $hasSubscription = $subscription && $subscription->payment_status === 'completed';
        return view('courses.video.instructions', compact('user_id', 'courseNameEn', 'course_id', 'completedSections', 'allSections', 'hasSubscription'));
    }


    public function tutorials($course_id) {
        $locale = session('locale', config('app.locale'));
        $user_id = Auth::id();
        $course = Course::where('id', $course_id)->firstOrFail();
        $courseNameEn = $course->course_name_en;
        $allSections = Section::where('course_id', $course_id)->get();
        $subscription = Subscribtion::where('user_id', $user_id)
        ->where('course_id', $course_id)
        ->first();
        $hasSubscription = $subscription && $subscription->payment_status === 'completed';
        $allVideos = Video::where('course_id', $course_id)->get();
        $completedSections = CompletedSection::where('user_id', $user_id)
                                          ->where('course_id', $course_id)
                                          ->pluck('section_id')
                                          ->toArray();
        return view('courses.video.tutorials', compact('user_id', 'courseNameEn', 'completedSections', 'allVideos', 'allSections', 'course_id', 'hasSubscription'));
    }

    public function sections($course_id) {
        $locale = session('locale', config('app.locale'));
        $user_id = Auth::id();
        $subscription = Subscribtion::where('user_id', $user_id )
                                    ->where('course_id', $course_id)
                                    ->first();
        $subscription = Subscribtion::where('user_id', $user_id )
        ->where('course_id', $course_id)
        ->first();
        $hasSubscription = $subscription && $subscription->payment_status === 'completed' && $subscription->expiry_date > today();
        //$hasSubscription = $subscription && $subscription->payment_status === 'completed';
        $user_id = Auth::id();
        $sections = Section::where('course_id', $course_id)->get();
        $completedSections = CompletedSection::where('user_id', $user_id)
                                          ->where('course_id', $course_id)
                                          ->pluck('section_id')
                                          ->toArray();
     //   $completedSections = session()->get('completed_sections', []);
        $allVideos = Video::where('course_id', $course_id)->get();

        $course = Course::where('id', $course_id)->firstOrFail();
        $courseNameEn = $course->course_name_en;

        $localizedSections = $sections->map(function($section) use ($course_id, $locale, &$courseName, $course) {
            // Determine section name and course name based on locale
            switch ($locale) {
                case 'uk':
                    $sectionName = $section->section_name_uk;
                    $courseName = $course->course_name_uk;
                    break;
                case 'ru':
                    $sectionName = $section->section_name_ru;
                    $courseName = $course->course_name_ru;
                    break;
                default:
                    $sectionName = $section->section_name_en; // Fallback to English
                    $courseName = $course->course_name_en;
            }

            // Fetch related counts
            $totalPhrases = DB::table('phrases')
                ->where('course_id', $course_id)
                ->where('section_id', $section->id)
                ->count();

            $totalPractice = DB::table('practice')
                ->where('course_id', $course_id)
                ->where('section_id', $section->id)
                ->count();

            $totalQuiz = DB::table('quiz')
                ->where('course_id', $course_id)
                ->where('section_id', $section->id)
                ->count();

            // Combine section name with count data
            return [
                'section_name' => $sectionName,
                'en' => $section->section_name_en,
                'id' => $section->id,
                'courseName' => $courseName,
                'totalPhrasesInSection' => $totalPhrases,
                'totalPracticeInSection' => $totalPractice,
                'totalQuizInSection' => $totalQuiz,
            ];
        });


      //dd($localizedSections);

        return view('courses.sections', compact('allVideos', 'sections','user_id','courseNameEn','hasSubscription','localizedSections', 'courseName', 'completedSections', 'locale', 'course_id'));

    }

    public function subscribtions() {
        $user_id = Auth::id();

        $subscribtions = Subscribtion::where('user_id', $user_id)->get()->pluck('course_id');
        $courses = Course::whereIn('id', $subscribtions)->get();
        $locale = session('locale', config('app.locale'));
        // Prepare the localized courses array

        $localizedCourses = $courses->map(function($course) use ($user_id, $locale) {


            $subscription = Subscribtion::where('user_id', $user_id)
                ->where('course_id', $course->id)
                ->first();
            $hasSubscription = $subscription && $subscription->payment_status === 'completed' && $subscription->expiry_date > today();

            $courseDetails = [
                'id' => $course->id,
                'active' => $course->active,
                'hasSubscription' => $hasSubscription,
                'nameEn' => $course->course_name_en,
            ];

            switch ($locale) {
                case 'uk':
                    $courseDetails['course_name'] = $course->course_name_uk;
                    $courseDetails['course_description'] = $course->course_description_uk;
                    break;
                case 'ru':
                    $courseDetails['course_name'] = $course->course_name_ru;
                    $courseDetails['course_description'] = $course->course_description_ru;
                    break;
                default:
                    $courseDetails['course_name'] = $course->course_name_uk;
                    $courseDetails['course_description'] = $course->course_description_uk;
                    break;
            }

            return $courseDetails;
        });

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

   /* public function serveVideo($filename)
    {
        $path = public_path('video/' . $filename);

        if (!File::exists($path)) {
            abort(404);
        }

        $response = new BinaryFileResponse($path);
        $response->headers->set('Cache-Control', 'public, max-age=31536000');


        return $response;
    }
*/
    function generateInvoiceNumber()
    {
        // Define a unique cache key based on today's date
        $today = date('Ymd');
        $cacheKey = 'invoice_counter_' . $today;

        // Check if the counter exists; if not, initialize it to 1 with a 24-hour expiration
        $counter = Cache::remember($cacheKey,        now()->addDay(), function () {
            return 1;
        });

        // Increment the counter in the cache for each new invoice
        $newCounter = Cache::increment($cacheKey);

        // Format the invoice number
        $invoiceNumber = 'INV-' . $today . '-' . str_pad($newCounter, 5, '0', STR_PAD_LEFT);

        return $invoiceNumber;
    }

    public function index($course_id)
    {
        $transactionID = Str::uuid()->toString();

        $invoiceNumber = $this->generateInvoiceNumber();
        $token = [
            'transactionID' => $transactionID,
            'invoiceNumber' => $invoiceNumber
        ];
        $token = Crypt::encrypt($token);
        $user_id = Auth::id();
        $subscribed = Subscribtion::where('course_id', $course_id)->where('user_id', $user_id)->exists();
        if(!$subscribed) {
            $sections = Section::where('course_id', $course_id)->get();
            $completedSections = CompletedSection::where('user_id', $user_id)
                                            ->where('course_id', $course_id)
                                            ->pluck('section_id')
                                            ->toArray();
            $subscription = Subscribtion::where('user_id', $user_id )
            ->where('course_id', $course_id)
            ->first();

            $hasSubscription = $subscription && $subscription->payment_status === 'completed' && $subscription->expiry_date > today();
            //   $completedSections = session()->get('completed_sections', []);
            $locale = session('locale', config('app.locale'));

            $course = Course::where('id', $course_id)->firstOrFail();

            $phrases = Phrase::get()->count();
            $quizes = Quiz::get()->count();
            $practices = Practice::get()->count();
            $videos = Video::get()->count();
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


            return view('courses.course', compact('token', 'invoiceNumber', 'transactionID', 'videos', 'quizes','practices','phrases', 'course', 'localizedSections', 'courseName', 'completedSections', 'locale', 'course_id'));

        } else {
            return redirect()->route('dashboard.courses');
        }
    }


    public function show($course_id, $section_id)
{

    $user_id = Auth::id();
    $subscription = Subscribtion::where('user_id', $user_id )
                                ->where('course_id', $course_id)
                                ->first();

    $hasSubscription = $subscription && $subscription->payment_status === 'completed' && $subscription->expiry_date > today();
    $locale = session('locale', config('app.locale'));
    $completedSections = CompletedSection::where('user_id', $user_id)
                                          ->where('course_id', $course_id)
                                          ->pluck('section_id')
                                          ->toArray();
    $completedSectionNames = Section::whereIn('id', $completedSections)
                             ->where('id', '!=', $section_id)
                             ->pluck('section_name_' . $locale)
                             ->toArray();
    // Step 2: Find the maximum completed section ID
    $maxCompletedSection = !empty($completedSections) ? max($completedSections) : 0;

    // Step 3: Unlock the next section (max + 1)
    $unlockedSectionIds = array_merge($completedSections, [$maxCompletedSection + 1]);

    // Step 4: Retrieve sections with IDs in the unlockedSectionIds array
    $unlockedSections = Section::whereIn('id', $unlockedSectionIds)->get();
    // Add the localized section name to each section
    $unlockedSections = $unlockedSections->map(function($section) use ($locale) {
        $section->localized_name = $section["section_name_" . $locale];
        return $section;
    });
    $locked = false;

    if (!in_array($section_id - 1, $completedSections) && $section_id != 1) {
        $locked = true;
    }

    $section = Section::where('id', $section_id)->where('course_id', $course_id)->firstOrFail();
    $course = Course::where('id', $course_id)->firstOrFail();
    $phrases = Phrase::where('section_id', $section_id)->get();
    $allSections = Section::where('course_id', $course_id)->get();
    $sectionNames =  Section::where('course_id', $course_id)->get();
    // Retrieve the checkbox states from the user_progress table
    $phraseStates = DB::table('user_progress')
        ->where('user_id', $user_id)
        ->where('course_id', $course_id)
        ->where('section_id', $section_id)
        ->pluck('checkbox_state', 'phrase_id')
        ->toArray();
    $courseNameEn = $course->course_name_en;
    $sectionNameEn = $section->section_name_en;
    // Determine the course name and section name based on the current locale
    switch ($locale) {
        case 'uk':
            $courseName = $course->course_name_uk;
            $sectionName = $section->section_name_uk;

            $pageTitle = $courseName . " - " . $sectionName;
            $localizedPhrases = $phrases->map(function($phrase) use ($phraseStates) {
                return [
                    'localized' => $phrase->phrase_uk,
                    'en' => $phrase->phrase_en,
                    'id' => $phrase->id,
                    'checked' => isset($phraseStates[$phrase->id]) ? (bool) $phraseStates[$phrase->id] : false, // Add checkbox state
                ];
            });
            break;
        case 'ru':
            $courseName = $course->course_name_ru;
            $sectionName = $section->section_name_ru;
            $pageTitle = $courseName . " - " . $sectionName;
            $localizedPhrases = $phrases->map(function($phrase) use ($phraseStates) {
                return [
                    'localized' => $phrase->phrase_ru,
                    'en' => $phrase->phrase_en,
                    'id' => $phrase->id,
                    'checked' => isset($phraseStates[$phrase->id]) ? (bool) $phraseStates[$phrase->id] : false, // Add checkbox state
                ];
            });
            break;
        default:
            $courseName = $course->course_name_uk; // Default to English if locale is not specified
            $sectionName = $section->section_name_uk;
            $pageTitle = $courseName . " - " . $sectionName;
            $localizedPhrases = $phrases->map(function($phrase) use ($phraseStates) {
                return [
                    'localized' => $phrase->phrase_uk, // Default to English if locale is not specified
                    'en' => $phrase->phrase_en,
                    'id' => $phrase->id,
                    'checked' => isset($phraseStates[$phrase->id]) ? (bool) $phraseStates[$phrase->id] : false, // Add checkbox state
                ];
            });
            break;
    }

    return view('courses.section.show', compact('unlockedSections', 'user_id', 'sectionNameEn', 'courseNameEn', 'pageTitle','hasSubscription', 'locale', 'allSections', 'completedSections', 'completedSectionNames', 'locked', 'section_id', 'phrases', 'sectionName', 'localizedPhrases', 'courseName', 'course_id'));
}


    public function practice($course_id, $section_id)
    {
        $user_id = Auth::id();
        $subscription = Subscribtion::where('user_id', $user_id )
        ->where('course_id', $course_id)
        ->first();
        $hasSubscription = $subscription && $subscription->payment_status === 'completed';
        $section = Section::where('id', $section_id)->where('course_id', $course_id)->firstOrFail();
        $questions = Practice::where('section_id', $section_id)->get();
        $course = Course::where('id', $course_id)->firstOrFail();
        $phrases = Phrase::where('section_id', $section_id)->get();
        $locale = session('locale', config('app.locale'));
        $currentScore =  Score::where('user_id', Auth::id())
                            ->where('course_id', $course_id)
                            ->where('section_id', $section_id)
                            ->max('practice_score');
        $highestPScore = Score::where('user_id', Auth::id())
                                            ->where('course_id', $course_id)
                                            ->where('section_id', $section_id)
                                            ->max('highest_practice_score');
        $highesPUpdate = Score::where('user_id', Auth::id())
                            ->where('course_id', $course_id)
                            ->where('section_id', $section_id)
                            ->where('practice_score', '>', '0' )
                            ->value('updated_at');
        $highestPracticeScore = $highestPScore > $currentScore ? $highestPScore : $currentScore;
        //dd($highestPracticeScore);
        $highestScoreDate = Score::where('user_id', Auth::id())
        ->where('course_id', $course_id)
        ->where('section_id', $section_id)
        ->where('highest_practice_score', $highestPracticeScore)
        ->value('updated_at');


        $allSections = Section::where('course_id', $course_id)->get();
        $completedSections = CompletedSection::where('user_id', $user_id)
                                          ->where('course_id', $course_id)
                                          ->pluck('section_id')
                                          ->toArray();
                                          // Step 2: Find the maximum completed section ID
        $maxCompletedSection = !empty($completedSections) ? max($completedSections) : 0;

        // Step 3: Unlock the next section (max + 1)
        $unlockedSectionIds = array_merge($completedSections, [$maxCompletedSection + 1]);

        // Step 4: Retrieve sections with IDs in the unlockedSectionIds array
        $unlockedSections = Section::whereIn('id', $unlockedSectionIds)->get();
        // Add the localized section name to each section
        $unlockedSections = $unlockedSections->map(function($section) use ($locale) {
            $section->localized_name = $section["section_name_" . $locale];
            return $section;
        });
        $completedSection = CompletedSection::firstOrNew([
          'user_id' => $user_id,
          'course_id' => $course_id,
          'section_id' => $section_id,
        ]);
            // Retrieve the checkbox states from the user_progress table
        $dropdownStates = DB::table('user_progress')
        ->where('user_id', $user_id)
        ->where('course_id', $course_id)
        ->where('section_id', $section_id)
        ->where('finished', '!=', 1)
        ->pluck('dropdown_value', 'practice_id')
        ->toArray();

        if (!$dropdownStates) {
            $dropdownStates = []; // Ensure it's an empty array, not null
        }

        if ($completedSection->exists) {
          $update_at = $completedSection->updated_at;
        } else {
          $update_at = "";
        }

          switch ($locale) {
            case 'uk':
                $sectionName = $section->section_name_uk;
                $courseName = $course->course_name_uk;
                $pageTitle =  __('lesson.practice') . " - " . $courseName . " - " . $sectionName;
                $localizedQuestions = $questions->map(function($question) use ($dropdownStates){
                    $underscoreCount = substr_count($question->question, '_');

                    if($underscoreCount > 1) {
                        $id = (int)($question->id + 100);
                    } else {
                        $id = $question->id;
                    }

                    return [
                        'localizedQuestion' => $question->question_uk,
                      //  'dropdownValue' => $dropdownStates[$id],
                    ];
                });
                break;
            case 'ru':
                $courseName = $course->course_name_ru;
                $sectionName = $section->section_name_ru;
                $pageTitle =  __('lesson.practice') . " - " . $courseName . " - " . $sectionName;
                $localizedQuestions = $questions->map(function($question) use ($dropdownStates) {
                    $underscoreCount = substr_count($question->question, '_');

                    if($underscoreCount > 1) {
                        $id = (int)($question->id + 100);
                    } else {
                        $id = $question->id;
                    }

                    return [
                        'localizedQuestion' => $question->question_ru,
                      //  'dropdownValue' => $dropdownStates[$id],
                    ];
                });
                break;
            default:
                $sectionName = $section->section_name_en;
                $courseName = $course->course_name_en;
                $pageTitle = __('lesson.practice') . " - "  . $courseName . " - " . $sectionName ;
                $localizedQuestions = $questions->map(function($question)  use ($dropdownStates)  {
                    $underscoreCount = substr_count($question->question, '_');

                if($underscoreCount > 1) {
                    $id = (int)($question->id + 100);
                } else {
                    $id = $question->id;
                }
                    return [
                        'localizedQuestion' => $question->question_uk,
                      //  'dropdownValue' => $dropdownStates[$id]  ?? 'default_value',
                    ];
                });
                break;
        }
        $courseNameEn = $course->course_name_en;
        $sectionNameEn = $section->section_name_en;
        $correctAnswers = [];
        $dropdownVals = [];
        $i = 1;
        //dd($localizedQuestions);
        foreach ($questions as $question) {
            $id = (string) $question->id;
            $underscoreCount = substr_count($question->question, '_');

            if ($underscoreCount === 2) {
                if (strpos($question->correct_answer, ', ') !== false) {
                    // Only explode if there is a comma
                    $answers = explode(', ', $question->correct_answer);
                    $correctAnswers[$question->id] = [
                        'part1' => $answers[0] ?? null,
                        'part2' => $answers[1] ?? null
                    ];
                } else {
                    // Fallback to exploding by spaces if no comma is found
                    $answers = explode(' ', $question->correct_answer);
                    $correctAnswers[$question->id] = [
                        'part1' => $answers[0] ?? null,
                        'part2' => $answers[1] ?? null
                    ];
                }

                // Ensure there are at least two parts after the split


                // Handle dropdown states
                if ($dropdownStates) {
                    $dropdownVals[$id] = [
                        $question->id . "1" => $dropdownStates[$id . "1"] ?? null,
                        $question->id . "2" => $dropdownStates[$id . "2"] ?? null,
                    ];
                }
            }
             else {
                $correctAnswers[$id] = [
                    'full' => $question->correct_answer
                ];

                if($dropdownStates) {

                    $dropdownVals[$id] = [

                        $id => $dropdownStates[$id]  ?? null,
                    ];
                }
            }
        }
        //$correctAnswers = $questions->pluck('correct_answer', 'id');
       // Log::info('Completing section', [
       //     'correctAnswers' => $correctAnswers,
       // ]);
       //dd( $dropdownVals);
        return view("courses.section.practice", compact('highesPUpdate', 'unlockedSections', 'courseNameEn', 'sectionNameEn', 'pageTitle','highestPracticeScore', 'highestScoreDate', 'dropdownVals','dropdownStates', 'localizedQuestions', 'hasSubscription', 'update_at','completedSections','locale','allSections','correctAnswers','questions', 'highestPracticeScore', 'courseName', 'section', 'phrases', 'course_id', 'section_id', 'sectionName'));
    }

    function replaceUnderscoresWithSpans($inputString, $id) {
        $idCounter = $id;
        return preg_replace_callback('/_/', function() use (&$idCounter, $id) {
            return '<span id="' .$idCounter++ . '"></span>';
        }, $inputString);
    }

    public function quiz($course_id, $section_id)
{
    $locale = session('locale', config('app.locale'));
    $allquizquestions = Quiz::where('course_id', $course_id)->get();
    $allpracticequestions = Practice::where('course_id', $course_id)->get();
    // Log IDs of questions with multiple underscores
    foreach ($allquizquestions as $onequestion) {
        if (substr_count($onequestion->question, '_') >= 2) {
           // Log::debug('Quiz Question with multiple underscores', ['id' => $onequestion->id, 'question' => $onequestion->question]);
        }
    }
    //Log::debug('');
    foreach ($allpracticequestions as $onequestion) {
        if (substr_count($onequestion->question, '_') >= 2) {
           // Log::debug('Pracrtice Question with multiple underscores', ['id' => $onequestion->id, 'question' => $onequestion->question]);
        }
    }


    $user_id = Auth::id();
    $subscription = Subscribtion::where('user_id', $user_id)
        ->where('course_id', $course_id)
        ->first();
    $hasSubscription = $subscription && $subscription->payment_status === 'completed';
    $section = Section::where('id', $section_id)->where('course_id', $course_id)->firstOrFail();
    $phrases = Phrase::where('section_id', $section_id)->get();
    $questions = Quiz::where('section_id', $section_id)->get();
    $course = Course::where('id', $course_id)->firstOrFail();
    $prevInputValues = DB::table('user_progress')
        ->where('user_id', $user_id)
        ->where('course_id', $course_id)
        ->where('section_id', $section_id)
        ->where('finished', '!=', 1)
        ->pluck('input_value', 'quiz_id')
        ->toArray();
        if (!$prevInputValues) {
            $prevInputValues = []; // Ensure it's an empty array, not null
        }

    $allSections = Section::where('course_id', $course_id)->get();
    $completedSections = CompletedSection::where('user_id', $user_id)
                                          ->where('course_id', $course_id)
                                          ->pluck('section_id')
                                          ->toArray();
    $maxCompletedSection = !empty($completedSections) ? max($completedSections) : 0;

    // Step 3: Unlock the next section (max + 1)
    $unlockedSectionIds = array_merge($completedSections, [$maxCompletedSection + 1]);

    // Step 4: Retrieve sections with IDs in the unlockedSectionIds array
    $unlockedSections = Section::whereIn('id', $unlockedSectionIds)->get();
    // Add the localized section name to each section
    $unlockedSections = $unlockedSections->map(function($section) use ($locale) {
        $section->localized_name = $section["section_name_" . $locale];
        return $section;
    });
    $completedSection = CompletedSection::firstOrNew([
        'user_id' => $user_id,
        'course_id' => $course_id,
        'section_id' => $section_id,
    ]);

    $correctAnswers = [];
    $newAnswersArray = [];

    foreach ($questions as $index => $question) {
        $answers = explode(', ', $question->correct_answer); // Split answers by comma and space
        $points = array_fill(0, count($answers), 5 / count($answers)); // Evenly distribute points
        $correctAnswers[$question->id] = [
            'answers' => $answers,
            'points' => $points
        ];
    }
    $inputValues = [];


    foreach ($correctAnswers as $id => $data) {
        if (count($data['answers']) > 1) {
            foreach ($data['answers'] as $index => $answer) {
                $newId = $id . ($index + 1);
                $inputValues[$newId] = [
                    'id' => $newId,
                    'answer' => $answer,
                    'point' => $data['points'][$index]
                ];
            }
        } else {
            $inputValues[$id] = [
                'id' => $id,
                'answer' => $data['answers'][0],
                'point' => $data['points'][0]
            ];
        }
    }
    $courseNameEn = $course->course_name_en;
    $sectionNameEn = $section->section_name_en;
    $highestPracticeScore = Score::where('user_id', Auth::id())
        ->where('course_id', $course_id)
        ->where('section_id', $section_id)
        ->max('highest_practice_score');
    $currentQScore = Score::where('user_id', Auth::id())
        ->where('course_id', $course_id)
        ->where('section_id', $section_id)
        ->max('quiz_score');
    $highestQScore = Score::where('user_id', Auth::id())
        ->where('course_id', $course_id)
        ->where('section_id', $section_id)
        ->max('highest_quiz_score');
    $highesQUpdate = Score::where('user_id', Auth::id())
        ->where('course_id', $course_id)
        ->where('section_id', $section_id)
        ->where('quiz_score', '>', '0' )
        ->value('updated_at');
    $highestQuizScore = $highestQScore >= $currentQScore ? $highestQScore : $currentQScore;
    $locale = session('locale', config('app.locale'));

    $update_at = $completedSection->exists ? $completedSection->updated_at : "";

    switch ($locale) {
        case 'uk':
            $sectionName = $section->section_name_uk;
            $courseName = $course->course_name_uk;
            $pageTitle = __('lesson.quiz') . " - "  . $courseName . " - " . $sectionName ;
            $localizedQuestions = $questions->map(function ($question) {
                return [
                    'localizedQuestion' => $this->replaceUnderscoresWithSpans($question->question_uk, $question->id),
                ];
            });
            break;
        case 'ru':
            $courseName = $section->course_name_ru;
            $sectionName = $course->section_name_ru;
            $pageTitle = __('lesson.quiz') . " - "  . $courseName . " - " . $sectionName ;
            $localizedQuestions = $questions->map(function ($question) {
                return [
                    'localizedQuestion' => $this->replaceUnderscoresWithSpans($question->question_ru, $question->id),
                ];
            });
            break;
        default:
            $sectionName = $section->section_name_en;
            $courseName = $course->course_name_en;
            $pageTitle = __('lesson.quiz') . " - "  . $courseName . " - " . $sectionName ;
            $localizedQuestions = $questions->map(function ($question) {
                return [
                    'localizedQuestion' => $this->replaceUnderscoresWithSpans($question->question_uk, $question->id),
                ];
            });
            break;
    }


   // dd($newQuestions);
    return view("courses.section.quiz", compact('highesQUpdate', 'unlockedSections', 'courseNameEn', 'sectionNameEn', 'pageTitle', 'prevInputValues', 'inputValues','localizedQuestions', 'hasSubscription', 'allSections', 'completedSections', 'update_at', 'questions', 'correctAnswers', 'courseName', 'sectionName', 'section', 'phrases', 'course_id', 'section_id', 'highestPracticeScore', 'highestQuizScore'));
}


public function updatePracticeScore(Request $request, $course_id, $section_id)
{
    $user_id = Auth::id();
    $practice_score = $request->input('practiceScore') ?? 0;

    $score = Score::firstOrNew([
        'user_id' => $user_id,
        'course_id' => $course_id,
        'section_id' => $section_id,
    ]);

    // Initialize fields to avoid null issues
    $score->practice_score = $practice_score;
    $score->highest_practice_score = $score->highest_practice_score ?? 0;
    $score->quiz_score = $score->quiz_score ?? 0; // Assuming quiz_score is also involved in the calculation
    $score->overall_score = $score->practice_score + $score->quiz_score;

    // Initialize highest_overall_score to 0 if it's null
    $score->highest_overall_score = max($score->highest_overall_score ?? 0, $score->overall_score);

    $score->save();

    return response()->json(['success' => true]);
}

public function updateQuizScore(Request $request, $course_id, $section_id)
{

    $user_id = Auth::id();
    $quiz_score = $request->input('score') ?? 0;

    $score = Score::firstOrNew([
        'user_id' => $user_id,
        'course_id' => $course_id,
        'section_id' => $section_id,
    ]);

    // Ensure that these fields are initialized to avoid null issues
    $score->practice_score = $score->practice_score ?? 0;
    $score->highest_practice_score = $score->highest_practice_score ?? 0;

    $score->quiz_score = $quiz_score;
    $score->highest_quiz_score = max($score->highest_quiz_score ?? 0, $quiz_score);
    $score->overall_score = $score->practice_score + $score->quiz_score;
    $score->highest_overall_score = max($score->highest_overall_score ?? 0, $score->overall_score);

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

    //dd($nextSection);
    if ($nextSection) {
        // Redirect or return the response as per your application logic
        return response()->json(['success' => true]);
    } else {
        // Handle the scenario where there's no next section
        return response()->json(['success' => false]);
    }
}


public function savePracticeProgress(Request $request, $course_id, $section_id)
{
    $user_id = Auth::id();
    $dropdownVals = $request->input('dropdownValues', []);
    $highestPracticeScore = $request->input('practiceScore');

    foreach ($dropdownVals as $dropdownVal) {
        $id = $dropdownVal['id'];
        $value = $dropdownVal['value'];

        // Update or create the record in the user_progress table
        UserProgress::updateOrCreate(
            [
                'user_id' => $user_id,
                'course_id' => $course_id,
                'section_id' => $section_id,
                'practice_id' => $id,
            ],
            [
                'checkbox_state' => null,
                'phrase_id' => null,
                'quiz_id' => null,
                'input_value' => null,
                'dropdown_value' => $value ?? null,
            ]
        );
    }
    $this->updatePracticeScore($request, $course_id, $section_id);

    return response()->json(['success' => true]);
}

public function saveQuizProgress(Request $request, $course_id, $section_id)
{

    $user_id = Auth::id();
    $answers = $request->input('answers', []);
    $highestQuizScore = $request->input('score');

    $howManyDone = DB::table('user_progress')
                    ->where('user_id', $user_id)
                    ->where('course_id', $course_id)
                    ->where('section_id', $section_id)
                    ->where('finished', '!=', 1)
                    ->where('dropdown_value', "!=", "")
                    ->orWhere('input_value', "!=", "")
                    ->count();

    foreach ($answers as $answer) {

        $id = $answer['id'];
        $value = $answer['value'];
        // Update or create the record in the user_progress table
        UserProgress::updateOrCreate(
            [
                'user_id' => $user_id,
                'course_id' => $course_id,
                'section_id' => $section_id,
                'quiz_id' => $id,

            ],
            [
                'practice_id' => null,
                'checkbox_state' => null,
                'phrase_id' => null,
                'input_value' => $value ?? null,
                'dropdown_value' => null,
            ]
        );
    }

    if ($howManyDone >= 20) {
        DB::table('user_progress')
            ->where('user_id', $user_id)
            ->where('course_id', $course_id)
            ->where('section_id', $section_id)
            ->where('dropdown_value', '!=', '')
            ->update([
                'finished' => 1,
            ]);
        DB::table('user_progress')
        ->where('user_id', $user_id)
        ->where('course_id', $course_id)
        ->where('section_id', $section_id)
        ->where('input_value', '!=', '')
        ->update([
            'finished' => 1
        ]);
    }
    $this->updateQuizScore($request, $course_id, $section_id);

    return response()->json(['success' => true]);
}


public function savePhraseProgress(Request $request, $course_id, $section_id)
{
    $user_id = Auth::id();
    $phrases = $request->input('phrases', []);

    foreach ($phrases as $phraseData) {
        $phrase_id = $phraseData['phrase_id'];
        $checked = $phraseData['checked'];

        // Update or create the record in the user_progress table
        UserProgress::updateOrCreate(
            [
                'user_id' => $user_id,
                'course_id' => $course_id,
                'section_id' => $section_id,
                'phrase_id' => $phrase_id,
            ],
            [
                'checkbox_state' => $checked,
                // Set practice_id, quiz_id, input_value, dropdown_value to null since they are not relevant for phrases
                'practice_id' => null,
                'quiz_id' => null,
                'input_value' => null,
                'dropdown_value' => null,
            ]
        );
    }

    return response()->json(['success' => true]);
}



}
