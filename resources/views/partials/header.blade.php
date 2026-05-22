@php
    $catalogSections = [
        [
            'title' => __('mes.category_title_ppy'),
            'href' => route('ppy_serovine'),
            'items' => [
                ['title' => __('mes.category_v_title_ppy_spraying'), 'href' => route('prod_ppu_napilennya')],
                ['title' => __('mes.category_v_title_ppy_shell'), 'href' => route('prod_ppu_shkarlupi')],
                ['title' => __('mes.category_v_title_insulated_pipes'), 'href' => route('prod_ppu_trub')],
                ['title' => __('mes.category_v_title_ppy_sandwich_panels'), 'href' => route('prod_ppu_sendvich')],
                ['title' => __('mes.category_v_title_ppy_decor_product'), 'href' => route('prod_ppu_virobiv')],
                ['title' => __('mes.category_v_title_ppy_coal_massif'), 'href' => route('prod_ppu_masivu')],
                ['title' => __('mes.category_v_title_ppy_inter_wall_space'), 'href' => route('prod_ppu_prostoru')],
                ['title' => __('mes.category_v_title_ppy_air_filters'), 'href' => route('prod_ppu_filtriv')],
            ],
        ],
        [
            'title' => __('mes.category_title_py'),
            'href' => route('py_serovine'),
            'items' => [
                ['title' => __('mes.category_v_title_py_injection_molding'), 'href' => route('prod_pu_livarnij')],
                ['title' => __('mes.category_v_title_py_leveling_floors'), 'href' => route('prod_pu_pidlogi')],
                ['title' => __('mes.category_v_title_py_elastomers'), 'href' => route('prod_pu_elastomiri')],
                ['title' => __('mes.category_v_title_py_paste'), 'href' => route('prod_pu_pasta')],
                ['title' => __('mes.category_v_title_py_pigment_pastes'), 'href' => route('prod_pu_pigment')],
            ],
        ],
        [
            'title' => __('mes.category_title_py_glue'),
            'href' => route('py_klei'),
            'items' => [
                ['title' => __('mes.category_v_title_glue_epdm'), 'href' => route('prod_klej_krihti')],
                ['title' => __('mes.category_v_title_glue_d4_wood'), 'href' => route('prod_klej_dereva_d4')],
                [
                    'title' => __('mes.category_v_title_glue_clinker_thermal_panels'),
                    'href' => route('prod_klej_sendvich'),
                ],
                ['title' => __('mes.category_v_title_glue_foam_textiles'), 'href' => route('prod_klej_tekstilyu')],
                ['title' => __('mes.category_v_title_glue_bulk_materials'), 'href' => route('prod_klej_budivelnih')],
                ['title' => __('mes.category_v_title_glue_parquet'), 'href' => route('prod_klej_parketu')],
                ['title' => __('mes.category_v_title_glue_artificial_grass'), 'href' => route('prod_klej_travi')],
                ['title' => __('mes.category_v_title_glue_paper_cardboard'), 'href' => route('prod_klej_kartonu')],
            ],
        ],
        [
            'title' => __('mes.category_title_py_paint'),
            'href' => route('py_lak_prom'),
            'items' => [
                ['title' => __('mes.category_v_title_py_dispersants'), 'href' => route('prod_lak_sikativi')],
                ['title' => __('mes.category_v_title_py_сatalysts'), 'href' => route('prod_lak_kataliz')],
                ['title' => __('mes.category_v_title_py_antiseptics'), 'href' => route('prod_lak_antis')],
                ['title' => __('mes.category_v_title_py_butoxylated'), 'href' => route('prod_lak_smoli')],
                ['title' => __('mes.category_v_title_py_copolymers'), 'href' => route('prod_lak_akril')],
            ],
        ],
        [
            'title' => __('mes.category_title_materials_waterproofing'),
            'href' => route('py_gidro'),
            'items' => [
                ['title' => __('mes.category_v_title_py_hot_applied_polyurea'), 'href' => route('poli_moch_haryacho')],
                ['title' => __('mes.category_v_title_py_cold_applied_polyurea'), 'href' => route('poli_moch_kholodno')],
            ],
        ],
        ['title' => __('mes.category_title_py_stone_carpet'), 'href' => route('py_kilima'), 'items' => []],
        ['title' => __('mes.category_title_py_wet_stone_effect'), 'href' => route('py_emk'), 'items' => []],
        ['title' => __('mes.category_title_py_foundry'), 'href' => route('py_pol'), 'items' => []],
    ];
