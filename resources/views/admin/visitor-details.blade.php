@php
$locale = session('locale', 'uk');
@endphp
@extends('layouts.admin.layout')

@section('content')
    <x-admin.header>
        Visitor Details
    </x-admin.header>
    <div class="p-2 mt-2">
        <a href="{{ route('admin.visitors') }}" class="bg-sky-300 text-sm rounded-lg px-3 py-2 border font-medium text-gray-600 hover:text-sky-800 hover:bg-white hover:border-sky-300">Back to Visitors</a>
    </div>
    <div class="mt-6 container py-6">
        <!-- Visitor Information -->
        <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-bold text-gray-700 mb-4">Visitor Information</h2>
            <table class="min-w-full bg-white border border-gray-200">
                <tbody>
                    @foreach ($visitor->getAttributes() as $key => $value)
                        <tr class="hover:bg-gray-200">
                            <th class="py-2 px-4 text-[10px] text-left text-sky-700 font-bold">{{ ucfirst($key) }}</th>
                            <td class="py-2 px-4 text-[10px] text-gray-700">
                                @if ($key === 'created_at' || $key === 'updated_at')
                                    {{ $value ? \Carbon\Carbon::parse($value)->format('Y-m-d H:i') : '' }}
                                @else
                                    {{ $value }}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Page Views -->
        <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-bold text-gray-700 mb-4">Page Views</h2>
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-sky-200">
                    <tr>
                        <th class="py-3 px-2 text-left text-[10px] font-bold text-sky-800 uppercase">URL</th>
                        <th class="py-3 px-2 text-left text-[10px] font-bold text-sky-800 uppercase">Referrer</th>
                        <th class="py-3 px-2 text-left text-[10px] font-bold text-sky-800 uppercase">Device</th>
                        <th class="py-3 px-2 text-left text-[10px] font-bold text-sky-800 uppercase">Browser</th>
                        <th class="py-3 px-2 text-left text-[10px] font-bold text-sky-800 uppercase">OS</th>
                        <th class="py-3 px-2 text-left text-[10px] font-bold text-sky-800 uppercase">Visited At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($visitor->pageViews as $pageView)
                        <tr class="hover:bg-gray-200">
                            <td class="py-2 px-4 text-[10px] text-gray-700">{{ $pageView->url }}</td>
                            <td class="py-2 px-4 text-[10px] text-gray-700">{{ $pageView->referrer_url }}</td>
                            <td class="py-2 px-4 text-[10px] text-gray-700">{{ $pageView->device }}</td>
                            <td class="py-2 px-4 text-[10px] text-gray-700">{{ $pageView->browser }}</td>
                            <td class="py-2 px-4 text-[10px] text-gray-700">{{ $pageView->os }}</td>
                            <td class="py-2 px-4 text-[10px] text-gray-700">
                                {{ $pageView->created_at ? \Carbon\Carbon::parse($pageView->created_at)->format('Y-m-d H:i') : '' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Visit Counts -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-bold text-gray-700 mb-4">Visit Counts</h2>
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-3 px-2 text-left text-[10px] font-bold text-sky-800 uppercase">URL</th>
                        <th class="py-3 px-2 text-left text-[10px] font-bold text-sky-800 uppercase">Visit Count</th>
                        <th class="py-3 px-2 text-left text-[10px] font-bold text-sky-800 uppercase">Last Visited</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($visitor->pageVisitCounts as $visitCount)
                        <tr class="hover:bg-gray-200">
                            <td class="py-2 px-4 text-[10px] text-gray-700">{{ $visitCount->url }}</td>
                            <td class="py-2 px-4 text-[10px] text-gray-700">{{ $visitCount->visit_count }}</td>
                            <td class="py-2 px-4 text-[10px] text-gray-700">
                                {{ $visitCount->last_visited_at ? \Carbon\Carbon::parse($visitCount->last_visited_at)->format('Y-m-d H:i') : '' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
