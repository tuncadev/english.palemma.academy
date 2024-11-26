<!-- resources/views/components/admin/listips-modal.blade.php -->
<div id="listips-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-3xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white" id="listips-modal-title">
                    Excluded IP Addresses
                </h3>
                <button type="button"
                    class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="listips-modal"
                    id="hideBg">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div id="listips-modal-body" class="p-4 md:p-5">
                @if ($excludedIps->isNotEmpty())
                    <div class="overflow-x-auto shadow-lg rounded-lg">
                        <table class="min-w-full bg-white border border-gray-200">
                            <thead class="bg-gray-50">
                                <tr class="bg-sky-300">
                                    @foreach ($excludedIps->first()->getAttributes() as $column => $value)
                                        <th class="py-3 px-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ $column }}</th>
                                    @endforeach
                                    <th class="py-3 px-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($excludedIps as $excludedIp)
                                    <tr class="hover:bg-gray-200 hover:cursor-pointer text-xs">
                                        @foreach ($excludedIp->getAttributes() as $column => $value)
                                            <td class="py-4 px-2 text-xs text-gray-500">
                                                @if ($column === 'created_at' || $column === 'updated_at')
                                                    {{ $value ? \Carbon\Carbon::parse($value)->format('Y-m-d H:i') : '' }}
                                                @else
                                                    {{ $value }}
                                                @endif

                                            </td>
                                        @endforeach
                                        <td class="py-4 text-center px-2 text-xs text-gray-500">
                                            <form action="{{ route('admin.deleteip') }}" method="POST">
                                                @csrf
                                                <input name="ipid" type="hidden" value="{{$excludedIp->id}}">
                                                <button>
                                                    <i class="text-red-500 hover:text-red-700 fa-solid fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Render Pagination Links -->
                    <div class="mt-4">
                        {!! $excludedIps->links('pagination::tailwind') !!}
                    </div>
                @else
                    <div class="flex items-center justify-center p-4 bg-gray-100 rounded-md">
                        <p class="text-red-500 text-sm font-semibold">
                            No Excluded IP Addresses yet.
                        </p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('hideBg').addEventListener('click', () => {
        const customBackdrop = document.getElementById('custom-backdrop');
            if (customBackdrop) customBackdrop.remove();

});
</script>
