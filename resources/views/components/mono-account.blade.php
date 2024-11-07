@props(['transactionID', 'invoiceNumber', 'tableTextSize'])
<!-- IBAN Details -->
<div {{ $attributes->merge(['class' => '']) }} id="bank_transfer_iban">
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
                        @lang('payment.recipient')
                    </th>
                    <th class="p-2 bg-sky-300 dark:bg-gray-700 text-gray-600 dark:text-gray-300 font-semibold text-xs text-left uppercase tracking-wider border-b dark:border-gray-600">
                        IBAN
                    </th>
                    <th class="p-2 bg-sky-300 dark:bg-gray-700 text-gray-600 dark:text-gray-300 font-semibold text-xs text-left uppercase tracking-wider border-b dark:border-gray-600">
                        @lang('payment.edrpou')
                    </th>
                    <th class="p-2 bg-sky-300 dark:bg-gray-700 text-gray-600 dark:text-gray-300 font-semibold text-xs text-left uppercase tracking-wider border-b dark:border-gray-600">
                        @lang('payment.payment_purpose')
                    </th>
                </tr>
            </thead>
            <tbody class="text-gray-700 dark:text-gray-200">
                <tr class="hover:bg-gray-200 {{ $tableTextSize ?? "text-[10px]" }}">
                    <td class="p-2  border-b border-gray-200 dark:border-gray-600">
                        Акціонерне Товариство УНІВЕРСАЛ БАНК
                    </td>
                    <td class="p-2  border-b border-gray-200 dark:border-gray-600">
                        ФОП Пальчевська Емма Артурівна
                    </td>
                    <td class="p-2  border-b border-gray-200 dark:border-gray-600">
                        UA183220010000026009350000585
                    </td>
                    <td class="p-2  border-b border-gray-200 dark:border-gray-600">
                        3198013663
                    </td>
                    <td class="p-2  border-b border-gray-200 dark:border-gray-600">
                        Оплата онлайн послуг, номер рахунку {{ $invoiceNumber }}.
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="sm:hidden flex flex-col ">
            <div class="flex {{ $tableTextSize ?? "text-[10px]" }} flex-col">
                <div class=""><strong>@lang('payment.bank_name') :</strong> Акціонерне Товариство УНІВЕРСАЛ БАНК</div>
                <div class=""><strong>@lang('payment.recipient') :</strong> ФОП Пальчевська Емма Артурівна</div>
                <div class=""><strong>IBAN :</strong> UA183220010000026009350000585</div>
                <div class=""><strong>@lang('payment.edrpou') :</strong>  3198013663</div>
                <div class=""><strong>@lang('payment.payment_purpose') :</strong>   Оплата онлайн послуг, номер рахунку {{ $invoiceNumber }}.</div>
            </div>
        </div>
    </div>
</div>
