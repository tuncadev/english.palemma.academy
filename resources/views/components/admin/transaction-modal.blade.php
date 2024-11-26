@props(['data', 'id'])
    <div id="transaction{{$id}}"
        tabindex="-1"
        aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Response Details
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="transaction{{$id}}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        <ul class="list-none text-xs text-left">
                            @foreach ($data as $key => $val)
                            @if ($key === "paymentInfo")
                            <li> <strong>{{ $key }}: </strong> <br />
                                <ul class="pl-4">
                                    @if(is_array($val))
                                        @foreach ($val as $key => $value)
                                            <li class="
                                                {{ $value === "success" ? "text-green-600 font-semibold" : "" }}
                                                {{ $value === "failure" ? "text-red-600 font-semibold" : "" }}
                                                {{ $value === "pending" ? "text-amber-600 font-semibold" : "" }}
                                             ">
                                                <span class="font-semibold text-sky-700">{{ $key }}:</span> {{ $value }}<br>
                                            </li>
                                        @endforeach
                                    @else
                                        @php
                                            $decodedVal = json_decode($val, true);
                                        @endphp
                                        @if(is_array($decodedVal))
                                            @foreach ($decodedVal as $key => $value)
                                                <li class="font-semibold text-gray-700">{{ $key }}: {{ $value }} <br></li>
                                            @endforeach
                                        @else
                                            {{ $val }}
                                        @endif
                                    @endif
                                </ul>
                            </li>

                            @else
                                <li class="
                                {{ $val === "success" ? "text-green-600 font-semibold" : "" }}
                                              {{ $val === "failure" ? "text-red-600 font-semibold" : "" }}
                                                {{ $val === "pending" ? "text-amber-600 font-semibold" : "" }}
                                "><strong>{{ $key }}: </strong> {{ is_array($val) ? json_encode($val, JSON_PRETTY_PRINT) : $val }}</li>
                            @endif

                            @endforeach
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
