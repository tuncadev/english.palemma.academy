
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
    <div class="container pb-12 m-auto">

        <!-- Display success or error messages -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="relative flex flex-col m-auto justify-center sm:max-w-5xl max-w-96">
            <div class="border-b border-b-sky-600 ">
                <h1 class="text-3xl font-bold py-4 text-pink-700">
                    @lang('payment.checkout')
                </h1>
            </div>
            <!-- Payment Form -->
            <div class="relative flex justify-between mt-2 w-full gap-4 border-b border-b-sky-600  p-6">
                <div class="absolute top-0 right-2">
                    <i class="fa-solid fa-xmark hover:cursor-pointer hover:text-red-600" title="remove"></i>
                </div>
                <div class="max-w-32 rounded-full overflow-hidden">
                    <img src="{{asset('images/checkout_thumbnail.jpg')}}" alt="">
                </div>
                <div class="">
                    <h3 class="text-xl text-right font-bold">
                        {{$course->localized_name }}
                    </h3>
                    <p class="text-lg text-right font-semibold text-sky-600">
                        {{ $course->course_price }} ₴
                    </p>
                </div>
            </div>
            <div class="my-6 p-10 bg-sky-500/10 rounded-lg border border-sky-200 mb-6 hover:shadow-lg">
                <h2 class="text-xl  font-semibold uppercase mb-2 text-sky-800">
                    @lang('payment.details'):
                </h2>
                <div class="border border-sky-600 rounded p-6 overflow-x-auto">
                    <table class="border-collapse table-fixed w-full text-xs sm:text-sm">
                        <thead>
                            <tr class="hidden sm:table-row">
                                <th class="uppercase border-b border-b-gray-400 font-medium p-4 pl-8 pt-0 pb-3 text-center sm:text-left text-gray-600">
                                    @lang('course.name')
                                </th>
                                <th class="text-center uppercase border-b border-b-gray-400 font-medium p-4 pt-0 pb-3 text-gray-600">
                                    @lang('course.quantity')
                                </th>
                                <th class="uppercase border-b border-b-gray-400 font-medium p-4 pr-8 pt-0 pb-3 sm:text-left text-gray-600">
                                    @lang('course.price')
                                </th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="sm:table-row flex flex-col sm:flex-row sm:bg-sky-50 sm:rounded-none bg-sky-50 my-4 rounded-lg p-4 border border-sky-300">
                                <td class="font-semibold text-cyan-800 border-b sm:border-0 border-slate-100 p-2 sm:p-4 sm:pl-8 sm:pl-8 text-center sm:text-left sm:text-xl">
                                    <span class="block sm:hidden uppercase text-gray-600">@lang('course.name')</span>
                                    {{$course->localized_name }}
                                </td>
                                <td class="font-semibold text-cyan-800 border-b sm:border-0 text-center border-slate-100 p-2 sm:p-4">
                                    <span class="block sm:hidden uppercase text-gray-600">@lang('course.quantity')</span>
                                    1
                                </td>
                                <td class="font-semibold text-cyan-800 border-b sm:border-0 border-slate-100 p-2 sm:p-4 sm:pr-8 text-center sm:text-left sm:text-xl">
                                    <span class="block sm:hidden uppercase text-gray-600">@lang('course.price')</span>
                                    {{ $course->course_price }} ₴
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>
            <div class="">
                <form method="POST" class="" id="paymentGo"  action="{{ route('payment.create', ['course_id' => $course_id])  }}">
                    @csrf
                    <!-- Personal Details -->
                    <div class="p-10 bg-sky-500/20 rounded-lg border border-sky-200 mb-6 hover:shadow-lg">
                        <div class="flex items-center gap-4 bg-white pl-8 rounded-lg mb-4">
                            <i class="text-3xl text-sky-500 fa-regular fa-id-card"></i>
                            <h2 class="text-xl font-bold py-4 text-sky-700">
                                @lang('payment.personaldetails')
                            </h2>
                        </div>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    @lang('payment.firstname')
                                </label>
                                <input required name="personalInfo[first_name]" type="text" id="first_name" placeholder="John"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            </div>
                            <div>
                                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    @lang('payment.lastname')
                                </label>
                                <input required name="personalInfo[last_name]" type="text" id="last_name" placeholder="@lang('')"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    @lang('payment.email')
                                </label>
                                <input required name="personalInfo[email]" type="email" id="email"  placeholder="yourname@example.com"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            </div>
                            <div>
                                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    @lang('payment.phonenumber')
                                </label>
                                <input required name="personalInfo[phonenumber]" type="text" id="phonenumber"  placeholder="+380 (00) 000-00-00" maxlength="19"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            </div>
                        </div>
                    </div>
                    <!-- Card Details -->
                    <div class="p-10 bg-sky-500/30 rounded-lg border border-sky-200  hover:shadow-lg">
                        <div class="flex items-center gap-2 bg-white pl-8 rounded-lg shadow-inner">
                            <i class="text-3xl text-sky-500 fa-brands fa-cc-mastercard"></i>
                            <i class="text-3xl text-sky-500 fa-brands fa-cc-visa"></i>
                            <h2 class="text-xl font-bold py-6 ml-4 text-sky-700">
                                @lang('payment.carddetails')
                            </h2>
                        </div>
                        <div class="grid gap-6 mb-6 md:grid-cols-5 pt-4  divide-x-2 divide-blue-200">

                            <!-- Card Number Input -->
                            <div class="col-span-3 ">
                                <label for="cardnumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    @lang('payment.cardnumber')
                                </label>
                                <div class="flex items-center gap-4">
                                    <input required type="text" name="cardData[pan]" id="cardnumber" placeholder="1234 5678 9012 3456"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                                    <i class="fa-regular fa-credit-card"></i>
                                </div>
                            </div>

                            <!-- Expiration Date Input -->
                            <div class="col-span-1 pl-6">
                                <label for="expires" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    @lang('payment.expires')
                                </label>
                                <div class="flex items-center gap-4">
                                    <input required type="text"name="cardData[exp]" id="expires" placeholder="MM/YY" maxlength="5"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                                    <i class="fa-regular fa-calendar-days"></i>
                                </div>
                                <p id="expires-error-month" class="text-red-500 text-sm hidden">
                                    @lang('payment.error_expire_month')
                                </p>
                                <p id="expires-error-year" class="text-red-500 text-sm hidden">
                                    @lang('payment.error_expire_year')
                                </p>

                            </div>

                            <!-- CVV Input -->
                            <div class="col-span-1 pl-6">
                                <label for="ccv" class="block mb-2 text-sm font-medium text-gray-900 ">
                                    @lang('payment.cvv')
                                </label>
                                <div class="flex items-center gap-4">
                                    <input required type="password" name="cardData[cvv]" id="ccv" maxlength="3" placeholder="123"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                                    <i class="fa-solid fa-hashtag"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="redirectUrl" id="redirectUrl" value="{{route("payment.callback")}}">

                    <div class="flex items-start py-6 flex-col">
                        <div class="">
                            <input id="agree-check" type="checkbox" name="agree-check" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                            <label for="agree-check" id="agree-label" class="ms-2 text-sm font-medium text-gray-900">
                                {!! trans('payment.termsagree', ['link' => url('/terms'), 'linkp' => url('/privacy')]) !!}
                            </label>
                        </div>
                        <p id="agree-error" class="hidden text-xs text-red-600 pl-8">
                        </p>
                    </div>

                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </div>
    </div>
