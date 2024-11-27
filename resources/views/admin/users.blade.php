@php
$locale = session('locale', 'uk');
@endphp
@extends('layouts.admin.layout')
    @section('content')
        <x-admin.header>
            Users
        </x-admin.header>
        <div class="flex mt-6">
            <div class="container py-6">
                <div class="overflow-x-auto shadow-lg rounded-lg">
                    <table class="hidden sm:table min-w-full bg-white border border-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="py-3 px-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User ID</th>
                                <th class="py-3 px-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="py-3 px-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                <th class="py-3 px-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                                <th class="py-3 px-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email Verified</th>
                                <th class="py-3 px-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                                <th class="py-3 px-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="py-3 px-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Avatar</th>
                                <th class="py-3 px-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created</th>
                                <th class="py-3 px-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Updated</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($users as $user)
                            <tr class="hover:bg-gray-200 hover:cursor-pointer text-xs">
                                <td class="py-4 px-2 text-gray-500">{{ $user->id }}</td>
                                <td class="py-4 px-2 text-gray-500">{{ $user->name }}</td>
                                <td class="py-4 px-2 text-gray-500">{{ $user->email }}</td>
                                <td class="py-4 px-2 text-gray-500">{{ $user->phone }}</td>
                                <td class="py-4 px-2 text-gray-500">{{ $user->email_verified_at }}</td>
                                <td class="py-4 px-2 text-gray-500">{{ $user->role }}</td>
                                <td class="py-4 px-2 text-gray-500">{{ $user->status }}</td>
                                <td class="py-4 px-2 text-center text-gray-500 max-w-6">
                                    @if ($user->avatar)
                                        <img class="w-8 h-8 m-auto rounded-full object-cover" src="{{ asset('storage/' . $user->avatar) }}" alt="">
                                    @endif
                                </td>
                                <td class="py-4 px-2 text-gray-500">{{ $user->created_at->format('Y-m-d H:i') }}</td>
                                <td class="py-4 px-2 text-gray-500">{{ $user->updated_at ? $user->updated_at->format('Y-m-d H:i') : "" }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Card layout for mobile -->
                    <div class="sm:hidden space-y-4">
                        @foreach ($users as $user)
                            <div class="bg-white border border-gray-200 rounded shadow-md p-4">
                                <!-- User Details -->
                                <div class="flex flex-col space-y-2">
                                    <div>
                                        <span class="font-bold text-gray-700">User ID:</span>
                                        <span class="text-gray-500">{{ $user->id }}</span>
                                    </div>
                                    <div>
                                        <span class="font-bold text-gray-700">Name:</span>
                                        <span class="text-gray-500">{{ $user->name }}</span>
                                    </div>
                                    <div>
                                        <span class="font-bold text-gray-700">Email:</span>
                                        <span class="text-gray-500">{{ $user->email }}</span>
                                    </div>
                                    <div>
                                        <span class="font-bold text-gray-700">Phone:</span>
                                        <span class="text-gray-500">{{ $user->phone }}</span>
                                    </div>
                                    <div>
                                        <span class="font-bold text-gray-700">Email Verified:</span>
                                        <span class="text-gray-500">{{ $user->email_verified_at }}</span>
                                    </div>
                                    <div>
                                        <span class="font-bold text-gray-700">Role:</span>
                                        <span class="text-gray-500">{{ $user->role }}</span>
                                    </div>
                                    <div>
                                        <span class="font-bold text-gray-700">Status:</span>
                                        <span class="text-gray-500">{{ $user->status }}</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="font-bold text-gray-700">Avatar:</span>
                                        @if ($user->avatar)
                                            <img class="w-12 h-12 ml-4 rounded-full object-cover" src="{{ asset('storage/' . $user->avatar) }}" alt="User Avatar">
                                        @else
                                            <span class="text-gray-500 ml-4">No Avatar</span>
                                        @endif
                                    </div>
                                    <div>
                                        <span class="font-bold text-gray-700">Created:</span>
                                        <span class="text-gray-500">{{ $user->created_at->format('Y-m-d H:i') }}</span>
                                    </div>
                                    <div>
                                        <span class="font-bold text-gray-700">Updated:</span>
                                        <span class="text-gray-500">{{ $user->updated_at ? $user->updated_at->format('Y-m-d H:i') : "N/A" }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>

        </div>
    @endsection
