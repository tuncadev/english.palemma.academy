@props(['message_count'])
<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
 </button>

 <aside id="default-sidebar" class="text-sm fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-sky-700 dark:bg-gray-800">
       <ul class="space-y-2 font-medium">
        <li>
            <x-top-logo />
        </li>
          <li>
             <a href="{{route('admin.dashboard')}}" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:text-sky-800 hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-sky-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                   <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                   <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                </svg>
                <span class="ms-3">
                    Dashboard
                </span>
             </a>
          </li>
          <li>
            <button type="button" class="flex items-center w-full p-2 text-sm text-white hover:text-sky-800 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-sky-800 dark:group-hover:text-sky-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                    <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                 </svg>
                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Courses</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </button>
            <ul id="dropdown-example" class="hidden py-2 space-y-2">
                <li>
                    <a href="#" class="flex text-sm items-center group w-full p-2 hover:text-sky-700 text-sky-200 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                        <i class="mr-2 text-yellow-200 group-hover:text-sky-800 fa-solid fa-plus"></i> Add New Course
                    </a>

                </li>
                @foreach ($courses as $course)
                <li>
                    <a href="{{ route('admin.courses', ['course_id' => $course->id]) }}" class="flex text-sm items-center w-full p-2 hover:text-sky-700 text-sky-200 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                        {{ $course->course_name_en }}
                    </a>
                </li>
                @endforeach

            </ul>
          </li>
          <li>
             <a href="{{ route('admin.inbox') }}" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:text-sky-800 hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-sky-800 dark:group-hover:text-sky-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                   <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">
                    Inbox
                </span>
                <span id="unreadMessageCount" class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium group-hover:bg-sky-800 group-hover:text-white text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">
                    {{$message_count}}
                </span>
             </a>
          </li>
          <li>
             <a href="{{ route('admin.users') }}" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:text-sky-800 hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-sky-800 dark:group-hover:text-sky-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                   <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">
                    Users
                </span>
                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium group-hover:bg-sky-800 group-hover:text-white text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">
                    {{$user_count}}
                </span>
             </a>
          </li>
          <li>
             <a href="{{ route('admin.transactions') }}" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:text-sky-800 hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-sky-800 dark:group-hover:text-sky-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                   <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Transactions</span>
                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium group-hover:bg-sky-800 group-hover:text-white text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">
                    {{$transaction_count}}
                </span>
             </a>
          </li>
          <li>
            <a href="{{ route('admin.visitors') }}" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:text-sky-800 hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-sky-800 dark:group-hover:text-sky-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                  <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Visitors</span>
            </a>
         </li>
       </ul>
    </div>
 </aside>
 <script>
function fetchUnreadMessages() {
    // Track the current message count dynamically
    let currentMessageCount = {{$message_count}};

    $.ajax({
        url: '/admin/unread-messages',
        method: 'GET',
        success: function (data) {
            const newMessageCount = data.unreadCount;

            // Update the sidebar message count
            $('#unreadMessageCount').text(newMessageCount);

            // Check if the message count has increased
            if (newMessageCount > currentMessageCount) {
                // If on /admin/inbox, reload the page
                if (window.location.pathname === '/admin/inbox') {
                    location.reload();
                }
            }

            // Update the current message count for subsequent checks
            currentMessageCount = newMessageCount;
        },
        error: function (err) {
            console.error("Error fetching unread messages", err);
        }
    });
}

// Call the function every 3 seconds
setInterval(fetchUnreadMessages, 60000);

// Initial call to fetch unread messages
fetchUnreadMessages();

</script>
