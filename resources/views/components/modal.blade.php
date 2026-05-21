@props(['title', 'button', 'product'])

<div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false" :class="{ 'z-40': modalOpen }"
    class="relative w-auto h-auto">
    {{ $button }}
    <template x-teleport="body">
        <div x-show="modalOpen" class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen p-4"
            x-cloak>
            <div x-show="modalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-300"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click="modalOpen=false"
                class="absolute inset-0 w-full h-full bg-slate-900/50 backdrop-blur-sm"></div>
            <div x-show="modalOpen" x-trap.inert.noscroll="modalOpen" x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="relative w-full max-w-4xl mx-auto p-6 md:p-8 bg-white shadow-2xl rounded-3xl border border-slate-100/50 overflow-hidden">
                <div class="flex items-start justify-between pb-4 mb-6 border-b border-slate-100">
                    <div>
                        <h3 class="text-2xl font-extrabold text-slate-900 pr-10 flex flex-wrap items-center gap-2">
                            <span>{{ $title }}</span>
                            @isset($product)
                                <span class="text-xs font-bold tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full uppercase">{{ $product['name'] }}</span>
                            @endisset
                        </h3>
                        <p class="mt-1.5 text-sm text-slate-500 font-medium">
                            @isset($product)
                                {{ app()->getLocale() == 'uk' ? 'Заповніть форму, щоб оформити замовлення' : 'Fill out the form to place an order' }}
                            @else
                                {{ app()->getLocale() == 'uk' ? 'Заповніть форму, і ми відповімо вам найближчим часом' : 'Fill out the form, and we will contact you shortly' }}
                            @endisset
                        </p>
                    </div>
                    <button @click="modalOpen=false"
                        class="p-2 transition rounded-xl hover:bg-slate-50 text-slate-400 hover:text-slate-700">
                        <x-lucide-x class="w-6 h-6" />
                    </button>
                </div>

                <div class="relative w-auto">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </template>
</div>
