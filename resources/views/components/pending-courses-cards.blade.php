<div data-text="{{$badge}}"  class="card-sticker card-sticker--{{$badgeClass}} w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="top bg-badgeOrange pt-10 pb-5 px-4 opacity-40 ">
        <h1 class="font-bold text-gray-200 text-2xl">@lang('general.course') - № {{ $course->id }}</h1>
        <h2 class="font-bold text-white text-2xl mb-6">{{ $course->course_name }}</h2>
        <div class="flex flex-col flex-wrap content-center justify-center gap-x-4 text-xs text-gray-900">
          <span><i class="fa-regular fa-circle-check mr-4" style="color: #B197FC;"></i> 1000 phrases</span>
          <span><i class="fa-regular fa-circle-check mr-4" style="color: #97d4fc;"></i> 500 quiz questions</span>
          <span><i class="fa-regular fa-circle-check mr-4" style="color: #97fca4;"></i> 12 sections</span>
          <span><i class="fa-regular fa-circle-check mr-4" style="color: #fcd997;"></i> 100 practice phrases</span>
        </div>
    </div>
    <div class="flex flex-col items-center p-4">
        <div class="flex flex-col items-center justify-center w-full p-4 gap-2">
            <div class="w-full flexflex-col text-center border border-green-300 rounded-lg p-x-4">
                <span class="text-sm text-green-500 dark:text-gray-400 ">Subscribed at: <span class="italic text-sm text-gray-500 dark:text-gray-400">{{ $course->subscribtionDate }}</span></span>
            </div>
            <div class="w-full flex flex-col text-center border border-orange-300 rounded-lg p-x-4">
                <span class="text-sm text-orange-500 dark:text-gray-400">Payment Status: <span class="italic text-sm text-gray-500 dark:text-gray-400">{{$badge}}</span></span>
            </div>
        </div>
    </div>
</div>
