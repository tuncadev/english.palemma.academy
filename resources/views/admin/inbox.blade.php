@php
$locale = session('locale', 'uk');
$id = 1;
@endphp
@extends('layouts.admin.layout')
    @section('content')
        <x-admin.header>
            Messages
        </x-admin.header>

        <div class="flex mt-6">
            <div class="container py-6">
                <div class="flex mt-6">
                    <div class="container py-6">
                        @if ($messages->isNotEmpty())
                            <div class="overflow-x-auto shadow-lg rounded-lg">
                                <table class="hidden sm:table min-w-full bg-white border border-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            @foreach ($messages->first()->getAttributes() as $column => $value)
                                                @if ($column === "is_read" || $column === "updated_at")
                                                    @continue
                                                @endif
                                                <th class="bg-sky-300 py-3 px-2 text-left text-[10px] font-medium text-gray-500 uppercase tracking-wider">{{ $column }}</th>
                                            @endforeach

                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($messages as $message)

                                            @php
                                                $data = [
                                                    'id' => $message['id'],
                                                    'name' => $message['name'],
                                                    'subject' => $message['subject'],
                                                    'email' => $message['email'],
                                                    'message' => $message['userMessage']

                                                ]
                                            @endphp
                                            <tr class="hover:bg-gray-200 hover:cursor-pointer text-[11px] text-left" onClick="markMessageAsRead({{ $id }})" data-modal-target="message{{$id}}" data-modal-toggle="message{{$id}}">
                                                <div class=""></div>
                                                @foreach ($message->getAttributes() as $column => $value)
                                                    @if ($column === "is_read" || $column === "updated_at")
                                                        @continue
                                                    @endif
                                                        <td class="py-4 px-2 {{ !$message->is_read ? "font-bold" : "font-normal" }} text-gray-500">

                                                            @if ($column === 'created_at' || $column === 'updated_at')
                                                                {{ $value ? \Carbon\Carbon::parse($value)->format('Y-m-d H:i') : '' }}
                                                            @else
                                                                {{ $value }}
                                                            @endif

                                                        </td>

                                                @endforeach
                                            </tr>
                                            <x-admin.message-modal :id="$id" :data="$data" />
                                            @php
                                                $id += 1;
                                            @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- Card layout for mobile -->
                                <div class="sm:hidden space-y-4">
                                    @foreach ($messages as $message)
                                        @php
                                            $data = [
                                                'id' => $message['id'],
                                                'name' => $message['name'],
                                                'subject' => $message['subject'],
                                                'email' => $message['email'],
                                                'message' => $message['userMessage']
                                            ];
                                        @endphp
                                        <div class="bg-white border border-gray-200 rounded shadow-md p-4
                                        {{ !$message->is_read ? 'font-bold' : 'font-normal' }}">
                                            <!-- Message Details -->
                                            <div class="flex flex-col space-y-2" onClick="markMessageAsRead({{ $id }})" data-modal-target="message{{$id}}" data-modal-toggle="message{{$id}}">
                                                <div>
                                                    <span class="font-bold text-gray-700">ID:</span>
                                                    <span class="text-gray-500">{{ $message['id'] }}</span>
                                                </div>
                                                <div>
                                                    <span class="font-bold text-gray-700">Name:</span>
                                                    <span class="text-gray-500">{{ $message['name'] }}</span>
                                                </div>
                                                <div>
                                                    <span class="font-bold text-gray-700">Subject:</span>
                                                    <span class="text-gray-500">{{ $message['subject'] }}</span>
                                                </div>
                                                <div>
                                                    <span class="font-bold text-gray-700">Email:</span>
                                                    <span class="text-gray-500">{{ $message['email'] }}</span>
                                                </div>
                                                <div>
                                                    <span class="font-bold text-gray-700">Message:</span>
                                                    <span class="text-gray-500">{{ $message['userMessage'] }}</span>
                                                </div>
                                                <div>
                                                    <span class="font-bold text-gray-700">Created At:</span>
                                                    <span class="text-gray-500">
                                                        {{ $message['created_at'] ? \Carbon\Carbon::parse($message['created_at'])->format('Y-m-d H:i') : '' }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <x-admin.message-modal :id="$id" :data="$data" />
                                        @php
                                            $id += 1;
                                        @endphp
                                    @endforeach
                                </div>

                            </div>
                        @else
                            <div class="flex">
                                <p class="text-red-500">
                                    No Messages
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endsection
<script>
    function markMessageAsRead(messageId) {
    fetch('/admin/mark-read', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ message_id: messageId })
    })
    .then(response => response.json())
    .then(data => {
        if (data.unreadCount !== undefined) {
            // Update the unread message count in the sidebar
            document.getElementById('unreadMessageCount ').innerText = data.unreadCount;
        }
    })
    .catch(error => {
        console.error('Error marking message as read:', error);
    });
}

</script>
