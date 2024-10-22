@auth
    @php
        $locale = session('locale', 'uk');
        $currentLocale = session('locale', 'uk');
        $video = "introduction_" . $currentLocale . ".mp4";
    @endphp
    @extends('layouts.layout')
        @section('navigation')
        <div class="{{ $hasSubscription ? 'sm:ml-64' : ''}}">
            <div class="relative w-full bg-top_bar shadow-md">
                <x-nav :locale="$locale" :currentLocale="$currentLocale" />
            </div>
            </div>
        </div>
        @endsection
        @section('content')
        <div class="sm:ml-64">
            <div class="mt-2 rounded-lg">
                <div class="p-2 flex flex-col items-center justify-center mb-4 gap-6 rounded bg-gray-50 dark:bg-gray-800">
                    <x-sidebar-responsive />
                    <x-steps-sidebar :courseNameEn="$courseNameEn" :current=0 :allSections="$allSections" :locale="$locale" :completedSections="$completedSections" :course_id="$course_id" />
                    <div class="">
                        <h1 class="text-4xl font-semibold bg-gray-200 p-4 rounded shadow-mds">@lang('course.intro')</h1>
                    </div>
                    <div class="flex flex-col text-center md:max-w-3xl justify-center items-center border-b-2 p-1 border rounded-lg border-sky-700 m-auto">
                        <div class="flex rounded-lg overflow-hidden justify-center video-container items-center">
                            <video class="rounded overflow-hidden video-responsive" controls>
                                <source src="{{ asset("video/course1/$video") }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @endsection
@else
<script>
    document.addEventListener('DOMContentLoaded', function() {
       const modal = new Modal(document.getElementById('authentication-modal'));
       modal.show();
    });
   </script>
@endauth