<script>
    document.getElementById("expires").addEventListener("input", function (e) {
        let value = e.target.value.replace(/\D/g, ""); // Remove non-digit characters
        let errorElementMonth = document.getElementById("expires-error-month");
        let errorElementYear = document.getElementById("expires-error-year");

        if (value.length >= 2) {
            let month = value.substring(0, 2);
            let year = value.substring(2, 4);

            // Check if month is valid
            if (parseInt(month, 10) > 12 || parseInt(month, 10) < 1) {
                e.target.classList.add("border-red-500");
                e.target.classList.remove("border-gray-300", "focus:border-blue-500");
                errorElementMonth.classList.remove("hidden"); // Show error message
            }
            else if (parseInt(year, 10) < 1) {
                e.target.classList.add("border-red-500");
                e.target.classList.remove("border-gray-300", "focus:border-blue-500");
                errorElementYear.classList.remove("hidden"); // Show error message
            }
            else {
                e.target.classList.remove("border-red-500");
                e.target.classList.add("border-gray-300", "focus:border-blue-500");
                errorElementMonth.classList.add("hidden"); // Hide error message
                errorElementYear.classList.add("hidden"); // Hide error message
            }

            // Format the input as MM/YY
            e.target.value = `${month}${year ? '/' + year : ''}`;
        } else {
            e.target.value = value; // Allow typing the first digit(s)
            e.target.classList.remove("border-red-500");
            e.target.classList.add("border-gray-300", "focus:border-blue-500");
            errorElementMonth.classList.add("hidden");
            errorElementYear.classList.add("hidden");
        }
    });

    document.getElementById("expires").addEventListener("blur", function (e) {
        if (e.target.value.length < 5) {
            e.target.value = ""; // Clear if format is incomplete
            e.target.classList.remove("border-red-500");
            document.getElementById("expires-error").classList.add("hidden");
        }
    });
