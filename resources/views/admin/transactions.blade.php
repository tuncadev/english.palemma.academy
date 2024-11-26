@php
    $locale = session('locale', 'uk');
    $id = 1;
@endphp
@extends('layouts.admin.layout')
    @section('content')
        <x-admin.header>
            Transactions
        </x-admin.header>
        <div class="flex mt-6">
            <div class="container py-6">
                @if ($transactions->isNotEmpty())
                    <div class="overflow-x-auto shadow-lg rounded-lg">
                        <table class="min-w-full bg-white border border-gray-200">
                            <thead class="bg-gray-50">
                                <tr class="text-center">
                                    @foreach ($transactions->first()->getAttributes() as $column => $value)
                                        @if ($column === "first_name")
                                            <th class="py-3 px-2 text-center text-[10px] font-medium text-gray-500 uppercase tracking-wider">Full Name</th>
                                        @elseif ($column !== "last_name") <!-- Skip the last_name column -->
                                            <th class="py-3 px-2 text-center text-[10px] font-medium text-gray-500 uppercase tracking-wider">{{ $column }}</th>
                                        @endif
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody class="hidden sm:block bg-white divide-y divide-gray-200">
                                @foreach ($transactions as $transaction)
                                    <tr class="hover:bg-gray-300 hover:text-gray-800 group hover:cursor-default text-[11px] text-center
                                        {{ $transaction->status == 'failure' ? 'bg-red-700/90 text-white ' : '' }}
                                        {{ $transaction->status == 'pending' ? 'bg-red-200/90' : '' }}
                                        {{ $transaction->status == 'success' ? 'bg-green-200/90' : '' }}
                                    ">
                                        @foreach ($transaction->getAttributes() as $column => $value)
                                            @if ($column === "last_name")
                                                @continue <!-- Skip last_name column -->
                                            @endif
                                            <td class="py-4 px-2" id="copy-{{$id}}">
                                                @if ($column === "first_name")
                                                    {{ $transaction->first_name }} {{ $transaction->last_name }}
                                                @elseif ($column === 'created_at' || $column === 'updated_at')
                                                    {{ $value ? \Carbon\Carbon::parse($value)->format('Y-m-d H:i') : '' }}
                                                @elseif ($column === 'response' && is_array($value)) <!-- Check if the response is an array -->
                                                    <button class="text-[10px] bg-sky-400 border border-gray-200 hover:bg-sky-600 hover:text-white py-1 px-5 rounded-lg" data-modal-target="transaction{{$id}}" data-modal-toggle="transaction{{$id}}" href="javascript:void(0)">
                                                        View Response
                                                    </button>
                                                    <x-admin.transaction-modal :id="$id" :data="$value" />
                                                @elseif (in_array($column, ['invoice_id', 'transaction_id', 'email']))
                                                    <div class="w-full max-w-[16rem]">
                                                        <div class="relative">
                                                            <input id="npm-install-copy-button{{$id}}" type="text" class="flex text-[10px] flex-wrap bg-transparent border-none group-hover:text-gray-700  {{ $transaction->status == 'failure' ? 'text-white ' : 'text-gray-500' }} " value="{{$value}}" disabled readonly>
                                                            <button data-copy-to-clipboard-target="npm-install-copy-button{{$id}}" data-tooltip-target="tooltip-copy-npm-install-copy-button{{$id}}"
                                                            class="absolute left-1/2 -top-4 -translate-x-1/2 group-hover:text-gray-700   {{ $transaction->status == 'failure' ? 'text-white ' : 'text-gray-500' }} dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg p-2 inline-flex items-center justify-center">
                                                                <span id="default-icon">
                                                                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                                                        <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
                                                                    </svg>
                                                                </span>
                                                                <span id="success-icon" class="hidden inline-flex items-center">
                                                                    <svg class="w-3.5 h-3.5 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                                                                    </svg>
                                                                </span>
                                                            </button>
                                                            <div id="tooltip-copy-npm-install-copy-button{{$id}}" role="tooltip" class="absolute z-10 invisible inline-block px-2 py-1 text-[10px] text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                <span id="default-tooltip-message text-[10px]">Copy to clipboard</span>
                                                                <span id="success-tooltip-message text-[10px]" class="hidden">Copied!</span>
                                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    {{$value}}
                                                @endif
                                            </td>
                                            @php
                                                $id += 1;
                                            @endphp
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>


                        </table>
                        <!-- Card layout for mobile -->
                        <div class="sm:hidden space-y-4">
                            @foreach ($transactions as $transaction)
                                <div class="bg-white border border-gray-200 rounded shadow-md p-4
                                {{ $transaction->status == 'failure' ? 'bg-red-700/90 text-white' : '' }}
                                {{ $transaction->status == 'pending' ? 'bg-red-200/90' : '' }}
                                {{ $transaction->status == 'success' ? 'bg-green-200/90' : '' }}">
                                    <!-- Transaction Details -->
                                    <div class="text-sm text-gray-600 space-y-2">
                                        @foreach ($transaction->getAttributes() as $column => $value)
                                            @if ($column === 'last_name')
                                                @continue <!-- Skip last_name -->
                                            @endif

                                            <div class="flex justify-between items-center">
                                                <span class="font-bold capitalize">
                                                    @if ($column === 'first_name')
                                                        Full Name:
                                                    @else
                                                        {{ Str::headline(str_replace('_', ' ', $column)) }}:
                                                    @endif
                                                </span>

                                                @if ($column === 'first_name')
                                                    <span>{{ $transaction->first_name }} {{ $transaction->last_name }}</span>
                                                @elseif ($column === 'created_at' || $column === 'updated_at')
                                                    <span>{{ $value ? \Carbon\Carbon::parse($value)->format('Y-m-d H:i') : '' }}</span>
                                                @elseif ($column === 'response' && is_array($value))
                                                    <button class="text-[10px] bg-sky-400 border border-gray-200 hover:bg-sky-600 hover:text-white py-1 px-5 rounded-lg" data-modal-target="transaction{{ $id }}" data-modal-toggle="transaction{{ $id }}" href="javascript:void(0)">
                                                        View Response
                                                    </button>
                                                    <x-admin.transaction-modal :id="$id" :data="$value" />
                                                @elseif (in_array($column, ['invoice_id', 'transaction_id', 'email']))
                                                    <div class="flex items-center">
                                                        <input id="copy-{{ $id }}" type="text" class="bg-transparent border-none text-[10px] w-full" value="{{ $value }}" readonly>
                                                        <button data-copy-to-clipboard-target="copy-{{ $id }}" class="ml-2 text-sm text-gray-500 hover:text-blue-600">
                                                            <i class="fa-solid fa-copy"></i>
                                                        </button>
                                                    </div>
                                                @else
                                                    <span>{{ $value }}</span>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                @else
                    <div class="flex">
                        <p class="text-red-500">
                            No Transactions
                        </p>
                    </div>
                @endif
            </div>
        </div>

    @endsection
