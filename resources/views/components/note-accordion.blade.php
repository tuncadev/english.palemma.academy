<div id="accordion-color" style="width: 100% !important" data-accordion="collapse" data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white w-full">
    <h2 id="accordion-color-heading-1 w-full">
      <button type="button" style="width: 100% !important" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
        <span class="">
            @lang('course.note')
        </span>
        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
        </svg>
      </button>
    </h2>
    <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
            <div class="mt-2 mb-4 text-sm">
                <p class="font-semibold">
                    @lang('course.note_msg')
                </p>
            </div>
            <div class="mt-6 mb-4 text-sm">
                <div class="practice-instructions mx-auto">
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                        <div class="col-span-1 font-bold text-sky-700 border-b border-b-gray-300 ">Past Simple</div>
                        <div class="col-span-1 sm:col-span-3 border-b border-b-gray-300">
                            <p>was – {{__('course.was')}}; were – {{__('course.were')}}</p>
                            <p>V2(ed)</p>
                            <p>Did + V, didn’t + V</p>
                        </div>

                        <div class="col-span-1 font-bold text-sky-700 border-b border-b-gray-300">Present Continuous</div>
                        <div class="col-span-1 sm:col-span-3  border-b border-b-gray-300">
                            <p>is, are, am + V(ing)</p>
                        </div>

                        <div class="col-span-1 font-bold text-sky-700 border-b border-b-gray-300">Past Continuous</div>
                        <div class="col-span-1 sm:col-span-3  border-b border-b-gray-300">
                            <p>was, were + V(ing)</p>
                        </div>

                        <div class="col-span-1 font-bold text-sky-700 border-b border-b-gray-300">Present Perfect</div>
                        <div class="col-span-1 sm:col-span-3  border-b border-b-gray-300">
                            <p>have / has + V3(ed)</p>
                        </div>
                    </div>

                    <div class="note mt-4">
                        <p class="font-bold">V = Verb - {{__('course.verb')}}</p>
                        <p>«<strong>Has</strong>» {{__('course.for')}} - (he, she, it)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
