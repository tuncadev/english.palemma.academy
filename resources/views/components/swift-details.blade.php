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
