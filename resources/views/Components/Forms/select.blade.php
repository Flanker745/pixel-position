@props(['name'])

@php
    $default = [
        'class' =>
            'bg-neutral-700 border focus:outline-none border-neutral-500 px-4 rounded-md py-1 text-[18px] mt-3',
        'name' => $name,

    ]
@endphp
<select {{ $attributes($default) }} >
    {{ $slot }}
</select>