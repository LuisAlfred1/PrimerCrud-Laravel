@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'border border-gray-300 rounded-lg py-2 px-4 outline-none w-full mb-4 focus:ring-2 focus:ring-gray-400 focus:border-transparent transition-all shadow-sm',
]) !!}>
