@props(['tagId', 'tagName'])

<div class=" rounded-full active:scale-95 select-none">
    <input type="checkbox" name="{{ $tagName }}[]" id="{{ $tagName }}-{{ $tagId }}" class="hidden appearance-none peer">
    <label for="{{ $tagName }}-{{ $tagId }}"  class="cursor-pointer border border-red-500 text-red-500 hover:bg-red-400 hover:text-white py-1 px-3 text-sm rounded-full peer-checked:bg-red-500 peer-checked:text-white ">
        {{ $slot }}
    </label>
</div>