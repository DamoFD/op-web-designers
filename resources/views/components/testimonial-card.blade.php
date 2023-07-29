@php
    $imgSrc= strtolower(str_replace(' ', '-', $name));
@endphp

<div class="bg-brand-gray-900 bg-opacity-30 rounded-xl mt-8 border-2 border-brand-gray-900">
    <img src="{{ asset('svg/' . $color . '-quotes.svg') }}" alt="quotation marks" >
    <p class="text-brand-white font-inter p-2 text-center md:text-xl">
        {{ $quote }}
    </p>
    <div class="flex space-x-2 items-center lg:mt-4">
        <img class="h-16 p-2 md:h-20 lg:h-16" src="{{ asset('img/' . $imgSrc . '.png') }}" alt="{{ $name }}">
        <p class="text-xl text-brand-white font-extrabold font-inter md:text-3xl">{{ $name }}</p>
    </div>
</div>
