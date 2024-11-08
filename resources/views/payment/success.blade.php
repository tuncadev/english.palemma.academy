
@php
$locale = session('locale', 'uk');
@endphp
@extends('layouts.layout')
    @section('navigation')

        <div class="relative w-full bg-top_bar shadow-md">
            <x-nav :locale="$locale" />
        </div>

    @endsection

    @section('content')
        @if ($invoiceId)
            <div class="  py-10 mt-10 max-w-4xl m-auto  flex items-center justify-center px-4">
                <div class="bg-white rounded-lg shadow-lg p-10 text-center">
                    <i class="fas fa-check-circle text-green-500 text-6xl mb-4"></i>
                    <h1 class="text-2xl font-semibold mb-2">
                        {{ $first_name }}, @lang('payment.payment_received')
                    </h1>
                    <p class="text-gray-700 leading-6">
                        @lang('payment.thanks_msg', ['course_name' => $course_name])
                    </p>
                </div>
            </div>
            <div class="m-auto max-w-4xl text-center pb-8">
                <div id="alert-additional-content-2" class="p-4 mb-4 text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
                    <div class="flex items-center">
                      <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                      </svg>
                      <span class="sr-only">Info</span>
                      <h3 class="text-lg font-medium uppercase">
                        @lang('payment.set_password')
                    </h3>
                    </div>
                    <div class="mt-2 mb-4 text-sm text-left">
                        @lang('payment.set_password_instructions')
                    </div>
                </div>
                  <form method="POST" action="{{ route('payment.saveuser', ['token' => $token]) }}" id="formSaveUser" class="px-3">
                    @csrf
                    <input type="hidden" name="course_id" id="course_{{$course_id}}" value="{{$course_id}}">
                     <!-- Personal Details -->
                     <div class=" rounded-lg mb-6 text-left">
                        <div class="flex flex-col items-left justify-start bg-white rounded-lg mb-4">
                            <div class="flex flex-row items-center gap-4">
                                <i class="text-3xl text-sky-500 fa-regular fa-id-card"></i>
                                <h2 class="text-xl font-bold text-sky-700">
                                    @lang('payment.personaldetails')
                                </h2>
                            </div>
                            <p class="text-xs text-left uppercase mt-1 underline text-red-700 font-semibold">
                               * @lang('payment.check_details')
                            </p>
                        </div>
                        <div class="md:grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    @lang('payment.firstname')
                                </label>
                                <input required name="name" value="{{$first_name}} {{$last_name}}" type="text" readonly id="name" placeholder="{{__('form.first_name_ph')}}"  class="readonly:bg-gray-200 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    @lang('payment.email')
                                </label>
                                <input required name="email" value="{{$email}}"  type="email" id="payment_email" readonly placeholder="{{__('form.email_ph')}}"  class="disabled:bg-gray-200 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            </div>
                            <div>
                                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    @lang('payment.phonenumber')
                                </label>
                                <input required name="phone" value="{{$phone}}"  type="text" id="phonenumber" readonly placeholder="+380 (00) 000-00-00" maxlength="19"  class="disabled:bg-gray-200 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-b-gray-300 h-3 w-full"></div>
                    <div class="mt-6 rounded-lg mb-6">
                        <div class="flex flex-col items-left justify-start bg-white rounded-lg mb-4">
                            <div class="flex flex-row items-center gap-4">
                                <i class="text-3xl text-sky-500 fa-solid fa-key"></i>
                                <h2 class="text-xl font-bold text-sky-700 capitalize">
                                    @lang('form.password')
                                </h2>
                            </div>
                            <p class="text-xs text-left uppercase mt-1 underline text-red-700 font-semibold">
                               * @lang('payment.set_passdword')
                            </p>
                        </div>
                        <div class="md:grid gap-6 mb-6 md:grid-cols-2 text-left mt-6">
                            <!-- Password Field -->
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    @lang('form.choose_password')
                                </label>
                                <div class="relative w-full max-w-xs">
                                    <span class="absolute inset-y-0 right-2 flex items-center hover:cursor-pointer text-gray-400">
                                        <i class="fas fa-eye z-50" id="togglePassword" title="Show password"></i>
                                    </span>
                                    <input
                                    required name="password"
                                    id="user_password"
                                    type="password"
                                    placeholder="*********"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                                </div>
                            </div>

                            <!-- Password Confirmation Field -->
                            <div>
                                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    @lang('form.confirm_password')
                                </label>
                                <div class="relative w-full max-w-xs">
                                    <span class="absolute inset-y-0 right-2 flex items-center hover:cursor-pointer text-gray-400">
                                        <i class="fas fa-eye z-50" id="togglePasswordConfirm" title="Show password"></i>
                                    </span>
                                    <input required name="password_confirmation" type="password" id="password_confirmation" placeholder="*********" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                                </div>
                                <div id="passwordMatchMessage"></div>
                            </div>
                        </div>
                    </div>
                    <x-empty-space :height="10" />
                    <button type="submit" id="submitFormButton" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-1/2 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        @lang('form.save')
                    </button>
                </form>
            </div>
            <x-empty-space :height="32" />
        @else
        <div class="bg-sky-500/20 py-10 mt-10 max-w-4xl m-auto rounded-lg shadow-lg flex items-center justify-center">
            <div class="bg-white rounded-lg shadow-lg p-10 text-center">
                <i class="fa-solid fa-road-barrier text-amber-500 text-6xl mb-4"></i>
                <h1 class="text-5xl text-red-600 font-semibold mb-2">
                    @lang('error_msg.stop')
                </h1>
                <p class="text-gray-700 font-semibold">
                    @lang('error_msg.no_permisson')
                </p>
            </div>
        </div>
        @endif

        <script>
            // Toggle password visibility for the main password field using mousedown and mouseup
            const passwordInput = document.getElementById('user_password');
            const togglePassword = document.getElementById('togglePassword');

            togglePassword.addEventListener('mousedown', function () {
                passwordInput.setAttribute('type', 'text'); // Show password
                this.classList.add('fa-eye-slash'); // Toggle icon to "slash"
            });

            togglePassword.addEventListener('mouseup', function () {
                passwordInput.setAttribute('type', 'password'); // Mask password again
                this.classList.remove('fa-eye-slash'); // Revert icon to "eye"
            });

            // Ensure password is masked if mouse leaves icon while pressed
            togglePassword.addEventListener('mouseleave', function () {
                passwordInput.setAttribute('type', 'password');
                this.classList.remove('fa-eye-slash');
            });

            // Toggle password visibility for the confirmation password field using mousedown and mouseup
            const passwordConfirmInput = document.getElementById('password_confirmation');
            const togglePasswordConfirm = document.getElementById('togglePasswordConfirm');

            togglePasswordConfirm.addEventListener('mousedown', function () {
                passwordConfirmInput.setAttribute('type', 'text'); // Show password
                this.classList.add('fa-eye-slash'); // Toggle icon to "slash"
            });

            togglePasswordConfirm.addEventListener('mouseup', function () {
                passwordConfirmInput.setAttribute('type', 'password'); // Mask password again
                this.classList.remove('fa-eye-slash'); // Revert icon to "eye"
            });

            // Ensure password is masked if mouse leaves icon while pressed
            togglePasswordConfirm.addEventListener('mouseleave', function () {
                passwordConfirmInput.setAttribute('type', 'password');
                this.classList.remove('fa-eye-slash');
            });

            const formSaveUser = document.getElementById('formSaveUser');
            const passwordsMatchText = "{{ __('form.passwords_match') }}";
            const passwordsDoNotMatchText = "{{ __('form.passwords_do_not_match') }}";
            const passwordsDoNotMatchOrEmptyText = "{{ __('form.passwords_do_not_match_or_empty') }}";

            // Password match validation
            passwordConfirmInput.addEventListener('input', function () {
                if (passwordInput.value === passwordConfirmInput.value) {
                    passwordMatchMessage.textContent = passwordsMatchText;
                    passwordMatchMessage.style.color = 'green';
                } else {
                    passwordMatchMessage.textContent =  passwordsDoNotMatchText;
                    passwordMatchMessage.style.color = 'red';
                }
            });

            // Form submit event to check password match before submission
            formSaveUser.addEventListener('submit', function (event) {
                // Prevent default form submission
                event.preventDefault();

                // Check if passwords match
                if (passwordInput.value === passwordConfirmInput.value && passwordInput.value !== '') {
                    formSaveUser.submit(); // Submit the form if passwords match
                } else {
                    passwordMatchMessage.textContent = passwordsDoNotMatchOrEmptyText;
                    passwordMatchMessage.style.color = 'red';
                }
            });
        </script>
    @endsection
