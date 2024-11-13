
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
    <div class="min-h-screen bg-blue-50 flex items-center justify-center p-6">
        <div class="flex flex-col">
            <h1 class="text-4xl font-bold text-blue-800 mb-6 text-center">
                @lang('general.contactme')
            </h1>
            <x-personal-card />
            <div class="w-full max-w-4xl bg-white rounded-lg shadow-md p-8">

                <p class="text-center text-blue-600 mb-10">
                    @lang('general.contactmetext')
                </p>

                <!-- Contact Information -->
                <div class="flex flex-col lg:flex-row lg:justify-between mb-8">
                    <div class="flex items-center mb-4 lg:mb-0">
                        <i class="fa-solid fa-envelope text-blue-700 text-xl mr-3"></i>
                        <span class="text-blue-700 font-semibold">emma@palemma.academy</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fa-solid fa-phone text-blue-700 text-xl mr-3"></i>
                        <span class="text-blue-700 font-semibold">+380 (93) 123 45 67</span>
                    </div>
                </div>
               <x-success />
                <!-- Contact Form -->
                <form action="{{ route('form.submit') }}" method="POST" class="space-y-6" id="sendMessage">
                    @csrf
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- Name Field -->
                        <div>
                            <label class="block text-sm font-medium text-blue-800 mb-1">
                                @lang('general.fullname')
                            </label>
                            <input type="text" name="name" required placeholder="@lang('general.fullname_ph')"
                                class="w-full border border-blue-300 rounded-md px-3 py-2 text-blue-800 placeholder-blue-300 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500" />

                        </div>

                        <!-- Email Field -->
                        <div>
                            <label class="block text-sm font-medium text-blue-800 mb-1">
                                @lang('general.email')
                            </label>
                            <input type="email" name="email" required placeholder="@lang('general.email_ph')"
                                class="w-full border border-blue-300 rounded-md px-3 py-2 text-blue-800 placeholder-blue-300 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500" />
                        </div>
                    </div>

                    <!-- Subject Field -->
                    <div>
                        <label class="block text-sm font-medium text-blue-800 mb-1">
                            @lang('general.subject')
                        </label>
                        <input type="text" name="subject" required placeholder="@lang('general.subject_ph')"
                            class="w-full border border-blue-300 rounded-md px-3 py-2 text-blue-800 placeholder-blue-300 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500" />

                    </div>

                    <!-- Message Field -->
                    <div>
                        <label class="block text-sm font-medium text-blue-800 mb-1">
                            @lang('general.message')
                        </label>
                        <textarea name="userMessage" rows="4"  maxlength="255" oninput="updateCharacterCount(this)" required placeholder="@lang('general.message_ph')"
                            class="w-full border border-blue-300 rounded-md px-3 py-2 text-blue-800 placeholder-blue-300 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"></textarea>
                            <span id="charCount" class="text-sm text-blue-600">мах 255</span>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <div id="successMsg" class="hidden">
                            <div id="successMessage"></div>
                        </div>
                        <div id="failureMsg" class="hidden">
                            <div id="failMessage"></div>
                        </div>
                        <button type="submit"
                            class="w-full lg:w-1/3 bg-blue-700 hover:bg-blue-800 text-white font-semibold py-2 rounded-md shadow-md transition-colors duration-200">
                            @lang('general.send')
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script>
    function updateCharacterCount(input) {
        const maxLength = 255;
        const currentLength = input.value.length;
        const remaining = maxLength - currentLength;
        document.getElementById("charCount").textContent = remaining + " @lang('general.chars_left')";
    }
    $(document).ready(function() {
        const myForm = document.getElementById('sendMessage');
        const successMsg = document.getElementById('successMsg');
        const successMessage = document.getElementById('successMessage');

        const failureMsg = document.getElementById('failureMsg');
        const failMessage = document.getElementById('failMessage');

        $('#sendMessage').on('submit', function(event) {
            event.preventDefault();


            $.ajax({
                url: "{{ route('form.submit') }}", // Ensure this matches your route
                method: "POST",
                data: {
                    name: $('input[name="name"]').val(),
                    email: $('input[name="email"]').val(),
                    subject: $('input[name="subject"]').val(),
                    userMessage: $('textarea[name="userMessage"]').val(), // Use 'message' here
                    _token: "{{ csrf_token() }}" // Add CSRF token
                },
                success: function(response) {
                    myForm.classList.add('hidden');
                    successMsg.classList.remove('hidden');
                    successMessage.innerHTML = "{{ __('mail.sent') }}";

                },
                error: function(response) {
                    myForm.reset();
                    failureMsg.classList.remove('hidden');
                    failMessage.innerHTML = "{{ __('mail.failure') }}";
                }
            });

        });
    });

</script>
@endsection
