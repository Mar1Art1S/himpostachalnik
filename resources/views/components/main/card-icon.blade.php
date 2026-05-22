@props([
    'title', 'text'
])
<div
    class="group rounded-[30px] bg-white p-6 text-center
                        shadow-sm transition-all duration-300
                        hover:-translate-y-1 hover:shadow-2xl">

    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-[#f0b51d]">
        {{ $slot }}
    </div>

    <h3 class="mt-5 text-[20px] font-bold text-[#0b2f7a]">
        {{ $title }}
    </h3>

    <p class="mt-3 text-[15px] leading-7 text-[#666]">
        {{ $text }}
    </p>
</div>



