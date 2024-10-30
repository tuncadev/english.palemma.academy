  @props(['course', 'courseNameLocale', 'price','invoice_number'])

  <div id="payment-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <div class="flex flex-col">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    @lang('payment.checkout')
                  </h3>
                  <h4 class="text-sm">
                    @lang('payment.invoice_number'): {{ $invoice_number }}
                  </h4>
                </div>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="payment-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
                <div class="relative flex max-w-4xl p-4 md:p-5 gap-4 border-b" id="cartItem">
                    <div class="max-w-20 rounded-full overflow-hidden">
                        <img src="{{asset('images/checkout_thumbnail.jpg')}}" alt="">
                    </div>
                    <div class="flex flex-col ">
                        <h3 class="text-sm font-bold">
                            {{ $courseNameLocale }}
                        </h3>
                        <p class="text-sm font-semibold text-sky-600">
                            {{ $price }} ₴
                        </p>
                    </div>
                    <button id="removeItem" type="button" class="group text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-lg w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="  w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">@lang('payment.remove_item')</span>
                        <div class="hidden absolute right-20 sm:group-hover:block text-xs text-gray-400">@lang('payment.remove_item')</div>
                    </button>


                </div>
                <div class="w-full p-4">
                    <p class="text-right font-semibold">
                        @lang('payment.sum'): <span  id="sum"> {{ $price }}</span> ₴
                    </p>
                </div>
              <!-- Modal body -->
              <div class="p-4">
                <form method="POST" class="" id="paymentGo"  action="{{ route('payment.create', ['course_id' => $course->id])  }}">
                    @csrf
                    <input type="hidden" name="invoice_number" id="invoice_number" value="{{$invoice_number}}">
                    <!-- Personal Details -->
                    <div class=" rounded-lg mb-6">
                        <div class="flex flex-col items-left justify-start bg-white rounded-lg mb-4">
                            <div class="flex flex-row items-center gap-4">
                                <i class="text-3xl text-sky-500 fa-regular fa-id-card"></i>
                                <h2 class="text-xl font-bold text-sky-700">
                                    @lang('payment.personaldetails')
                                </h2>
                            </div>
                            <p class="text-xs uppercase mt-1 underline">
                               * @lang('payment.enter_personal_details')
                            </p>
                        </div>
                        <div class="md:grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    @lang('payment.firstname')
                                </label>
                                <input required name="personalInfo[first_name]" type="text" id="first_name" placeholder="{{__('form.first_name_ph')}}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            </div>
                            <div>
                                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    @lang('payment.lastname')
                                </label>
                                <input required name="personalInfo[last_name]" type="text" id="last_name" placeholder="{{__('form.last_name_ph')}}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    @lang('payment.email')
                                </label>
                                <input required name="personalInfo[email]" type="email" id="payment_email"  placeholder="{{__('form.email_ph')}}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            </div>
                            <div>
                                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    @lang('payment.phonenumber')
                                </label>
                                <input required name="personalInfo[phonenumber]" type="text" id="phonenumber"  placeholder="+380 (00) 000-00-00" maxlength="19"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-b-gray-300 h-3 w-full"></div>
                   <!-- Payment Options -->
                    <div class="flex flex-col gap-4 my-4">
                        <div class="flex flex-col items-left justify-start bg-white rounded-lg mb-4">
                            <div class="flex flex-row items-center gap-4">
                                <i class="text-3xl text-sky-500 fa-regular fa-id-card"></i>
                                <h2 class="text-xl font-bold text-sky-700">
                                    @lang('payment.payment_options')
                                </h2>
                            </div>
                            <p class="text-xs uppercase mt-1 underline">
                               * @lang('payment.choose_method')
                            </p>
                        </div>
                        <!-- Bank Transfer Radio Button -->
                        <div class="flex">
                            <div class="flex items-center h-5">
                                <input id="bank_transfer_uah_radio" name="payment_method" type="radio" value="bank_transfer" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                            </div>
                            <div class="ms-2 text-sm">
                                <label for="bank_transfer_uah_radio" class="font-medium text-gray-900 dark:text-gray-300">
                                    @lang('payment.bank_transfer') (UAH)
                                </label>
                                <p id="helper-radio-text" class="text-xs font-normal text-gray-500 dark:text-gray-300">
                                    @lang('payment.bank_transfer_info')
                                </p>
                            </div>
                        </div>
                        <!-- Bank Transfer SWIFT Radio Button -->
                        <div class="flex">
                            <div class="flex items-center h-5">
                                <input id="bank_transfer_swift_radio" name="payment_method" type="radio" value="bank_transfer" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                            </div>
                            <div class="ms-2 text-sm">
                                <label for="bank_transfer_swift_radio" class="font-medium text-gray-900 dark:text-gray-300">
                                    @lang('payment.bank_transfer') (USD)
                                </label>
                                <p id="helper-radio-text" class="text-xs font-normal text-gray-500 dark:text-gray-300">
                                    SWIFT
                                </p>
                            </div>
                        </div>
                        <!-- Credit Card Radio Button -->
                        <div class="flex">
                            <div class="flex items-center h-5">
                                <input id="credit_card_radio" name="payment_method" type="radio" value="credit_card" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                            </div>
                            <div class="ms-2 text-sm">
                                <label for="credit_card_radio" class="font-medium text-gray-900 dark:text-gray-300">
                                    @lang('payment.pay_by_card')
                                </label>
                                <p id="helper-radio-text" class="text-xs font-normal text-gray-500 dark:text-gray-300">
                                    @lang('payment.pay_by_card_info')
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-b-gray-300 h-3 w-full"></div>
                    <!-- IBAN Details -->
                    <div class="hidden" id="bank_transfer_iban">
                        <div class="flex items-center gap-2 bg-white rounded-lg shadow-inner">
                            <i class="text-3xl text-sky-500 fa-solid fa-money-bill-transfer"></i>
                            <h2 class="text-xl font-bold py-6 ml-4 uppercase text-sky-700">
                               @lang('payment.bank_details') - (Україна - грівна)
                            </h2>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="hidden sm:table  min-w-full text-xs bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                                <thead>
                                    <tr>
                                        <th class="p-2 bg-sky-300 dark:bg-gray-700 text-gray-600 dark:text-gray-300 font-semibold text-xs text-left uppercase tracking-wider border-b dark:border-gray-600">
                                            @lang('payment.bank_name')
                                        </th>
                                        <th class="p-2 bg-sky-300 dark:bg-gray-700 text-gray-600 dark:text-gray-300 font-semibold text-xs text-left uppercase tracking-wider border-b dark:border-gray-600">
                                            IBAN
                                        </th>
                                        <th class="p-2 bg-sky-300 dark:bg-gray-700 text-gray-600 dark:text-gray-300 font-semibold text-xs text-left uppercase tracking-wider border-b dark:border-gray-600">
                                            @lang('payment.swift_code')
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700 dark:text-gray-200">
                                    <tr class="hover:bg-gray-200">
                                        <td class="p-2  border-b border-gray-200 dark:border-gray-600">
                                            PrivatBank
                                        </td>
                                        <td class="p-2  border-b border-gray-200 dark:border-gray-600">
                                            UA123456789012345678901234567890
                                        </td>
                                        <td class="p-2  border-b border-gray-200 dark:border-gray-600">
                                            PBANUA2X
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="sm:hidden flex flex-col ">
                                <div class="flex text-xs flex-col">
                                    <div class=""><strong>@lang('payment.bank_name') :</strong> PrivatBank</div>
                                    <div class=""><strong>IBAN :</strong> UA123456789012345678901234567890</div>
                                    <div class=""><strong> @lang('payment.swift_code') :</strong>  PBANUA2X</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SWIFT Details -->
                    <div class="hidden" id="bank_transfer_swift">
                        <div class="flex items-center gap-2 bg-white rounded-lg shadow-inner">
                            <i class="text-3xl text-sky-500 fa-solid fa-money-bill-transfer"></i>
                            <h2 class="text-xl font-bold py-6 ml-4 text-sky-700 uppercase">
                                SWIFT - іноземна валюта (USD)
                            </h2>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="hidden sm:table  min-w-full text-xs bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                                <thead>
                                    <tr>
                                        <th class="p-2 bg-sky-300 dark:bg-gray-700 text-gray-600 dark:text-gray-300 font-semibold text-xs text-left uppercase tracking-wider border-b dark:border-gray-600">
                                            @lang('payment.bank_name')
                                        </th>
                                        <th class="p-2 bg-sky-300 dark:bg-gray-700 text-gray-600 dark:text-gray-300 font-semibold text-xs text-left uppercase tracking-wider border-b dark:border-gray-600">
                                            IBAN
                                        </th>
                                        <th class="p-2 bg-sky-300 dark:bg-gray-700 text-gray-600 dark:text-gray-300 font-semibold text-xs text-left uppercase tracking-wider border-b dark:border-gray-600">
                                            @lang('payment.swift_code')
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700 dark:text-gray-200">
                                    <tr class="hover:bg-gray-200">
                                        <td class="p-2  border-b border-gray-200 dark:border-gray-600">
                                            PrivatBank
                                        </td>
                                        <td class="p-2  border-b border-gray-200 dark:border-gray-600">
                                            UA123456789012345678901234567890
                                        </td>
                                        <td class="p-2  border-b border-gray-200 dark:border-gray-600">
                                            PBANUA2X
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="sm:hidden flex flex-col ">
                                <div class="flex text-xs flex-col">
                                    <div class=""><strong>@lang('payment.bank_name') :</strong> PrivatBank</div>
                                    <div class=""><strong>IBAN :</strong> UA123456789012345678901234567890</div>
                                    <div class=""><strong> @lang('payment.swift_code') :</strong>  PBANUA2X</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card Details -->
                    <div class="hidden" id="credit_card">
                        <div class="flex items-center gap-2 bg-white rounded-lg shadow-inner">
                            <i class="text-3xl text-sky-500 fa-brands fa-cc-mastercard"></i>
                            <i class="text-3xl text-sky-500 fa-brands fa-cc-visa"></i>
                            <h2 class="text-xl font-bold py-6 ml-4 text-sky-700">
                                @lang('payment.carddetails')
                            </h2>
                        </div>
                        <div class="grid gap-6 mb-6 md:grid-cols-5 pt-4">

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
                            <div class="col-span-1 ">
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
                            <div class="col-span-1">
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
                    <div class="w-full p-4">
                        <p class="text-right font-semibold">
                            @lang('payment.sum'): <span  id="sum2">{{ $price }}</span> ₴
                        </p>
                    </div>
                    <div class="flex items-start py-6 flex-col">
                        <div class="">
                            <input id="agree-check" type="checkbox" name="agree-check" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                            <label for="agree-check" id="agree-label" class="ms-2 text-xs sm:text-sm font-medium text-gray-900">
                                {!! trans('payment.termsagree', ['link' => url('/terms'), 'linkp' => url('/privacy')]) !!}
                            </label>
                        </div>
                        <p id="agree-error" class="hidden text-xs text-red-600">
                        </p>
                    </div>
                    <div class="w-full mb-4 flex justify-center m-auto" id="gpay-button">

                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        @lang('payment.pay')
                    </button>
                </form>
            </div>
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
          </div>
      </div>
  </div>
  <div id="countdownContainer" class="hidden flex flex-col bg-gray-900/60 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full max-h-full">
    <div  class="px-2 bg-white max-w-58 h-28 text-xs font-semibold text-pink-600 flex flex-col items-center justify-center rounded-lg shadow-xl">
        <div class="flex flex-col  items-center justify-center w-56 h-56 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
            <p class="mb-2 text-center">
                @lang('payment.no_items')
            </p>
            <div role="status" class="relative">
                <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/></svg>
                <span class="sr-only">Loading...</span>
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" id="countdown">
                </div>
            </div>
        </div>
    </div>
  </div>

