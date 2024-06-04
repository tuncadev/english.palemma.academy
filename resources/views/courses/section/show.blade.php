@extends('layouts.layout')

@auth

  @section('content')
    <div class="flex w-full justify-center p-4 max-w-md flex-col items-end min-h-60 dsection rounded-lg border-gray-300 border shadow-lg">
        <h1  id="top" class="text-xl">
            {{ $courseName }}
        </h1>
        <h2 class="text-xl font-bold bg-blue-600/25 px-4 py-2 rounded-xl capitalize shadow-md">
            {{ $section_id }} - {{ $sectionName }}
        </h2>
        <ul class="text-xs mt-4 max-w-80 list-outside bg-blue-200 p-4 rounded-xl shadow-md">
            <li><i class="fa-solid fa-language mr-1" style="color: #2583cb;"></i>@lang('lesson.click')</li>
            <li><i class="mr-2 fa-regular fa-circle-check mr-1" style="color: #2583cb;"></i>@lang('lesson.check')</li>
            <li><i class="fa-solid fa-check-double mr-1" style="color: #2583cb;"></i>@lang('lesson.all_done')</li>
        </ul>
    </div>
    <div id="warn" class="hidden w-full md:w-10/12 flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert">
      <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
      </svg>
      <div class="ms-3 text-sm font-medium">
        @lang('lesson.not_checked')
      </div>
    </div>
    <form class="w-full md:w-10/12 pb-20" id="phrases-form" action="{{ route('course.practice', ['course_id' => $course_id, 'section_id' => $section_id]) }}" method="GET" onsubmit="return validateForm()">
        <ul>
            @foreach ($localizedPhrases as $phrase)
            <x-phrase-card :phrase="$phrase" class="max-w-96"/>
            @endforeach
        </ul>
        <div class="flex justify-between items-center">
          <span id="score"></span>
          <button type="submit" class="flex items-center gap-x-4 px-8 py-1 font-semibold bg-blue-800 mt-3 border rounded-lg text-white hover:bg-gray-200 hover:text-blue-800 hover:border hover:border-blue-800">
            @lang('lesson.next') <i class="fa-solid fa-circle-right"></i>
          </button>
        </div>
    </form>
    <script>
    function toggleTranslation(id) {
        var element = document.getElementById('translation-' + id);
        if (element.style.display === 'none') {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    }

    function validateForm() {
        var checkboxes = document.querySelectorAll('.phrase-checkbox');
        var allChecked = true;

        checkboxes.forEach(function(checkbox) {
            if (!checkbox.checked) {
                allChecked = false;
            }
        });
        if (allChecked) {
          return true;
        } else {
          var warn = document.getElementById('warn');
          warn.style.display = 'flex';
          location.href = "#top";
          return false;
        }

    }
    </script>
  @endsection
  @else
  <div id="popup-modal" tabindex="-1" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full flex" aria-modal="true" role="dialog">
      <div class="relative p-4 w-full max-w-md max-h-full">
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <div class="px-4 pt-4 md:px-5 md:pt-5 text-center">
                  <svg class="mx-auto mb-4 text-rose-600 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                  </svg>
                  <h3 class="mb-5 text-lg font-normal text-rose-500 dark:text-gray-400">
                    @lang('general.warn-signin')
                  </h3>
              </div>
              <div class="px-4 pb-4 md:px-5 md:pb-5">
                <form class="space-y-4"  action="{{ route('login') }}" method="POST">
                  @csrf

                    <!-- Display Errors -->
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">@lang('auth.error')</strong>
                            <span class="block sm:inline">{{ $errors->first() }}</span>
                        </div>
                    @endif

                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-start">
                          <div class="flex items-center h-5">
                            <input id="remember" name="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" />
                          </div>
                          <label for="remember" class="ms-2 text-sm font-medium text-gray-900 ">
                            @lang('auth.remember')
                          </label>
                        </div>
                        <a href="javascript:void(0);" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                </form>
            </div>
          </div>
      </div>
  </div>
  <div modal-backdrop="" class="bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40"></div>
@endauth
