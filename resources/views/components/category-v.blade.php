@props([
    'image',
    'title',
    'description',
    'link',
    'video_one',
    'video_two',
    'video_three',
    'video_four',
    'video_five',
])
<x-decor.flip-v>
    <div class="relative front xs:hidden">
        <img class="absolute" src="{{ $image }}" alt="" />
        <h3
            class="absolute inset-0 pl-5 leading-[40px] text-3xl font-r900 bg-[#0b2f7a]/55 w-full h-full uppercase lf:text-2xl">
            {{ $title }}
        </h3>
    </div>
    <div class="back xs:hidden !bg-white p-6 flex h-full flex-col">
        <h4 class="pt-2 text-1.5xl leading-[28px] font-r700 text-center lf:text-base lf:leading-[18px]">
            {{ $title }}
        </h4>
        <p class="mt-5 mb-4 text-base font-r400 leading-[22px] text-center text-[#666] line-clamp-6 lf:mt-3 lf:text-sm lf:leading-[18px]">
            {{ $description }}
        </p>
        <div class="mt-auto flex items-center justify-center pb-2">
            <a class="inline-block px-12 py-3 text-sm text-white rounded-2xl font-r700 bg-[#2453df] hover:bg-[#0b2f7a] focus:outline-none focus:ring active:text-white transition lf:px-8 lf:py-2"
                href="{{ $link }}">
                {{ __('other.other_next') }}
            </a>
            @isset($video_one)
                <div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false" class="relative z-50 w-auto h-auto">
                    <button @click="modalOpen=true"
                        class="inline-block w-40 px-12 py-3 m-2 text-sm text-white bg-[#2453df] border-2 border-[#2453df] rounded-2xl font-r700 transition hover:bg-white hover:text-[#2453df] hover:border-[#2453df] focus:outline-none focus:ring focus:ring-blue-200 active:text-[#2453df] disabled:opacity-75 lf:py-2 lf:px-4 lf:w-24">
                        {{ __('other.other_video') }}</button>
                    <template x-teleport="body">
                        <div x-show="modalOpen"
                            class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen" x-cloak>
                            <div x-show="modalOpen" x-transition:enter="ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0" @click="modalOpen=false"
                                class="absolute inset-0 w-full h-full bg-black bg-opacity-40"></div>
                            <div x-show="modalOpen" x-trap.inert.noscroll="modalOpen"
                                x-transition:enter="ease-out duration-300"
                                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                x-transition:leave="ease-in duration-200"
                                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                class="relative w-[min(92vw,960px)] max-h-[88vh] py-10 bg-white px-8 rounded-[30px] shadow-2xl overflow-y-auto">
                                <div class="flex items-center justify-between pb-2 ">


                                    <button @click="modalOpen=false"
                                        class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                        <svg class="block w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="relative flex flex-col w-full gap-6">
                                    <div class="pt-5 my-2">
                                        @isset($video_one)
                                            <iframe class="w-full aspect-video rounded-2xl"
                                                src="https://www.youtube.com/embed/{{ $video_one }}"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>

                                            </iframe>
                                        @endisset
                                    </div>
                                    <div class="my-1">
                                        @isset($video_two)
                                            <iframe class="w-full aspect-video rounded-2xl"
                                                src="https://www.youtube.com/embed/{{ $video_two }}"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>

                                            </iframe>
                                        @endisset
                                    </div>
                                    <div class="my-1">
                                        @isset($video_three)
                                            <iframe class="w-full aspect-video rounded-2xl"
                                                src="https://www.youtube.com/embed/{{ $video_three }}"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>

                                            </iframe>
                                        @endisset
                                    </div>
                                    <div class="my-1">
                                        @isset($video_four)
                                            <iframe class="w-full aspect-video rounded-2xl"
                                                src="https://www.youtube.com/embed/{{ $video_four }}"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>

                                            </iframe>
                                        @endisset
                                    </div>
                                    <div class="my-1">
                                        @isset($video_five)
                                            <iframe class="w-full aspect-video rounded-2xl"
                                                src="https://www.youtube.com/embed/{{ $video_five }}"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>

                                            </iframe>
                                        @endisset
                                    </div>

                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            @endisset
        </div>
    </div>

