@props(['transactionID', 'invoiceNumber', 'tableTextSize', 'qrCode'])
<!-- QR Code Details -->
<div {{ $attributes->merge(['class' => 'mt-8']) }} id="bank_transfer_iban">
    <div class="flex items-center gap-2 bg-white rounded-lg shadow-inner">
        <i class="text-3xl text-sky-500 fa-solid fa-qrcode"></i>
        <h2 class="text-xl font-bold py-6 ml-4 uppercase text-sky-700">
           @lang('payment.pay_by_qrcode') - (Україна - грівна)
        </h2>
    </div>
    <div class="max-w-4xl m-auto flex items-center p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div class="">
            <span class="font-medium uppercase"> @lang('payment.instructions')</span>:  @lang('payment.qr_instuctions')
        </div>
      </div>
    <div class="overflow-x-auto flex justify-center max-w-xl m-auto py-8">
        {{ $qrCode }}
    </div>
</div>
