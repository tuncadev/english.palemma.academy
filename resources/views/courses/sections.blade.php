@extends('layouts.layout')
@auth
  @section('content')

  <div class="flex flex-col text-center w-full justify-center pb-4 border-b-2 border-gray-300">
    <h1 class="shadow-md p-4 rounded-md text-white bg-s_card-rose text-3xl font-bold mb-6">{{ $courseName }}</h1>
    <p class="flex">
      Description about the course. What it aims, who it is for, what will the user gain after complating....
    </p>

    <div id="alert-border-1" class="mt-4 flex items-center p-4 mb-4 text-blue-800 border-t-4 border-blue-300 bg-blue-50 dark:text-blue-400 dark:bg-gray-800 dark:border-blue-800" role="alert">
      <div class="flex flex-col gap-y-2">
        <div class="flex w-full">
          <i class=" fa-solid fa-lock text-red-600"></i>
          <div class=" ms-3 text-sm font-medium text-left">
            <strong>@lang('lesson.locked-first')</strong>@lang('lesson.locked-second')
          </div>
        </div>
        <div class="flex w-full">
          <i class=" font-bold text-green-700 fa-regular fa-square-check"></i>
          <div class=" ms-3 text-sm font-medium text-left">
            <strong>@lang('lesson.completed')</strong>
          </div>
        </div>
      </div>
      <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-1" aria-label="Close">
        <span class="sr-only">Dismiss</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
      </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 justify-items-center pt-4">
      @foreach ($localizedSections as $index => $section)
        @php

          $colors = [
              'bg-s_card-blue',
              'bg-s_card-gray',
              'bg-s_card-green',
              'bg-s_card-rose',
              'bg-s_card-yellow text-gray-700',
              'bg-s_card-sky text-gray-700',
              'bg-s_card-white text-gray-200',
          ];
          $colorClass = $colors[$index % count($colors)];
          $isCompleted = in_array($section['id'], $completedSections);
          $isUnlocked = $isCompleted || $section['id'] == 1 || in_array($section['id'] - 1, $completedSections);

        @endphp

        @if($isUnlocked)
            <a href="{{ route('course.show', ['course_id' => $course_id, 'section_id' => $section['id'], 'colorClass' => $colorClass]) }}"
            class="relative btn btn-primary ">
                <i class="absolute right-3 top-3 font-bold text-white fa-regular fa-square-check"></i>
                <div class="md:max-w-[18rem] md:min-h-72 md:min-h-56 hover:shadow-xl border shadow-md hover:border-gray-500 hover:border block rounded-lg {{$colorClass}} text-white shadow-secondary-1 {{ $isUnlocked ? 'opacity-100' : 'opacity-50' }}">
                    <div class="border-b-2 border-black/20 px-6 py-3 text-white font-semibold uppercase">
                    @lang('lesson.section') - {{ $section['id']}}
                    </div>
                    <div class="p-6">
                    <h5 class="mb-2 text-xl font-semibold leading-tight">
                        {{ $section['section_name']}}
                    </h5>
                    <p class="text-sm">
                        Here must be a Short Description About This Section, not less than 12 and not more than 18 words.
                    </p>
                    </div>
                </div>
            </a>
        @else
        <div class="c_container relative">
            <i class="absolute fa-solid fa-lock z-10 top-3 right-3" style="color: #3b71ca"></i>
            <div class="md:max-w-[18rem] md:min-h-72 md:min-h-56 border shadow-md  block rounded-lg {{$colorClass}} text-white shadow-secondary-1 {{ $isUnlocked ? 'opacity-100' : 'opacity-50' }}">
                <div class="border-b-2 border-black/20 px-6 py-3 text-white font-semibold uppercase">
                    @lang('lesson.section') - {{ $section['id']}}
                </div>
                <div class="p-6">
                    <h5 class="mb-2 text-xl font-medium leading-tight">
                        {{ $section['section_name']}}
                    </h5>
                    <p class="text-sm">
                        Here must be a Short Description About This Section, not less than 12 and not more than 18 words.
                    </p>
                </div>
            </div>
        </div>
        @endif

      @endforeach
    </div>
  </div>
@endsection
@else
  <div id="popup-modal" tabindex="-1"
    class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full flex" aria-modal="true" role="dialog">
    <div class="relative p-4 w-full md:max-w-md md:max-h-full">
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
              <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
            </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div modal-backdrop="" class="bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40"></div>
@endauth
