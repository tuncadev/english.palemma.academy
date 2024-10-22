@php
$locale = session('locale', 'uk');
$currentLocale = session('locale', 'uk');
@endphp
<div id="crud-modal-{{$id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-3xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Create New Product
                </h3>
                <button  id="closeModalBtn-{{$id}}" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-toggle="crud-modal-{{$id}}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <div class=" flex flex-col">
                    @php
                        $video_url = $id === 1
                            ? "video/course1/first_" . $locale . ".mp4"
                            : "video/course1/type" . $id-1 . "-" . $locale . ".mp4";
                    @endphp

                    <video id="modalVideo-{{$id}}" controls class="rounded overflow-hidden border border-sky-600 p-2">
                        <source src="{{ asset("$video_url") }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    @include('courses.video.parts.video'.$id)
                </div>

            </div>

        </div>

    </div>


</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var videoID = "crud-modal-{{ $id }}"
        const videoModal = document.getElementById(videoID);
        const closeModalBtn = document.getElementById('closeModalBtn-{{$id}}');
        const modalVideo = document.getElementById('modalVideo-{{$id}}');

        closeModalBtn.addEventListener('click', function () {
            videoModal.classList.add('hidden');
            modalVideo.pause();
        });

        videoModal.addEventListener('click', function (event) {
            if (event.target === videoModal) {
                videoModal.classList.add('hidden');
                modalVideo.pause();
            }
        });
    });
</script>