<script>
    const clearItems = document.getElementById('removeItem');
    const sumDiv1 =  document.getElementById('sum');
    const sumDiv2 =  document.getElementById('sum2');
    const cartItem = document.getElementById('cartItem');
    const popModal = document.getElementById('payment-modal');
    const countdownContainer = document.getElementById('countdownContainer');

    clearItems.addEventListener('click', function () {
        cartItem.remove();
        sumDiv1.innerHTML = sumDiv2.innerHTML = 0;
        countdownContainer.classList.remove('hidden');

        let count = 3; // starting count
        const countdownElement = document.getElementById('countdown'); // element to display the countdown

        // Update the countdown display initially
        countdownElement.innerHTML = count;

        const countdownInterval = setInterval(() => {
            countdownElement.innerHTML = count; // Update the displayed count

            if (count === 0) {

                clearInterval(countdownInterval); // Stop the countdown

                // Perform the action when countdown reaches 0
                doSomething();
            }

                count--; // Decrease the count by 1
        }, 700); // 1000 milliseconds = 1 second
    });
    // Define the action to be performed
    function doSomething() {
        popModal.classList.add('hidden');
        location.reload();

    }

    document.addEventListener('DOMContentLoaded', function () {
    // Get the radio buttons
    const bank_transfer_swift_radio = document.getElementById('bank_transfer_swift_radio');
    const bank_transfer_uah_radio = document.getElementById('bank_transfer_uah_radio');
    const creditCardRadio = document.getElementById('credit_card_radio');


    // Get the divs
    const UAHbankTransferDiv = document.getElementById('bank_transfer_iban');
    const SWIFTbankTransferDiv = document.getElementById('bank_transfer_swift');
    const creditCardDiv = document.getElementById('credit_card');

    // Function to show the corresponding div based on selected radio button
    function showCorrespondingDiv() {
        if (bank_transfer_uah_radio.checked) {
            UAHbankTransferDiv.style.display = 'block';
            SWIFTbankTransferDiv.style.display = 'none';
            creditCardDiv.style.display = 'none';
        } else if (creditCardRadio.checked) {
            creditCardDiv.style.display = 'block';
            UAHbankTransferDiv.style.display = 'none';
            SWIFTbankTransferDiv.style.display = 'none';
        }
        else if (bank_transfer_swift_radio.checked) {
            SWIFTbankTransferDiv.style.display = 'block';
            UAHbankTransferDiv.style.display = 'none';
            creditCardDiv.style.display = 'none';
        }
    }

    // Add event listeners to radio buttons
    bank_transfer_uah_radio.addEventListener('change', showCorrespondingDiv);
    bank_transfer_swift_radio.addEventListener('change', showCorrespondingDiv);
    creditCardRadio.addEventListener('change', showCorrespondingDiv);
});

</script>
