@php
$locale = session('locale', 'uk');

@endphp
@extends('layouts.admin.layout')
    @section('content')
        <x-admin.header>
            Visitors
        </x-admin.header>
            <div class="flex items-center gap-4 text-xs mb-6">
                <button id="addip" class="hover:bg-green-300 hover:border-2 hover:text-red-800 p-2 bg-green-100 border-2 border-gray-200 rounded-lg">
                    Add IP to Exclude
                </button>
                <button  id="listIps" data-modal-target="listips-modal" data-modal-toggle="listips-modal" class="hover:bg-amber-300 hover:border-2 hover:text-red-800 p-2 bg-amber-100 border-2 border-gray-200 rounded-lg">
                    Excluded IPs
                </button>
            </div>
            @if (session('message'))
               <div class="">
                    {{ session('message') }}
                </div>

            @endif

            @if (session('error'))
            <x-admin.flash-failure>
                {{ session('error') }}
            </x-admin.flash-failure>
            @endif
        <div class="flex mt-6">
            <div class="container py-6">
                @if ($visitors->isNotEmpty())
                    <div class="overflow-x-auto shadow-lg rounded-lg">
                        <table class="hidden sm:table min-w-full bg-white border border-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    @foreach ($visitors->first()->getAttributes() as $column => $value)
                                        <th class="py-3 px-2 text-left text-[10px] font-medium text-gray-500 uppercase tracking-wider">{{ $column }}</th>
                                    @endforeach
                                    <th class="py-3 px-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($visitors as $visitor)
                                    <tr onclick="window.location='{{ route('admin.visitor.details', $visitor->id) }}'" class="hover:bg-gray-200 hover:cursor-pointer">
                                        @foreach ($visitor->getAttributes() as $column => $value)
                                            <td class="py-4 px-2 text-[10px] text-gray-500">
                                                @if ($column === 'created_at' || $column === 'updated_at')
                                                    {{ $value ? \Carbon\Carbon::parse($value)->format('Y-m-d H:i') : '' }}
                                                @else
                                                    {{ $value }}
                                                @endif
                                            </td>
                                        @endforeach
                                        <td class="py-4 text-center px-2 text-xs text-gray-500">
                                            <form action="{{ route('admin.deleteVisitor') }}" method="POST">
                                                @csrf
                                                <input name="visitorIp" type="hidden" value="{{$visitor->id}}">
                                                <button>
                                                    <i class="text-red-500 hover:text-red-700 fa-solid fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Card layout for mobile -->
                        <div class="sm:hidden space-y-4">
                            @foreach ($visitors as $visitor)
                                <div class="bg-white border border-gray-200 rounded shadow-md p-4 hover:bg-gray-100 cursor-pointer" onclick="window.location='{{ route('admin.visitor.details', $visitor->id) }}'">
                                    <!-- Visitor Details -->
                                    <div class="flex flex-col space-y-2">
                                        @foreach ($visitor->getAttributes() as $column => $value)
                                            <div>
                                                <span class="font-bold text-gray-700 capitalize">
                                                    {{ Str::headline(str_replace('_', ' ', $column)) }}:
                                                </span>
                                                <span class="text-gray-500">
                                                    @if ($column === 'created_at' || $column === 'updated_at')
                                                        {{ $value ? \Carbon\Carbon::parse($value)->format('Y-m-d H:i') : '' }}
                                                    @else
                                                        {{ $value }}
                                                    @endif
                                                </span>
                                            </div>
                                        @endforeach
                                        <!-- Action Buttons -->
                                        <div class="mt-2 flex justify-end">
                                            <form action="{{ route('admin.deleteVisitor') }}" method="POST" class="inline">
                                                @csrf
                                                <input name="visitorIp" type="hidden" value="{{ $visitor->id }}">
                                                <button class="text-red-500 hover:text-red-700">
                                                    <i class="fa-solid fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    @else
                    <div class="flex">
                        <p class="text-red-500">
                            No Visitors
                        </p>
                    </div>
                @endif
            </div>

        </div>
        <x-admin.addip-modal />
        <x-admin.listips-modal :excludedIps="$excludedIps" />
    @endsection
<script>
    document.addEventListener('DOMContentLoaded', function () {
    // Set the modal menu element
    const $targetEl = document.getElementById('listips-modal');

    // Options with default values
    const options = {
        backdrop: 'dynamic', // Let Flowbite manage the backdrop
        backdropClasses:
            'bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40',
        closable: true,
        onHide: () => {
            console.log('modal is hidden');
            // Remove custom backdrop if present
            const customBackdrop = document.getElementById('custom-backdrop');
            if (customBackdrop) customBackdrop.remove();
        },
        onShow: () => {
            console.log('modal is shown');
            // Add custom backdrop if not already present
            let customBackdrop = document.getElementById('custom-backdrop');
            if (!customBackdrop) {
                customBackdrop = document.createElement('div');
                customBackdrop.id = 'custom-backdrop';
                customBackdrop.className =
                    'bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40';
                document.body.appendChild(customBackdrop);
            }
        },
        onToggle: () => {
            console.log('modal has been toggled');
        },
    };

    // Instance options object
    const instanceOptions = {
        id: 'listips-modal',
        override: true,
    };

    // Initialize modal
    const modal = new Modal($targetEl, options, instanceOptions);

    // Check URL parameter and show modal if "page" is set
    const urlParams = new URLSearchParams(window.location.search);
    const page = urlParams.get('page');

    if (page && {{ $excludedIps->isNotEmpty() ? 'true' : 'false' }}) {
    modal.show();
}
});

</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
    const alertSuccess = document.getElementById('flash-success');

    if (alertSuccess) {
        // Simulate flash message being visible
        alertSuccess.classList.remove('hidden'); // Make the alert visible

        // Add a delay for the fade-out effect
        setTimeout(() => {
            alertSuccess.classList.replace('bg-green-700', 'bg-green-100'); // Change background color
        }, 100); // Small delay to ensure visibility before transition starts

        // Optionally hide after some time
        setTimeout(() => {
            alertSuccess.classList.add('hidden'); // Hide the alert after the effect
        }, 4000); // 4 seconds (adjust as needed)
    }
});



</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {

        const $targetAddip = document.getElementById('addip-modal');
        const options = {

            onHide: () => {
                location.reload();
            },

        };
        const instanceOptions = {
            id: 'addip-modal',
            override: true
        };
        // Initialize modal
        const addipModal = new Modal($targetAddip, options, instanceOptions );

        const addIpButton = document.getElementById('addip');

        addIpButton.addEventListener('click', () => {

            addipModal.toggle()
        });


    });
</script>
