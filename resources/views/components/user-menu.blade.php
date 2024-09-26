<div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
  <x-switch-language :currentLocale="$currentLocale" />
  @auth
    <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">
        @lang('general.openusermenu')
        </span>
        @if (auth()->user()->avatar)
        <img class="w-8 h-8 rounded-full object-cover" src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="user photo">
        @else
        <img class="w-8 h-8 rounded-full object-cover" src="{{asset('images/avatar.jpg')}}" alt="user photo">
        @endif
    </button>
    <!-- Dropdown menu -->
    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
        <div class="px-4 py-3">
        <span class="block text-sm text-gray-900 dark:text-white">
            {{ auth()->user()->name }}
        </span>
        <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">
            {{ auth()->user()->email }}
        </span>
        </div>
        <ul class="py-2" aria-labelledby="user-menu-button">
        <li>
            <a href="{{ route('dashboard.courses') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-fuchsia-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                <i class="fa-solid fa-person-chalkboard text-fuchsia-800 mr-1"></i>
                @lang('usermenu.mycourses')
            </a>
        </li>
        <li>
            <a href="{{ route('profile.edit')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-fuchsia-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                <i class="fa-solid fa-gears text-fuchsia-800 mr-1"></i>
                @lang('usermenu.profilesettings')
            </a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-fuchsia-100 dark:hover:bg-fuchsia-600 dark:text-gray-200 dark:hover:text-white">
                <i class="fa-regular fa-credit-card text-fuchsia-800 mr-1"></i>
                @lang('usermenu.mypayments')
            </a>
        </li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
            @csrf
                <button type="submit" class="w-full text-left block px-4 py-2 text-sm text-gray-700 ml-0 hover:bg-fuchsia-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                    <i class="fa-solid fa-arrow-right-from-bracket  text-fuchsia-800 mr-1"></i>
                    @lang('auth.logout')
                </button>
            </form>
        </li>
        </ul>
    </div>
  @else
    <button
        data-modal-target="authentication-modal"
        data-modal-toggle="authentication-modal"
        class="capitalize block text-blue-700 hover:text-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs  py-1 text-center"
        type="button">
        <i class="fa-solid fa-right-to-bracket"></i>

    </button>
  @endauth
  <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
    <span class="sr-only">
      @lang('general.open_menu')
    </span>
    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
    </svg>
  </button>
</div>


