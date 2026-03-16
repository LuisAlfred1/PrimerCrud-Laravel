<div {{ $attributes->merge(['class' => 'max-w-md w-full bg-white shadow-xl p-8 border border-gray-100 rounded-xl']) }}>
    <h1 class="font-medium text-2xl mb-6 text-center text-gray-800">{{ $title }}</h1>
    {{ $slot }}
</div>
