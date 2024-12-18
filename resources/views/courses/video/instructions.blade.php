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
                        <x-steps-sidebar :courseNameEn="$courseNameEn" :current=0 :allSections="$allSections" :locale="$locale" :completedSections="$completedSections" :course_id="$course_id" />
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

