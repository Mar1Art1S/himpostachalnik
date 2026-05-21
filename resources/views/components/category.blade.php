@props(['image', 'title', 'description', 'link'])

<x-decor.flip>
    {{-- Front side for non-xs screens --}}
    <div class="relative front xs:hidden w-full h-full">
        <img class="absolute inset-0 w-full h-full object-cover" src="{{ $image }}" alt="" />
        <h3
            class="absolute inset-0 pl-5 pr-2 pt-5 leading-[40px] text-3xl font-r900 bg-[#0b2f7a]/55
         w-full h-full uppercase lf:text-2xl md:text-xl md:leading-[30px] sm:text-lg sm:leading-[24px] break-words overflow-hidden z-10">
            {{ $title }}
        </h3>
    </div>
    {{-- Back side for non-xs screens --}}
    <div class="back xs:hidden relative z-10 !bg-white p-6 flex h-full flex-col">
        <h4 class="pt-2 text-1.5xl leading-[28px] font-r700 text-center">
            {{ $title }}
        </h4>
        <p
            class="mt-5 mb-4 text-base font-r400 leading-[22px] text-center text-[#666] line-clamp-6
        lf:mt-3 lf:text-sm lf:leading-[18px]">
            {{ $description }}
        </p>
        <div class="mt-auto flex items-center justify-center pb-2">
            <a class="inline-block px-12 py-3 text-sm text-white rounded-2xl font-r700 bg-[#2453df] hover:bg-[#0b2f7a] focus:outline-none focus:ring active:text-white transition"
                href="{{ $link }}">
                {{ __('other.other_next') }}
            </a>
        </div>
    </div>
</x-decor.flip>

{{-- xs screen version --}}
<div
    class="mobile-category-card relative w-full max-w-[300px] aspect-square mx-auto mt-4 rounded-[30px] overflow-hidden shadow-sm border border-black/5 transition duration-300">
    <img class="absolute inset-0 w-full h-full object-cover" src="{{ $image }}" alt="" />

    {{-- Dark overlay for better readability --}}
    <div class="absolute inset-0 bg-[#0b2f7a]/55 z-0"></div>
    <h3
        class="absolute top-0 w-full text-lg leading-tight font-r900 uppercase text-center text-white p-3 break-words z-10">
        {{ $title }}
    </h3>

    {{-- Description positioned in the middle, hidden on very tiny screens but shown if it fits --}}
    <p
        class="absolute top-[44%] -translate-y-1/2 px-4 text-white text-sm text-center line-clamp-3 leading-snug drop-shadow-md z-10">
        {{ $description }}
    </p>

    {{-- Button positioned at the bottom of the card --}}
    <div class="absolute bottom-5 w-full flex justify-center z-10">
        <a class="rounded-2xl px-6 py-2 text-sm text-white font-r700 bg-[#2453df] hover:bg-[#0b2f7a] focus:outline-none focus:ring active:text-white transition"
            href="{{ $link }}">
            {{ __('other.other_next') }}
        </a>
    </div>
</div>

