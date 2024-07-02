@props(['placeholder', 'name', 'type'])
@php
    $default = [
        'type' => $type,
        'class' =>
            'bg-neutral-700 border border-neutral-500 px-4 rounded-md py-1 text-[18px] mt-3 focus:outline-none  w-full',
        'name' => $name,
        'placeholder' => $placeholder,
        'value' => old($name),
    ];

@endphp
<div class="relative">
    <input {{ $attributes($default) }}>
    @error($name)
        <p class="text-sm text-red-500 absolute text-semibold">{{ $message }}</p>
    @enderror
</div>
