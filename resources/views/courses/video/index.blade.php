@auth
    @php
        $locale = session('locale', 'uk');
        $currentLocale = session('locale', 'uk');
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
                    <x-steps-sidebar  :current=0 :allSections="$allSections" :locale="$locale" :completedSections="$completedSections" :course_id="$course_id" />

                    <div class="flex flex-col text-center w-full justify-center items-center pb-4 border-b-2 border-gray-300 m-auto pt-6">
                        <div class="flex w-full justify-center video-container items-center">
                            <video width="600" controls>
                                <source src="{{ asset('video/course1/introduction_ru.mp4') }}" type="video/mp4">
                                <source src="{{ asset('videos/course1/introduction_ru.mov') }}" type="video/quicktime">
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