</script>

<script>
    const phoneInput = document.getElementById("phonenumber");

    // Prefill +380 ( on focus
    phoneInput.addEventListener("focus", function (e) {
        if (e.target.value === "") {
            e.target.value = "+380 (";
        }
    });

    // Format input as user types
    phoneInput.addEventListener("input", function (e) {
        let input = e.target.value.replace(/\D/g, ""); // Remove non-numeric characters
        if (input.startsWith("380")) {
            input = input.slice(3); // Remove leading 380 if already present
        }

        // Format the phone number as +380 (00) 000-00-00
        let formatted = "+380 (";

        if (input.length > 0) {
            formatted += input.substring(0, 2); // Area code
        }
        if (input.length >= 2) {
            formatted += ") " + input.substring(2, 5); // Prefix
        }
        if (input.length >= 5) {
            formatted += "-" + input.substring(5, 7); // First part of the local number
        }
        if (input.length >= 7) {
            formatted += "-" + input.substring(7, 9); // Second part of the local number
        }

        e.target.value = formatted;
    });

    // Reset the value if incomplete on blur
    phoneInput.addEventListener("blur", function (e) {
        if (e.target.value.length < 18) {
            e.target.value = ""; // Clear if format is incomplete
        }
    });
</script>

<script>
    const cardNumberInput = document.getElementById("cardnumber");

    // Format card number on input
    cardNumberInput.addEventListener("input", function (e) {
        let input = e.target.value.replace(/\D/g, ""); // Remove non-digit characters

        // Limit to 16 digits
        if (input.length > 16) {
            input = input.substring(0, 16);
        }

        // Format as 0000 0000 0000 0000
        let formatted = "";
        for (let i = 0; i < input.length; i += 4) {
            if (i > 0) formatted += " "; // Add a space between each group of 4 digits
            formatted += input.substring(i, i + 4);
        }

        e.target.value = formatted;
    });

    // Clean up spaces for the actual data submission
    cardNumberInput.addEventListener("blur", function (e) {
        e.target.dataset.cleanValue = e.target.value.replace(/\s/g, ""); // Store raw value without spaces
    });

</script>
<script>
    const checkit = document.getElementById('agree-check');
        const checkitLabel = document.getElementById('agree-label');
        const checkError = document.getElementById('agree-error');
    document.getElementById("paymentGo").addEventListener("submit", async function (e) {
        e.preventDefault();

        if (checkit.checked) {
           this.submit();
        } else {
            console.log("Not checked");
            checkit.classList.add("border-2", "border-red-800");
            checkitLabel.classList.add("text-red-600");
            checkError.classList.remove("hidden");
            checkError.innerHTML ="{{ __('general.agree_error') }}";;
        }

        });
        checkit.addEventListener("change", function () {
            if (checkit.checked) {
            checkit.classList.remove("border-2", "border-red-800");
            checkitLabel.classList.remove("text-red-600");
            checkError.classList.add("hidden");
        }
        });
/*
        // Gather and format the form data
        let form = e.target;
        let formData = new FormData(form);
        // Format card number and expiration date for submission
        let cardNumberInput = document.getElementById("cardnumber");
        formData.set("cardData[pan]", cardNumberInput.dataset.cleanValue || cardNumberInput.value.replace(/\s/g, ""));

        let expiresInput = document.getElementById("expires");
        formData.set("cardData[exp]", expiresInput.value.replace("/", "")); // Format MMYY

        // Convert FormData to JSON format
        let data = {};
        formData.forEach((value, key) => (data[key] = value));

        try {
            // Send POST request to the server
            const response = await fetch(form.action, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                },
                body: JSON.stringify(data),
            });

            const result = await response.json();

            if (result.success) {
                // Display success message and clear the form
                alert(result.message || "Payment created successfully!");
                form.reset();
            } else {
                // Display error message if available
                alert(result.message || "Failed to create payment.");
            }
        } catch (error) {
            console.error("Error submitting form:", error);
            alert("An error occurred during submission. Please try again.");
        }
    });
    */
</script>
@endsection