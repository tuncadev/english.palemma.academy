<div {{$attributes->merge(['class'=>'items-center justify-between hidden w-full md:flex md:w-auto md:order-1'])}} id="navbar-user">
    <ul class="flex md:w-full m-auto max-w-96 flex-wrap md:flex-nowrap  justify-center text-sm  flex-row font-medium md:p-0 mt-4 border border-gray-100 rounded-lg rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li class="border-r border-r-1 border-sky-200">
        <a href="/" class="flex flex-col items-center text-xs py-2 px-4 text-gray-600 rounded md:bg-transparent md:hover:text-blue-700  md:dark:text-blue-500" aria-current="page">
            <i class="fa-solid fa-house "></i>
            @lang('menu.home')
        </a>
        </li>
        <li class="border-r border-r-1 border-sky-200">
        <a href="/about-me" class="flex flex-col items-center text-xs  py-2 px-4 text-gray-600 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
            <i class="fa-solid fa-address-card"></i>
            @lang('menu.about')
        </a>
        </li>
        <li class="border-r border-r-1 border-sky-200">
        <a href="/contact-us" class="flex flex-col items-center text-xs py-2 px-4 text-gray-600 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
            <i class="fa-solid fa-address-card"></i>
            @lang('menu.contacts')
        </a>
        </li>
    </ul>
    @auth
        <ul class="md:hidden flex md:w-full m-auto max-w-96 flex-wrap md:flex-nowrap  justify-center text-sm  flex-row font-medium md:p-0 border border-gray-100 rounded-lg rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li class="pt-2 md:hidden border-sky-200 border-t-4 border-r border-r-1 border-sky-200">
                <a href="{{ route('dashboard.courses') }}" class="flex flex-col items-center text-xs py-2 px-4 text-gray-600 rounded md:bg-transparent md:hover:text-blue-700  md:dark:text-blue-500" aria-current="page">
                    <i class="fa-solid fa-person-chalkboard text-fuchsia-800"></i>
                @lang('usermenu.mycourses')
                </a>
            </li>
            <li class="pt-2 md:hidden border-sky-200 border-t-4 border-r border-r-1 border-sky-200" >
                <a href="{{ route('profile.edit')}}" class="flex flex-col items-center text-xs  py-2 px-4 text-gray-600 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                    <i class="fa-solid fa-gears text-fuchsia-800"></i>
                @lang('usermenu.profile')
                </a>
            </li>
            <li class="pt-2 md:hidden border-sky-200 border-t-4 border-r border-r-1 border-sky-200">
                <a href="#" class="flex flex-col items-center text-xs py-2 px-4 text-gray-600 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                <i class="fa-regular fa-credit-card text-fuchsia-800"></i>
                @lang('usermenu.payments')
                </a>
            </li>
            <li class="pt-2 md:hidden border-sky-200 border-t-4 ">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex flex-col items-center text-xs  py-2 px-4 text-gray-600 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        <i class="fa-solid fa-arrow-right-from-bracket  text-fuchsia-800"></i>
                        @lang('auth.logout')
                    </button>
                </form>
            </li>
        </ul>
    @endauth
</div>
