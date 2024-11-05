<!-- Tailwind CSS Payment Form for Portmone -->
<div class="flex items-center justify-center min-h-screen bg-sky-50">
    <form action="https://www.portmone.com.ua/gateway/" method="post" class="bg-white p-8 rounded-lg shadow-md max-w-md w-full">
        <h2 class="text-2xl font-semibold text-sky-600 mb-4">Proceed to Payment</h2>

        <!-- Hidden Inputs with Payment Data -->
        <input type="hidden" name="payee_id" value="YOUR_PAYEE_ID" />
        <input type="hidden" name="shop_order_number" value="UNIQUE_ORDER_ID" />
        <input type="hidden" name="bill_amount" value="1.00" />
        <input type="hidden" name="description" value="Order Description Here" />
        <input type="hidden" name="success_url" value="https://english.palemma.academy/success" />
        <input type="hidden" name="failure_url" value="https://english.palemma.academy/failure" />
        <input type="hidden" name="lang" value="uk" />
        <input type="hidden" name="encoding" value="UTF-8" />
        <input type="hidden" name="exp_time" value="400" />

        <!-- Submit Button -->
        <button type="submit" class="w-full bg-sky-600 hover:bg-sky-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-sky-400 focus:ring-opacity-50 transition">
            Pay Now
        </button>
    </form>
</div>
