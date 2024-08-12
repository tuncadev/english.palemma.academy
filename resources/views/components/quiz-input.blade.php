<input type="text"
    id="{{ $id }}"
    data-point="{{ $point }}"
    data-check="{{ $answer }}"
    name="answers[{{ $id }}]"
    class="mx-2 dropzone p-2 border-1 border-dashed rounded cursor-pointer max-w-24 text-xs text-center border-gray-400 bg-gray-300/30 "
    draggable="true"
    ondragstart="drag(event)"
    ondrop="drop(event)"
    ondragover="allowDrop(event)"
    value="{{ isset($prevValue) ? $prevValue : ''}}" />
