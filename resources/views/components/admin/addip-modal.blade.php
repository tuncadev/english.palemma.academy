<div id="addip-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full" id="modalContent">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Add IP Addresses
                </h3>
                <button id="closeIpModal" type="button" data-modal-hide="addip-modal"
                class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                >
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form id="addipForm" name="addip" class="space-y-4">
                    @csrf
                    <div>
                        <label for="ipaddress" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">IP Address to exclude</label>
                        <input
                            type="text"
                            name="ipaddress"
                            id="ipaddress"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="127.0.0.1"
                            required
                        />
                        <label for="block_range" class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Block IP Range?</label>
                        <select name="block_range" id="block_range" class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="1">True</option>
                            <option value="0" selected>False</option>
                        </select>
                    </div>
                    <button
                        type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >
                        Add IP
                    </button>
                </form>
                <x-admin.alert-success>
                    IP address added successfully!
                </x-admin.alert-success>
                <x-admin.alert-failure>
                    Failed to add the IP address. Please check the input and try again.
                </x-admin.alert-failure>
            </div>
        </div>
    </div>
</div>
<script>
   document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('addipForm').addEventListener('submit', function (event) {
        console.log()
        event.preventDefault();

        const ipaddress = document.getElementById('ipaddress').value;
        const button = event.target.querySelector('button[type="submit"]');
        const blockRange = document.querySelector('select[name="block_range"]').value; // Get the value of the select input

        // Regex for IPv4
        const ipv4Regex = /^(25[0-5]|2[0-4][0-9]|[0-1]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[0-1]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[0-1]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[0-1]?[0-9][0-9]?)$/;

        // Regex for IPv6
        const ipv6Regex = /^(([0-9a-fA-F]{1,4}:){7,7}[0-9a-fA-F]{1,4}|([0-9a-fA-F]{1,4}:){1,7}:|([0-9a-fA-F]{1,4}:){1,6}:[0-9a-fA-F]{1,4}|([0-9a-fA-F]{1,4}:){1,5}(:[0-9a-fA-F]{1,4}){1,2}|([0-9a-fA-F]{1,4}:){1,4}(:[0-9a-fA-F]{1,4}){1,3}|([0-9a-fA-F]{1,4}:){1,3}(:[0-9a-fA-F]{1,4}){1,4}|([0-9a-fA-F]{1,4}:){1,2}(:[0-9a-fA-F]{1,4}){1,5}|[0-9a-fA-F]{1,4}:((:[0-9a-fA-F]{1,4}){1,6})|:((:[0-9a-fA-F]{1,4}){1,7}|:)|fe80:(:[0-9a-fA-F]{0,4}){0,4}%[0-9a-zA-Z]{1,}|::(ffff(:0{1,4}){0,1}:){0,1}(([0-9]{1,3}\.){3}[0-9]{1,3})|([0-9a-fA-F]{1,4}:){1,4}:(([0-9]{1,3}\.){3}[0-9]{1,3}))$/;

        const successComponent = document.getElementById('alert-success');
        const failureComponent = document.getElementById('alert-failure');
        const failureInner = document.getElementById('theFMsg');

        // Hide both alerts initially
        successComponent.classList.add('hidden');
        failureComponent.classList.add('hidden');

        // Validate IP address against both IPv4 and IPv6
        if (!ipv4Regex.test(ipaddress) && !ipv6Regex.test(ipaddress)) {
            failureComponent.classList.remove('hidden');
            failureInner.innerHTML = "Wrong IP Address Format! <br /> Example formats: 127.0.0.1 (IPv4), 2a03:2880:10ff:3::face:b00c (IPv6)";
            return;
        }

        // If valid, proceed with fetch
        fetch('{{ route("admin.addIp") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            body: JSON.stringify({ ipaddress, block_range: blockRange }),
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.success) {
                    // Show success alert
                    failureComponent.classList.add('hidden');
                    successComponent.classList.remove('hidden');
                    button.textContent = 'Add More IP';
                } else {
                    // Show failure alert
                    successComponent.classList.add('hidden');
                    failureComponent.classList.remove('hidden');
                }
            })
            .catch((error) => {
                console.error('Error:', error);
                // Show failure alert for unexpected errors
                successComponent.classList.add('hidden');
                failureComponent.classList.remove('hidden');
            });
    });
});

</script>
