  @props(['course', 'courseNameLocale'])

  <div id="payment-modal" tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-md max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    @lang('payment.checkout')
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="payment-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
                <div class="relative flex justify-between p-4 md:p-5 gap-4 border-b ">
                    <div class="max-w-20 rounded-full overflow-hidden">
                        <img src="{{asset('images/checkout_thumbnail.jpg')}}" alt="">
                    </div>
                    <div class="flex flex-col ">
                        <h3 class="text-sm font-bold">
                            {{ $courseNameLocale }}
                        </h3>
                        <p class="text-sm font-semibold text-sky-600">
                            {{ $course->course_price }} ₴
                        </p>
                    </div>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="payment-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="w-full p-4">
                    <p class="text-right font-semibold" id="sum">
                        @lang('payment.sum'): {{ $course->course_price }} ₴
                    </p>
                </div>
              <!-- Modal body -->
              <div class="p-4">
                <form method="POST" class="" id="paymentGo"  action="{{ route('payment.create', ['course_id' => $course->id])  }}">
                    @csrf
                    <!-- Personal Details -->
                    <div class=" rounded-lg mb-6">
                        <div class="flex items-center gap-4 bg-white rounded-lg mb-4">
                            <i class="text-3xl text-sky-500 fa-regular fa-id-card"></i>
                            <h2 class="text-xl font-bold py-4 text-sky-700">
                                @lang('payment.personaldetails')
                            </h2>
                        </div>
                        <div class="md:grid gap-6 mb-6 md:grid-cols-2">
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
                    <div class="">
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
                        <p class="text-right font-semibold" id="sum">
                            @lang('payment.sum'): {{ $course->course_price }} ₴
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

                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
