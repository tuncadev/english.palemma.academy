<!-- resources/views/components/practice-select.blade.php -->
@props(['id', 'options', 'selected' => null, 'dropdownValues'])
@php $optionID = "sentence_$id";  @endphp
@php if( isset($dropdownValues) && is_array($dropdownValues) && !empty($dropdownValues) ){
    $dropdownValues = $dropdownValues[$id][$id];
} else {
    $dropdownValues = $dropdownValues;
}
@endphp


<select name="sentence_{{ $id }}" id="{{$optionID}}" class="py-2.5 pr-4 pl-4 text-xs text-gray-800 bg-transparent appearance-none border-0 focus:border-0 focus:outline-none">
    <!-- "Please select" option -->
    <option value="" {{ is_null($dropdownValues) ? 'selected' : '' }}>Please select</option>

    @foreach ($options as $index => $option)
        @php $selected = ($dropdownValues === $option) ? 'selected' : ''; @endphp
        <option data-id="{{$id}}" value="{{ $option }}" {{ $selected }}>
            {{ $option }}
        </option>
    @endforeach
</select>
