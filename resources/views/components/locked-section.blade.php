@props(['name', 'locked', 'id'])
<span class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-gray-700">
    <i class=" fa-solid fa-lock text-gray-900/40 " aria-hidden="true"></i>
</span>
<h3 class="font-medium leading-tight">{{ $name }}</h3>
<p class="text-sm">
    @lang('sidebar.section') # {{$id}}
</p>

