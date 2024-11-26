@props(['data', 'id'])
    <div id="message{{$id}}"
        tabindex="-1"
        aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Message
                    </h3>
                    <button type="button" id="close_modal{{$id}}"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="message{{$id}}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="#" id="mark_read" name="mark_read">
                    @csrf
                    <input type="hidden" name="message_id" value="{{$data["id"]}}">
                </form>
                <div class="p-4 md:p-5 space-y-4">
                    <p class="text-xs">
                      <span class="font-semibold text-sky-700 mr-4"> Name:</span> {{$data['name']}}
                    </p>
                    <p class="text-xs">
                        <span class="font-semibold text-sky-700  mr-4"> Subject:</span> {{$data['subject']}}
                    </p>
                    <p class="text-xs">
                        <span class="font-semibold text-sky-700  mr-4"> Email:</span>  <a href="mailto:{{$data['email']}}" class="text-sky-800 underline" _target="blank">{{$data['email']}}</a>
                    </p>
                    <p class="text-xs">
                        <span class="font-semibold text-sky-700  mr-4 mb-4"> Message:</span><br />
                       {{$data['message']}}
                    </p>
                </div>
            </div>
        </div>
    </div>
<script>
    const CloseMsgBtn{{$id}} = document.getElementById('close_modal'+{{$id}});

    CloseMsgBtn{{$id}}.addEventListener('click', () => {
 location.reload();
});
</script>
