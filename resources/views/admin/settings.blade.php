@php
    $locale = session('locale', 'uk');
    $id = 1;
@endphp
@extends('layouts.admin.layout')
    @section('content')
        <x-admin.header>
            Environment Settings
        </x-admin.header>
        <div id="alert-border-2" class="max-w-4xl mt-6 flex items-center p-4 mb-2 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <div class="ms-3 text-sm font-medium">
                Do not change anything here, unless you really know what you are doing!
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-2" aria-label="Close">
              <span class="sr-only">Dismiss</span>
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
              </svg>
            </button>
        </div>

        <div class="min-h-screen bg-gray-100 flex items-top justify-start">
            <div class="w-full max-w-4xl bg-white shadow-md rounded-lg p-6">
                @if (session('success'))
                    <div class="mb-6 p-3 text-sm text-green-700 bg-green-100 rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif

                <form id="env-settings" action="{{ route('admin.updateSettings') }}" method="POST" class="space-y-4 ">
                    @csrf

                    @foreach ($envVars as $key => $value)
                        <div class="flex items-center space-x-4">
                            <label for="{{ $key }}" class="block text-sm font-medium text-gray-700 w-1/4">{{ $key }}</label>

                            @if (in_array($key, ['DB_PASSWORD', 'MONOBANK_API_TOKEN', 'MAIL_PASSWORD']))
                                <div class="relative w-3/4">
                                    <input type="password" id="{{ $key }}" name="{{ $key }}"
                                        class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm pr-10"
                                        value="{{ old($key, $value) }}">
                                    <button type="button"
                                        class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500 focus:outline-none"
                                        onclick="togglePassword('{{ $key }}')">
                                        <i class="fas fa-eye" id="{{ $key }}-toggle"></i>
                                    </button>
                                </div>
                            @elseif (in_array($key, ['UPDATE_MODE']))
                                <select id="{{ $key }}" name="{{ $key }}"
                                    class="block w-3/4 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option value="true" {{ $value === true || $value === 'true' ? 'selected' : '' }}>True</option>
                                    <option value="false" {{ $value === false || $value === 'false' ? 'selected' : '' }}>False</option>
                                </select>
                            @else
                                <input type="text" id="{{ $key }}" name="{{ $key }}"
                                    class="block w-3/4 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                    value="{{ old($key, $value) }}">
                            @endif

                            <button type="button" onclick="saveEnv('{{ $key }}')"
                                class="text-blue-500 hover:text-blue-600 focus:outline-none">
                                <i class="fas fa-save"></i>
                            </button>
                        </div>
                    @endforeach
                </form>
            </div>
        </div>

        <script>
            function togglePassword(fieldId) {
                const input = document.getElementById(fieldId);
                const toggleIcon = document.getElementById(`${fieldId}-toggle`);

                if (input.type === "password") {
                    input.type = "text";
                    toggleIcon.classList.remove("fa-eye");
                    toggleIcon.classList.add("fa-eye-slash");
                } else {
                    input.type = "password";
                    toggleIcon.classList.remove("fa-eye-slash");
                    toggleIcon.classList.add("fa-eye");
                }
            }

            function saveEnv(key) {
                const input = document.getElementById(key);
                const value = input.value;

                fetch("{{ route('admin.updateSettings') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                    },
                    body: JSON.stringify({ key, value })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert(`${key} updated successfully!`);
                    } else {
                        alert(`Failed to update ${key}: ${data.error}`);
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    alert(`An error occurred while updating ${key}.`);
                });
            }
        </script>


    @endsection
