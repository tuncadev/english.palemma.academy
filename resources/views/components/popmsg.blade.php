@props(['course_id', 'section_id'])
<!-- Main modal -->
<div id="modal_answers" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                   @lang('lesson.results')
                </h3>
                <button type="button" onclick="closeModal()" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal_answers">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">@lang('general.closebtn')>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <p class="uppercase text-base leading-relaxed text-gray-500 dark:text-gray-400">
                 <div class="flex p-4 rounded-md items-center bg-red-200">
                    <span id="correct_answers" class="text-md font-semibold text-green-500 mr-2"></span>
                    <span id="correct_count" class="font-semibold text-lg text-gray-800"></span>
                </div>
                <div class="flex p-4 rounded-md items-center bg-green-200">
                    <span id="wrong_answers"  class="text-md font-semibold text-red-500 mr-2" ></span>
                    <span id="wrong_count" class="font-semibold text-lg text-gray-800"></span></div>
                </p>

            </div>
            <!-- Modal footer -->
            <div class="flex   items-center justify-end p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button onclick="closeModal()" data-modal-hide="modal_answers" type="button" class="uppercase text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    @lang('general.closebtn')
                </button>
            </div>

        </div>
    </div>
</div>
