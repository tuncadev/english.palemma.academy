@props(['phrase', 'savedProgress'])
<li {{ $attributes->merge(['class' => 'p-4 bg-gray-200 border border-gray-300 rounded-lg mb-2 m-auto']) }}>
    <div class="flex justify-between">
        <div class="">
            <input type="checkbox" id="phrase-{{ $phrase['id'] }}" name="phrases[{{ $phrase['id'] }}]" class="phrase-checkbox mr-2" {{ isset($phrase['checked']) && $phrase['checked'] ? 'checked' : '' }}>
            <label for="phrase-{{ $phrase['id'] }}">
                {{ $phrase['en'] }}
            </label>
        </div>
        <div class="flex items-center">
                <i class="fa-solid fa-language mr-1"></i>
                @lang('lesson.translate')
            </a>
        </div>
    </div>
    <div id="translation-{{ $phrase['id'] }}" style="display: none;" class="bg-white rounded-md pl-4 p-2 mt-2 text-sm">
        <p class="text-gray-800"><i class="fa-solid fa-circle-arrow-right mr-2"></i>{{ $phrase['localized'] }}</p>
    </div>
</li>
