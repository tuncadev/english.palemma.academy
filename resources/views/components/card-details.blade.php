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
                <input  type="text" name="cardData[pan]" id="cardnumber" placeholder="1234 5678 9012 3456"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <i class="fa-regular fa-credit-card"></i>
            </div>
        </div>
        <!-- Expiration Date Input -->
        <div class="col-span-1 ">
            <label for="expires" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                @lang('payment.expires')
            </label>
            <div class="flex items-center gap-4">
                <input  type="text"name="cardData[exp]" id="expires" placeholder="MM/YY" maxlength="5"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
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
            <label for="cvv" class="block mb-2 text-sm font-medium text-gray-900 ">
                @lang('payment.cvv')
            </label>
            <div class="flex items-center gap-4">
                <input  type="password" name="cardData[cvv]" id="cvv" maxlength="3" placeholder="123"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <i class="fa-solid fa-hashtag"></i>
            </div>
        </div>
    </div>
</div>
