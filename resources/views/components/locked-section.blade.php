@props(['name', 'locked', 'id', 'section_en'])
<li {{ $attributes->merge(['class' => 'mt-4 mb-10 ms-6 text-center tracked-component']) }}>
    <span class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-gray-700">
        <i class=" fa-solid fa-lock text-gray-900/40 " aria-hidden="true"></i>
    </span>
    <h3 class="text-sm bg-gray-200 text-gray-400 px-2 py-1 font-normal rounded-lg text-center">
        @lang('sidebar.section') # {{$id}}
    </h3>
    <div class="text-white bg-gray-700/30 px-2 py-1 mt-2 rounded-lg text-center">
        <h4 class="font-medium leading-tight  ">{{ $section_en }}</h4>
    </div>
    <h4 class="text-xs font-normal text-gray-400  text-center">( {{ $name }} )</h4>
</li>