@endphp

<header x-data="{ searchOpen: false, open: false, catalogOpen: false, mobileCatalogOpen: false }" class="relative z-50 w-full bg-white border-b border-gray-200 shadow-sm">

    {{-- TOP BAR --}}
    <div class="text-white bg-gradient-to-r from-blue-900 to-blue-700">
        <div class="max-w-[1800px] mx-auto px-2 lg:px-8 xs:px-4 h-16 flex items-center justify-between">

            {{-- Left --}}
            <div class="flex items-center gap-6 text-sm">

                <div class="flex items-center gap-2 ">
                    <x-lucide-map-pin class="w-4 h-4 text-yellow-400" />
                    <span>{{ __('other.other_citi') }}</span>
                </div>

                <div class="flex items-center gap-2 md:flex sf:hidden">
                    <x-lucide-clock-3 class="w-4 h-4 text-yellow-400" />
                    <span>Пн - Пт: 8:00 - 17:00</span>
                </div>

            </div>


            {{-- Right --}}
            <div class="flex items-center gap-5">

                {{-- Social --}}
                <div class="flex items-center gap-3">

                    <a href="https://www.facebook.com/himpostcom/?locale=uk_UA"
                        class="flex items-center justify-center transition-all duration-300 rounded-full w-9 h-9 bg-white/10 hover:bg-yellow-400 hover:text-black">
                        <x-lucide-facebook class="w-4 h-4" />
                    </a>

                    <a href="https://www.youtube.com/@%D0%A5%D1%96%D0%BC%D0%BF%D0%BE%D1%81%D1%82%D0%B0%D1%87%D0%B0%D0%BB%D1%8C%D0%BD%D0%B8%D0%BA"
                        class="flex items-center justify-center transition-all duration-300 rounded-full w-9 h-9 bg-white/10 hover:bg-yellow-400 hover:text-black">
                        <x-lucide-youtube class="w-4 h-4" />
                    </a>

                </div>

                {{-- Language --}}
                <div x-data="{ open: false }" class="relative">

                    <button @click="open = !open" class="flex items-center gap-2 font-semibold tracking-wide uppercase">
                        {{ app()->getLocale() === 'en' ? 'ENG' : 'UA' }}

                        <x-lucide-chevron-down class="w-4 h-4" />
                    </button>

                    <div x-show="open" @click.outside="open = false" x-transition
                        class="absolute right-0 w-32 mt-3 overflow-hidden bg-white border border-gray-100 shadow-2xl rounded-xl">

                        <a href="{{ route('set-language', 'uk') }}"
                            class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-100">
                            UA
                        </a>

                        <a href="{{ route('set-language', 'en') }}"
                            class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-100">
                            ENG
                        </a>

                    </div>

                </div>

            </div>

        </div>
    </div>

    {{-- MAIN HEADER --}}
    <div class="bg-white">

        <div class="max-w-full mx-auto px-4 lg:px-8 py-4 xl:py-8 flex flex-row items-center justify-between gap-4 xl:gap-8">

            {{-- LOGO --}}
            <div class="flex flex-col items-center gap-6 lg:flex-row order-1">
                <a href="{{ route('main') }}"
                    class="shrink-0 inline-flex items-center justify-center p-2 xl:p-3 sf:w-32 rounded-2xl bg-gradient-to-r from-blue-900 to-blue-700 shadow-md w-full max-w-[140px] md:max-w-[200px] xl:max-w-[280px]">
                    <img src="{{ asset('img/2_logo/Logo_new.png') }}" alt="Логотип"
                        class="object-contain w-full h-[50px] md:h-[80px] xl:h-[130px] ">
                </a>
                <div class="hidden w-px bg-gray-200 lg:block h-20"></div>
            </div>

            {{-- ICONS WRAPPER (Right on mobile, Right/Middle on desktop) --}}
            <div class="flex flex-row items-center gap-3 xl:gap-8 order-2 flex-1 justify-end">

                {{-- SEARCH --}}
                <div class="xl:flex-1 xl:max-w-2xl xl:mr-auto xs:hidden">

                    {{-- Desktop View --}}
                    <div class="hidden xl:block w-full">
                        <livewire:global-search />
                    </div>

                    {{-- Mobile View (Trigger Icon) --}}
                    <div class="flex xl:hidden">
                        <button @click="searchOpen = true" class="flex items-center justify-center w-12 h-12 text-white bg-blue-700 shadow-lg rounded-xl shadow-blue-100 transition hover:scale-105">
                            <x-lucide-search class="w-5 h-5" />
                        </button>
                    </div>

                    {{-- Mobile Search Modal --}}
                    <div x-show="searchOpen" x-transition
                        class="fixed inset-0 z-[60] flex items-start justify-center p-4 pt-24 bg-black/50 xl:hidden"
                        style="display:none">

                        <div @click.outside="searchOpen = false"
                            class="w-full max-w-2xl p-6 bg-white shadow-2xl rounded-3xl">

                            <!-- Header -->
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-xl font-bold text-gray-900">
                                    Пошук
                                </h3>
                                <button @click="searchOpen = false" class="p-2 transition rounded-xl hover:bg-gray-100">
                                    <x-lucide-x class="w-5 h-5 text-gray-500" />
                                </button>
                            </div>

                            <livewire:global-search />

                        </div>
                    </div>

                </div>

                {{-- CONTACTS --}}
                <div class="flex flex-row items-center gap-3 xl:gap-5">

                    {{-- Phone --}}
                    <div class="flex items-center gap-4">
                        <div x-data="{ open: {{ session('callback-success') || $errors->callback->any() ? 'true' : 'false' }} }" class="flex items-center gap-4">
                            <!-- Кнопка -->
                            <button @click="open = true" class="flex items-center gap-4 text-left group">
                                <div class="flex items-center justify-center w-12 h-12 xl:w-16 xl:h-16 text-white bg-blue-700 shadow-lg rounded-xl xl:rounded-2xl shadow-blue-100 group-hover:scale-105 transition">
                                    <x-lucide-phone class="w-5 h-5 xl:w-7 xl:h-7" />
                                </div>
                                <div class="hidden xl:block">
                                    <div class="text-xl font-bold text-gray-900">
                                        +38 (050) 340-35-47
                                    </div>
                                    <div class="font-medium text-blue-700">
                                        Замовити дзвінок
                                    </div>
                                </div>
                            </button>

                            <!-- Modal -->
                            <div x-show="open" x-transition class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50" style="display:none">
                                <div @click.outside="open = false" class="w-full max-w-md p-6 bg-white shadow-2xl rounded-3xl">
                                    <!-- Header -->
                                    <div class="flex items-center justify-between mb-6">
                                        <div>
                                            <h3 class="text-2xl font-bold text-gray-900">Замовити дзвінок</h3>
                                            <p class="mt-1 text-sm text-gray-500">Ми передзвонимо вам найближчим часом</p>
                                        </div>
                                        <button @click="open = false" class="p-2 transition rounded-xl hover:bg-gray-100">
                                            <x-lucide-x class="w-5 h-5 text-gray-500" />
                                        </button>
                                    </div>
                                    <!-- Form / Success State -->
                                    @session('callback-success')
                                        <div class="text-center py-6">
                                            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 bg-green-100 text-green-600 rounded-full">
                                                <x-lucide-check class="w-8 h-8" />
                                            </div>
                                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Дякуємо!</h3>
                                            <p class="text-gray-600">{{ session('callback-success') }}</p>
                                            <button @click="open = false" type="button" class="mt-6 w-full py-3 font-semibold text-white bg-blue-700 rounded-2xl hover:bg-blue-800 transition shadow-lg shadow-blue-100">
                                                Закрити
                                            </button>
                                        </div>
                                    @else
                                        <form action="/callback-request" method="POST" class="space-y-4">
                                            @csrf
                                            <div>
                                                <label class="block mb-2 text-sm font-medium text-gray-700">Ваше ім’я</label>
                                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Іван" class="w-full px-4 py-3 border @error('name', 'callback') border-red-500 @else border-gray-200 @enderror rounded-2xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                                                @error('name', 'callback')
                                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div>
                                                <label class="block mb-2 text-sm font-medium text-gray-700">Телефон</label>
                                                <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="+38 (0__) ___-__-__" class="w-full px-4 py-3 border @error('phone', 'callback') border-red-500 @else border-gray-200 @enderror rounded-2xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                                                @error('phone', 'callback')
                                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div>
                                                <label class="block mb-2 text-sm font-medium text-gray-700">Коментар</label>
                                                <textarea name="message" rows="4" placeholder="Коротко опишіть питання" class="w-full px-4 py-3 border @error('message', 'callback') border-red-500 @else border-gray-200 @enderror rounded-2xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">{{ old('message') }}</textarea>
                                                @error('message', 'callback')
                                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <button type="submit" class="w-full py-3 font-semibold text-white transition bg-blue-700 shadow-lg rounded-2xl hover:bg-blue-800">
                                                Відправити заявку
                                            </button>
                                        </form>
                                    @endsession
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="flex items-center gap-4 xs:hidden xs:gap-0">
                        <div x-data="{ open: {{ session('contact-success') || $errors->contact->any() ? 'true' : 'false' }} }" class="flex items-center gap-4">
                            <!-- Button -->
                            <button @click="open = true" class="flex items-center gap-4 text-left group">
                                <div class="flex items-center justify-center w-12 h-12 xl:w-16 xl:h-16 text-white bg-blue-700 shadow-lg rounded-xl xl:rounded-2xl shadow-blue-100 group-hover:scale-105 transition">
                                    <x-lucide-mail class="w-5 h-5 xl:w-7 xl:h-7" />
                                </div>
                                <div class="hidden xl:block">
                                    <div class="text-lg font-semibold text-gray-900">
                                        director@himpost.com
                                    </div>
                                    <div class="font-medium text-blue-700">
                                        Написати нам
                                    </div>
                                </div>
                            </button>

                            <!-- Modal -->
                            <div x-show="open" x-transition class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50" style="display:none">
                                <div @click.outside="open = false" class="w-full max-w-xl p-6 bg-white shadow-2xl rounded-3xl">
                                    <!-- Header -->
                                    <div class="flex items-start justify-between mb-6">
                                        <div>
                                            <h3 class="text-2xl font-bold text-gray-900">Написати нам</h3>
                                            <p class="mt-1 text-sm text-gray-500">Відправте повідомлення і ми зв’яжемося з вами</p>
                                        </div>
                                        <button @click="open = false" class="p-2 transition rounded-xl hover:bg-gray-100">
                                            <x-lucide-x class="w-5 h-5 text-gray-500" />
                                        </button>
                                    </div>
                                    <!-- Form / Success State -->
                                    @session('contact-success')
                                        <div class="text-center py-6">
                                            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 bg-green-100 text-green-600 rounded-full">
                                                <x-lucide-check class="w-8 h-8" />
                                            </div>
                                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Дякуємо!</h3>
                                            <p class="text-gray-600">{{ session('contact-success') }}</p>
                                            <button @click="open = false" type="button" class="mt-6 w-full py-3 font-semibold text-white bg-blue-700 rounded-2xl hover:bg-blue-800 transition shadow-lg shadow-blue-100">
                                                Закрити
                                            </button>
                                        </div>
                                    @else
                                        <form action="/contact-send" method="POST" class="space-y-5">
                                            @csrf
                                            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                                                <div>
                                                    <label class="block mb-2 text-sm font-medium text-gray-700">Ваше ім’я</label>
                                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Іван" class="w-full px-4 py-3 border @error('name', 'contact') border-red-500 @else border-gray-200 @enderror rounded-2xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                                                    @error('name', 'contact')
                                                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div>
                                                    <label class="block mb-2 text-sm font-medium text-gray-700">Телефон</label>
                                                    <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="+38 (0__) ___-__-__" class="w-full px-4 py-3 border @error('phone', 'contact') border-red-500 @else border-gray-200 @enderror rounded-2xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                                                    @error('phone', 'contact')
                                                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div>
                                                <label class="block mb-2 text-sm font-medium text-gray-700">Email</label>
                                                <input type="email" name="email" value="{{ old('email') }}" placeholder="example@gmail.com" class="w-full px-4 py-3 border @error('email', 'contact') border-red-500 @else border-gray-200 @enderror rounded-2xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                                                @error('email', 'contact')
                                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div>
                                                <label class="block mb-2 text-sm font-medium text-gray-700">Повідомлення</label>
                                                <textarea name="message" rows="5" placeholder="Напишіть ваше повідомлення..." class="w-full px-4 py-3 border @error('message', 'contact') border-red-500 @else border-gray-200 @enderror rounded-2xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">{{ old('message') }}</textarea>
                                                @error('message', 'contact')
                                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <button type="submit" class="w-full py-3 font-semibold text-white transition bg-blue-700 shadow-lg rounded-2xl hover:bg-blue-800">
                                                Відправити повідомлення
                                            </button>
                                        </form>
                                    @endsession
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- MOBILE MENU TRIGGER --}}
                    <button @click="open = !open"
                        class="hidden tg:flex items-center justify-center w-12 h-12 text-white bg-blue-700 transition-all duration-300 rounded-xl shadow-lg shadow-blue-100 hover:scale-105 active:scale-90"
                        :class="open ? 'rotate-90' : ''">
                        <x-lucide-menu x-show="!open" class="w-6 h-6" />
                        <x-lucide-x x-show="open" class="w-6 h-6" />
                    </button>

                </div>


            </div>

        </div>

    </div>

    {{-- NAVIGATION --}}
    <nav class="pb-5 relative">

        <div class="max-w-full mx-auto px-4 lg:px-8">

            <div
                class="flex items-center tg:hidden justify-between h-24 px-5 shadow-xl bg-gradient-to-r from-blue-900 to-blue-700 rounded-3xl shadow-blue-100 relative">

                {{-- Left Desktop --}}
                <div class="hidden xl:flex items-center gap-8">
                    {{-- Catalog --}}
                    <button @click="catalogOpen = !catalogOpen"
                        class="items-center h-16 gap-4 px-8 text-xl font-bold text-gray-900 transition-all bg-yellow-400 flex hover:bg-yellow-300 rounded-2xl">
                        <x-lucide-menu class="w-6 h-6" />
                        <span>Каталог продукції</span>
                        <x-lucide-chevron-down class="w-5 h-5 transition-transform duration-300"
                            x-bind:class="catalogOpen ? 'rotate-180' : ''" />
                    </button>

                    {{-- Desktop Menu --}}
                    <div class="items-center gap-10 text-lg font-semibold text-white flex">
                        <a href="{{ route('main') }}" class="relative transition-colors duration-300 hover:text-yellow-400 {{ Route::is('main') ? 'text-yellow-400 after:absolute after:left-0 after:-bottom-3 after:w-full after:h-1 after:bg-yellow-400 after:rounded-full' : '' }}">Головна</a>
                        <a href="{{ route('about') }}" class="relative transition-colors duration-300 hover:text-yellow-400 {{ Route::is('about') ? 'text-yellow-400 after:absolute after:left-0 after:-bottom-3 after:w-full after:h-1 after:bg-yellow-400 after:rounded-full' : '' }}">Про компанію</a>
                        <a href="{{ route('projects') }}" class="relative transition-colors duration-300 hover:text-yellow-400 {{ Route::is('projects') ? 'text-yellow-400 after:absolute after:left-0 after:-bottom-3 after:w-full after:h-1 after:bg-yellow-400 after:rounded-full' : '' }}">Наші проекти</a>
                        <a href="{{ route('contact') }}" class="relative transition-colors duration-300 hover:text-yellow-400 {{ Route::is('contact') ? 'text-yellow-400 after:absolute after:left-0 after:-bottom-3 after:w-full after:h-1 after:bg-yellow-400 after:rounded-full' : '' }}">Контакти</a>
                        <a href="{{ route('article.index') }}" class="relative transition-colors duration-300 hover:text-yellow-400 {{ Route::is('article.index') ? 'text-yellow-400 after:absolute after:left-0 after:-bottom-3 after:w-full after:h-1 after:bg-yellow-400 after:rounded-full' : '' }}">Новини</a>
                    </div>
                </div>

                {{-- Right Desktop --}}
                <div class="hidden xl:flex items-center gap-4">
                    {{-- Ask --}}
                    <x-modal title="{{ __('other.other_question') }}">
                        <x-slot:button>
                            <button @click="modalOpen=true"
                                class="items-center h-16 gap-3 px-8 font-semibold text-white transition-all duration-300 border flex border-white/30 hover:bg-white hover:text-blue-900 rounded-2xl active:scale-95">
                                <x-lucide-circle-help class="w-5 h-5" />
                                <span>{{ __('other.other_question') }}</span>
                            </button>
                        </x-slot:button>
                        <livewire:order />
                    </x-modal>
                </div>

            </div>

            {{-- CATALOG MEGA MENU --}}
            <div x-show="catalogOpen" @click.outside="catalogOpen = false"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-4"
                class="mt-3 md:mt-5 rounded-[20px] md:rounded-[30px] border border-black/5 bg-white p-4 md:p-6 shadow-2xl absolute left-4 right-4 z-50 lg:static lg:block">
                <div
                    class="mb-4 md:mb-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-slate-100 pb-4 md:pb-5">
                    <div class="w-full text-center sm:text-left">
                        <div class="text-base md:text-lg  font-bold uppercase tracking-wide text-[#2453df]">
                            Каталог продукції
                        </div>
                        <div class="mt-1 text-xl md:text-3xl font-black text-[#0b2f7a]">
                            Категорії та підкатегорії
                        </div>
                    </div>
                </div>

                <div
                    class="grid gap-3 md:gap-5 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 max-h-[60vh] lg:max-h-none overflow-y-auto lg:overflow-visible pr-1 lg:pr-0">
                    @foreach ($catalogSections as $section)
                        <div
                            class="group rounded-[16px] md:rounded-[24px] border border-slate-100 bg-slate-50/70 p-3 md:p-4 transition-all duration-300 hover:-translate-y-1 hover:border-[#2453df]/30 hover:bg-white hover:shadow-xl">
                            <a href="{{ $section['href'] }}" class="flex items-start gap-3">
                                <span
                                    class="flex h-10 w-10 md:h-11 md:w-11 shrink-0 items-center justify-center rounded-xl md:rounded-2xl bg-[#2453df] text-white transition group-hover:bg-yellow-400 group-hover:text-[#0b2f7a]">
                                    <x-lucide-package class="h-4 w-4 md:h-5 md:w-5" />
                                </span>

                                <span class="min-w-0">
                                    <span class="block text-base md:text-lg font-black leading-tight text-[#0b2f7a]">
                                        {{ $section['title'] }}
                                    </span>
                                    <span
                                        class="mt-1 inline-flex items-center gap-1 text-xs md:text-sm font-bold text-[#2453df]">
                                        Перейти
                                        <x-lucide-arrow-up-right class="h-3 w-3 md:h-3.5 md:w-3.5" />
                                    </span>
                                </span>
                            </a>

                            @if (count($section['items']))
                                <div
                                    class="mt-3 md:mt-4 space-y-1 md:space-y-1.5 border-t border-slate-200 pt-3 md:pt-4">
                                    @foreach ($section['items'] as $item)
                                        <a href="{{ $item['href'] }}"
                                            class="flex items-center gap-2 rounded-lg md:rounded-xl px-2.5 md:px-3 py-1.5 md:py-2 text-sm md:text-base font-medium leading-snug text-slate-600 transition hover:bg-[#2453df]/10 hover:text-[#0b2f7a]">
                                            <span class="h-1.5 w-1.5 shrink-0 rounded-full bg-yellow-400"></span>
                                            <span>{{ $item['title'] }}</span>
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- MOBILE MENU --}}
            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-4"
                class="p-6 mt-5 space-y-5 bg-white border border-gray-100 shadow-xl xl:hidden rounded-3xl">

                <a href="{{ route('main') }}"
                    class="block text-lg xs:text-sm font-semibold transition-colors duration-200 {{ Route::is('main') ? 'text-yellow-500' : 'text-blue-900 hover:text-yellow-500' }}">
                    Головна
                </a>

                <div class="rounded-2xl border border-slate-100 bg-slate-50 p-4 xs:p-1">
                    <button @click="mobileCatalogOpen = !mobileCatalogOpen"
                        class="flex w-full items-center justify-between gap-3 xs:gap-0.5 xs:text-sm text-left text-lg font-black text-blue-900">
                        <span class="flex items-center gap-3 xs:gap-0.5">
                            <span
                                class="flex h-10 w-10 items-center justify-center rounded-xl xs:hidden bg-yellow-400 text-blue-900">
                                <x-lucide-menu class="h-5 w-5" />
                            </span>
                            Каталог продукції
                        </span>
                        <x-lucide-chevron-down class="h-5 w-5 transition-transform duration-300"
                            x-bind:class="mobileCatalogOpen ? 'rotate-180' : ''" />
                    </button>

                    <div x-show="mobileCatalogOpen" x-transition class="mt-4 space-y-4">
                        @foreach ($catalogSections as $section)
                            <div class="rounded-2xl bg-white p-4 shadow-sm">
                                <a href="{{ $section['href'] }}"
                                    class="block text-lg xs:text-sm font-black leading-tight text-[#0b2f7a]">
                                    {{ $section['title'] }}
                                </a>

                                @if (count($section['items']))
                                    <div class="mt-3 space-y-1.5">
                                        @foreach ($section['items'] as $item)
                                            <a href="{{ $item['href'] }}"
                                                class="flex items-center gap-2 xs:text-xs xs:px-1 xs:py-1 rounded-xl px-3 py-2 text-base font-medium text-slate-600 hover:bg-[#2453df]/10 hover:text-[#0b2f7a]">
                                                <span class="h-1.5 w-1.5 shrink-0 rounded-full bg-yellow-400"></span>
                                                <span>{{ $item['title'] }}</span>
                                            </a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>

                <a href="{{ route('about') }}"
                    class="block text-lg font-semibold transition-colors xs:text-sm duration-200 {{ Route::is('about') ? 'text-yellow-500' : 'text-blue-900 hover:text-yellow-500' }}">
                    Про нас
                </a>

                <a href="{{ route('projects') }}"
                    class="block text-lg font-semibold transition-colors xs:text-sm duration-200 {{ Route::is('projects') ? 'text-yellow-500' : 'text-blue-900 hover:text-yellow-500' }}">
                    Наші проекти
                </a>

                <a href="{{ route('shipping') }}"
                    class="block text-lg font-semibold transition-colors xs:text-sm duration-200 {{ Route::is('shipping') ? 'text-yellow-500' : 'text-blue-900 hover:text-yellow-500' }}">
                    Доставка і оплата
                </a>

                <a href="{{ route('contact') }}"
                    class="block text-lg font-semibold transition-colors xs:text-sm duration-200 {{ Route::is('contact') ? 'text-yellow-500' : 'text-blue-900 hover:text-yellow-500' }}">
                    Контакти
                </a>

                <a href="{{ route('article.index') }}"
                    class="block text-lg font-semibold transition-colors xs:text-sm duration-200 {{ Route::is('article.index') ? 'text-yellow-500' : 'text-blue-900 hover:text-yellow-500' }}">
                    Блог
                </a>

            </div>

        </div>

    </nav>




</header>
