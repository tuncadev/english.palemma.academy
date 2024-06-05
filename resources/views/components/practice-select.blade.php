<select name="sentence_{{$id}}" id="sentence_{{$id}}" class="py-2.5 pr-4 pl-4 text-xs text-gray-800 bg-transparent appearance-none border-0 focus:border-0 focus:outline-none">
    <option value="">___________</option>
    @foreach ($options as $option)
        <option value="{{ $option }}">{{ $option }}</option>
    @endforeach
</select>
