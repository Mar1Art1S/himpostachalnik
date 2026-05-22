@props([
    'title', 'text'
])
<div class="flex gap-4 sm:gap-5 items-center">
    <div
        class="flex h-12 w-12 sm:h-14 sm:w-14 flex-shrink-0 items-center justify-center rounded-xl sm:rounded-2xl bg-[#2453df]">
        {{ $slot }}
    </div>
    <div>
        <div class="text-3xl sm:text-4xl font-black text-[#f0b51d] leading-none">{{ $title }}
        </div>
        <div class="mt-1 sm:mt-2 text-base sm:text-lg text-white font-medium">{{ $text }}</div>
    </div>
</div>
