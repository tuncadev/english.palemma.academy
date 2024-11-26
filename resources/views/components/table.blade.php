<div class="overflow-x-auto shadow-lg rounded-lg">
    <table class="min-w-full bg-white border border-gray-200">
        <thead class="bg-gray-50">
            <tr>
                @foreach ($headers as $header)
                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($rows as $row)
                <tr class="hover:bg-gray-200 hover:cursor-pointer">
                    @foreach ($row as $cell)
                        <td class="py-4 px-6 text-sm text-gray-500">{{ $cell }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
