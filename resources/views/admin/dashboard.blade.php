@php
$locale = session('locale', 'uk');
@endphp

@extends('layouts.admin.layout')
    @section('content')
    <x-admin.header>
        Admin Dashboard
    </x-admin.header>
    <div class="p-4">
        <div class="p-4  rounded-lg dark:border-gray-700">
           <div class="grid grid-cols-3 gap-4 mb-4">
                <a href="{{ $message_count > 0 ?  route('admin.inbox') : "#" }}" class="{{ $message_count > 0 ? "pointer-events-auto group hover:cursor-pointer" : "pointer-events-none" }} ">
                    <div class="border-2 {{ $message_count > 0 ? "border-green-300" : "border-gray-300" }} group-hover:bg-green-200 border-dashed flex items-center justify-center h-28 rounded bg-gray-50 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500 mr-4">
                            @if ($message_count > 0)
                                <i class="text-green-600 font-bold fa-solid fa-envelope-open-text"></i>
                            @else
                                <i class="fa-solid fa-envelope"></i>
                            @endif
                        </p>
                        <p class="{{ $message_count > 0 ? "text-green-700" : "text-gray-600" }} text-sm">
                            <span class="text-sky-700 {{ $message_count > 0 ? "font-bold " : "font-normal" }}">New messages: </span>
                            <span class=" {{ $message_count > 0 ? "text-green-700 font-bold " : "font-normal" }}"> {{$message_count}} </span>
                        </p>
                    </div>
                </a>
                <a href="{{ route('admin.users') }}" class="group hover:cursor-pointer">
                    <div class="border-2 {{ $user_count > 0 ? "border-pink-300" : "border-gray-300" }} group-hover:bg-pink-200 border-dashed flex items-center justify-center h-28 rounded bg-gray-50 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500 mr-4">
                            <i class="text-pink-700 fa-solid fa-users"></i>
                        </p>

                        <div class="{{ $user_count > 0 ? "text-green-700" : "text-gray-600" }} text-sm flex flex-col">
                            <span class="text-sky-700 {{ $user_count > 0 ? "font-bold " : "font-normal" }}">Last 5 Users: </span>
                            <ul class="text-xs">
                            @foreach ($last_users as $user )
                                <li>{{$user->name}}</li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </a>

                <div id="changeThis" class="{{ $active_courses ? 'border-sky-400' : 'border-gray-300' }} hover:bg-teal-200 pointer-events-none border-2 border-dashed flex items-center justify-center gap-6 h-28 rounded bg-gray-50 dark:bg-gray-800 group-hover:bg-teal-200">
                    <p class="text-2xl text-gray-400 dark:text-gray-500 mr-4">
                        <i class="text-sky-400 fa-solid fa-arrows-turn-to-dots"></i>
                    </p>

                    <div class="{{ $active_courses ? 'text-green-700' : 'text-gray-600' }} text-sm flex flex-col">
                        <span class="text-sky-700 {{ $active_courses ? 'font-bold' : 'font-normal' }}">Active Courses: </span>
                        <ul class="text-xs flex flex-wrap max-w-64 items-center flex">
                            @foreach ($active_courses as $active_course)
                            <i class="group text-sky-700 text-xl fa-solid fa-ellipsis mr-1"></i>
                                <a id="hoverOnThis" href="{{ route('admin.visitors') }}" class="  pointer-events-auto   hover:cursor-pointer">
                                    <li class=""><span class="hover:underline ">Course Name: {{$active_course->course_name_en}}</span></li>
                                </a>
                            @endforeach
                        </ul>
                        @if (count($active_courses) <= 0)
                            <div class="text-xs text-left w-full px-2 text-red-700">No active courses</div>
                        @endif
                    </div>
                </div>

           </div>
            <a href="{{ route('admin.visitors') }}" class="group hover:cursor-pointer">
                <div class="border-2 {{ $visitor_count > 0 ? "border-teal-400" : "border-gray-300" }} group-hover:bg-teal-200 border-dashed  flex items-center justify-center h-48 mb-4 w-full text-left gap-10 rounded bg-gray-50 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <i class="text-teal-800 fa-solid fa-people-arrows"></i>
                    </p>
                    <div class="{{ $visitor_count > 0 ? "text-green-700" : "text-gray-600" }} justify-center  text-sm flex max-w-4xl gap-2 items-center flex-wrap">
                        <span class="text-sky-700 {{ $visitor_count > 0 ? "font-bold " : "font-normal" }}">Last 3 Visitors: </span>
                        <ul class="text-xs flex flex-wrap justify-center ">
                        @foreach ($last_visitors as $last_visitor )
                            <li class="list-decimal">IP: {{$last_visitor->ip_address}} / Amount: {{ $last_visitor->user_agent }}</li>
                        @endforeach
                        </ul>
                        @if ( $visitor_count <= 0)
                            <div class="text-xs text-center w-full px-2 text-red-700">No visitors</div>
                        @endif
                    </div>
                </div>
            </a>
           <div class="border-2 {{ $transaction_count > 0 ? "border-teal-400" : "border-gray-300" }} p-4 border-dashed  flex flex-col items-center justify-center   mb-4 w-full text-left gap-4 rounded bg-gray-50 dark:bg-gray-800">
            <span class="text-sky-700 {{ $transaction_count > 0 ? "font-bold " : "font-normal" }}">Last 3 Transactions: </span>
            <table class="min-w-full bg-white border border-gray-200 border rounded overflow-hidden">
                <thead class="bg-gray-50  border rounded">
                    <tr class="">
                        <th class=" border rounded overflow-hidden bg-sky-300 py-3 px-2 text-left text-[10px] font-bold text-gray-500 uppercase tracking-wider">Status</th>
                        <th class=" border rounded overflow-hidden bg-sky-300 py-3 px-2 text-left text-[10px] font-bold text-gray-500 uppercase tracking-wider">Email</th>
                        <th class=" border rounded overflow-hidden bg-sky-300 py-3 px-2 text-left text-[10px] font-bold text-gray-500 uppercase tracking-wider">Amount</th>
                        <th class=" border rounded overflow-hidden bg-sky-300 py-3 px-2 text-left text-[10px] font-bold text-gray-500 uppercase tracking-wider">Discount</th>
                        <th class=" border rounded overflow-hidden bg-sky-300 py-3 px-2 text-left text-[10px] font-bold text-gray-500 uppercase tracking-wider">Transaction Amount</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($last_transactions as $last_transaction )
                        <tr class="hover:bg-gray-200 hover:text-gray-700 hover:cursor-pointer text-[11px] text-left font-medium
                        {{ $last_transaction->status === "success" ? "bg-green-400/50" : "" }}
                        {{ $last_transaction->status === "failure" ? "bg-red-500/50 " : "" }}
                        {{ $last_transaction->status === "pending" ? "bg-amber-300/70" : "" }}">

                            <td class="py-2 px-2 border rounded overflow-hidden ">
                                @if ( $last_transaction->status === "success")
                                    <i class="fa-solid fa-check text-xl text-green-700 mr-4 px-2"></i>
                                @elseif ( $last_transaction->status === "failure")
                                    <i class="fa-solid fa-ban text-xl text-red-700 mr-4 px-2"></i>
                                @elseif ( $last_transaction->status === "pending")
                                    <i class="fa-solid fa-spinner text-xl text-amber-700 mr-4 px-2"></i>
                                @else
                                    <i class="fa-regular fa-circle-question text-xl text-gray-700 mr-4 px-2"></i>
                                @endif
                                {{$last_transaction->status}}
                            </td>
                            <td class="py-2 px-2 border rounded overflow-hidden ">
                                {{$last_transaction->email}}
                            </td>
                            <td class="py-2 px-2 border rounded overflow-hidden ">
                                {{$last_transaction->amount}}
                            </td>
                            <td class="py-2 px-2 border rounded overflow-hidden ">
                                {{$last_transaction->discount}}%
                            </td>
                            <td class="py-2 px-2 border rounded overflow-hidden ">
                                {{$last_transaction->transaction_amount}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @if ($transaction_count <= 0)
            <div class="text-xs text-left w-full px-2 text-red-700">No transactions</div>
        @endif
         </div>

        </div>
     </div>
    @endsection
