@props(['name', 'locked', 'id', 'course_id', 'current_id', 'class', 'section_en', 'courseNameEn'])
<a onclick="saveScrollPosition(event)" class="tracked-component" href="{{ route('course.show', ['course_id' => $course_id, 'section_id' => $id]) }}">
<li {{ $attributes->merge(['class' => 'mt-4 mb-10 ms-6 text-center ']) }}>
    <div class="relative -start-6">
    <span class="absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
        <svg class="w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
        </svg>
    </span>
    <span class="absolute flex items-center justify-center w-6 h-6  rounded-full -start-4 top-10 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
        <svg class="w-3.5 h-3.5 text-gray-200 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
            <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
        </svg>
    </span>
    </div>
    <div class="group ">
        <div class="p-2 group-hover:rounded-lg group-hover:bg-sky-200 border-sky-200 border rounded">
            <h3 class="text-sm bg-lime-400/30 group-hover:bg-lime-400 group-hover:font-semibold  group-hover:text-gray-500 text-gray-500 px-2 py-1 font-normal rounded-lg text-center">
                @lang('sidebar.section') # {{$id}}
            </h3>
            <div class="text-white bg-pink-700/30 group-hover:bg-pink-700 px-2 py-1 mt-2 rounded-lg text-center">
                <h4 class="font-medium leading-tight  ">{{ $section_en }}</h4>
            </div>
            <h4 class="text-xs font-normal text-gray-400 group-hover:text-gray-600 text-center">( {{ $name }} )</h4>
            <div class="max-w-96 mt-2 rounded md:rounded-t-none rounded-t-none overflow-hidden shadow-lg">
                <img class="max-h-full rounded opacity-70 group-hover:opacity-100" src="{{asset('images/courses/c'.$course_id.'/s'. $id.'.jpg')}}" alt="{{$courseNameEn}}">
            </div>
            <div class=" mt-1 py-1 px-2 rounded-lg flex flex-col">
                @if ($current_id == $id)
                    <div class=" mt-1 text-xs py-1 px-2 rounded-lg flex flex-col">
                        @lang('sidebar.currentsection')
                    </div>
                @else

                    <div class="bg-green-300/90 text-gray-400 group-hover:text-gray-600 group-hover:bg-green-300 mt-1 py-1 px-2 rounded-lg">
                        @lang('sidebar.completed')
                    </div>
                @endif
            </div>
        </div>

    </div>
</li>
</a>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Select all components you want to track
        const components = document.querySelectorAll('.tracked-component');

        // Loop through each component and calculate its position
        components.forEach(function(component) {
            const rect = component.getBoundingClientRect();
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            // Store the top position relative to the document in a custom attribute
            component.setAttribute('data-scroll-location', rect.top + scrollTop);

        });
    });
</script>
<script>
    function saveScrollPosition(event) {

    // Prevent the default action until we store the scroll location
    event.preventDefault();

    // Get the sidebar and the clicked element
    const sidebar = document.querySelector('#cta-button-sidebar');
    const clickedElement = event.currentTarget;

    // Get the scroll location from the clicked element
    const scrollLocation = clickedElement.getAttribute('data-scroll-location');

    // Save the scroll position in localStorage (or sessionStorage)
    localStorage.setItem('sidebarScrollPosition', scrollLocation);

    // Now navigate to the link (allow default action)
    window.location.href = clickedElement.getAttribute('href');
}

</script>