</x-decor.flip-v>

{{-- xs screen version --}}
<div
    class="mobile-category-card relative w-full max-w-[300px] aspect-square mx-auto mt-4 mb-4 rounded-[30px] overflow-hidden shadow-sm border border-black/5">
    <img class="absolute inset-0 w-full h-full object-cover" src="{{ $image }}" alt="" />

    {{-- Title positioned at the top of the card --}}
    <h3
        class="absolute top-0 bg-[#0b2f7a]/70 w-full text-lg leading-tight font-r900 uppercase text-center text-white p-3 break-words">
        {{ $title }}
    </h3>

    {{-- Button positioned at the bottom of the card --}}
    <div class="absolute bottom-4 w-full h-auto flex justify-center items-center flex-wrap">
        <a class="rounded-2xl px-8 py-2 m-2 text-sm text-white font-r700 bg-[#2453df] hover:bg-[#0b2f7a] focus:outline-none focus:ring active:text-white transition"
            href="{{ $link }}">
            {{ __('other.other_next') }}
        </a>
        @isset($video_one)
            <div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false" class="relative z-50 w-auto h-auto">
                <button @click="modalOpen=true"
                    class="inline-block w-40 px-12 py-3 m-2 text-sm text-white bg-[#2453df] border-2 border-[#2453df] rounded-2xl font-r700 transition hover:bg-white hover:text-[#2453df] hover:border-[#2453df] focus:outline-none focus:ring focus:ring-blue-200 active:text-[#2453df] disabled:opacity-75 lf:py-2 lf:px-4 lf:w-24">
                    {{ __('other.other_video') }}</button>
                <template x-teleport="body">
                    <div x-show="modalOpen"
                        class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen" x-cloak>
                        <div x-show="modalOpen" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0" @click="modalOpen=false"
                            class="absolute inset-0 w-full h-full bg-black bg-opacity-40"></div>
                        <div x-show="modalOpen" x-trap.inert.noscroll="modalOpen"
                            x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave="ease-in duration-200"
                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            class="relative w-[min(92vw,960px)] max-h-[88vh] py-10 bg-white px-4 sm:px-8 rounded-[30px] shadow-2xl overflow-y-auto">
                            <div class="flex items-center justify-between pb-2 ">


                                <button @click="modalOpen=false"
                                    class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-8 ml-8 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                    <svg class="block w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <div class="relative flex flex-col w-full gap-5">
                                <div class="pt-5 my-0">

                                    @isset($video_one)
                                        <iframe class="w-full aspect-video rounded-2xl"
                                            src="https://www.youtube.com/embed/{{ $video_one }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    @endisset
                                </div>
                                <div class="my-1">
                                    @isset($video_two)
                                        <iframe class="w-full aspect-video rounded-2xl"
                                            src="https://www.youtube.com/embed/{{ $video_two }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                        </iframe>
                                    @endisset
                                </div>
                                <div class="my-1">
                                    @isset($video_three)
                                        <iframe class="w-full aspect-video rounded-2xl"
                                            src="https://www.youtube.com/embed/{{ $video_three }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                        </iframe>
                                    @endisset
                                </div>
                                <div class="my-1">
                                    @isset($video_four)
                                        <iframe class="w-full aspect-video rounded-2xl"
                                            src="https://www.youtube.com/embed/{{ $video_four }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                        </iframe>
                                    @endisset
                                </div>
                                <div class="my-1">
                                    @isset($video_five)
                                        <iframe class="w-full aspect-video rounded-2xl"
                                            src="https://www.youtube.com/embed/{{ $video_five }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                        </iframe>
                                    @endisset
                                </div>

                            </div>
                        </div>
                    </div>
                </template>
            </div>
        @endisset
    </div>
</div>
