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
    <ul class="md:hidden flex justify-center border-t border-t-sky-200  gap-2 w-full m-auto max-w-96 font-medium p-0 rtl:space-x-reverse dark:bg-gray-800 dark:border-gray-700">
            <li class="pt-2 border-y-sky-200 border-r border-r-1 border-sky-200">
                <a href="{{ route('dashboard.courses') }}" class="flex flex-col items-center text-[12px] py-2 px-2 text-gray-600 rounded md:bg-transparent md:hover:text-blue-700 dark:text-blue-500" aria-current="page">
                    <i class="fa-solid fa-person-chalkboard text-fuchsia-800"></i>
                   <p> @lang('usermenu.mycourses')</p>
                </a>
            </li>
            <li class="pt-2 border-y-sky-200 border-r border-r-1 border-sky-200">
                <a href="{{ route('profile.edit')}}" class="flex flex-col items-center text-[12px] py-2 px-2 text-gray-600 rounded md:bg-transparent md:hover:text-blue-700 dark:text-blue-500">
                    <i class="fa-solid fa-gears text-fuchsia-800"></i>
                    @lang('usermenu.profile')
                </a>
            </li>
            {{--
            <li class="pt-2 border-y-sky-200 border-r border-r-1 border-sky-200">
                <a href="#" class="flex flex-col items-center text-[12px] py-2 px-2 text-gray-600 rounded md:bg-transparent md:hover:text-blue-700 dark:text-blue-500">
                    <i class="fa-regular fa-credit-card text-fuchsia-800"></i>
                    @lang('usermenu.payments')
                </a>
            </li>
            --}}
            <li class="pt-2">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex flex-col items-center text-[12px] py-2 px-2 text-gray-600 rounded md:bg-transparent md:hover:text-blue-700 dark:text-blue-500">
                        <i class="fa-solid fa-arrow-right-from-bracket text-fuchsia-800"></i>
                        @lang('auth.logout')
                    </button>
                </form>
            </li>
    </ul>

    @endauth
</div>
