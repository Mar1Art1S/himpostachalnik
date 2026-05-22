@extends('layouts.base')
@section('title', __('Хімічна сировина'))
@section('meta_description',
    __('Хімічна сировина для виробництва поліуретану та пінополіуретану, лакофарбових
    матеріалів, клеїв і гідроізоляційних покриттів, що застосовується в будівництві, меблевій та автомобільній
    промисловості, забезпечуючи стійкість, ізоляцію та довговічність матеріалів'))
@section('meta_keywords',
    __('хімічна сировина, поліуретан, пінополіуретан, лакофарбові матеріали, клейові матеріали,
    гідроізоляція, поліуретанові матеріали, пінополіуретанові продукты, лакофарбові покриття, клеї та герметики, матеріали
    для гідроізоляції'))
@section('og_title', __('Хімічна сировина'))
@section('og_description',
    __('Хімічна сировина для виробництва поліуретану та пінополіуретану, лакофарбових матеріалів,
    клеїв і гідроізоляційних покриттів, що застосовується в будівництві, меблевій та автомобільній промисловості,
    забезпечуючи стійкість, ізоляцію та довговічність матеріалів'))
@section('og_image', asset('img/3_main/BGr.jpg'))
@section('content')
    <x-section :fullWidth="true" class="max-w-full my-0 overflow-hidden ">
        <div class="w-full overflow-hidden bg-[#eef2fb]">
            <!-- MAIN GRID -->
            <div class="grid grid-cols-2 tg:grid-cols-1 items-stretch">
                <!-- LEFT SIDE -->
                <div class="flex items-center px-24 lf:px-16 tg:px-10 md:px-8 sm:px-6 py-16 tg:py-10">
                    <div class="w-full max-w-3xl">
                        <!-- TITLE -->
                        <h1
                            class="text-[78px] lf:text-[64px] tg:text-[56px] sm:text-[42px] leading-[0.95]
                    font-black uppercase tracking-[-2px] text-[#0b2f7a]">

                            {{ __('mes.chemical_raw_materials') }}
                        </h1>

                        <!-- SUBTITLE -->
                        <div class="mt-5 text-2xl tg:text-xl sm:text-lg font-bold uppercase text-[#353535]">
                            {{ __('mes.production_and_supply') }}
                        </div>

                        <!-- FEATURES -->
                        <div class="grid grid-cols-4 tg:grid-cols-2 sm:grid-cols-1 gap-6 mt-14">

                            <!-- CARD -->

                            <x-main.card-icon
                                :title="__('Висока якість')"
                                :text="__('Сертифікована продукція від перевірених виробників')">
                                <x-slot:icon>
                                    <x-lucide-flask-conical class="w-8 h-8 text-white" />
                                </x-slot:icon>
                            </x-main.card-icon>

                            <!-- CARD -->
                            <x-main.card-icon
                                :title="__('Надійність')"
                                :text="__('Стабільні поставки
                                    та виконання зобов\'язань')">
                                <x-slot:icon>
                                    <x-lucide-shield-check class="w-8 h-8 text-white" />
                                </x-slot:icon>
                            </x-main.card-icon>
                            <!-- CARD -->
                            <x-main.card-icon
                                :title="__('Швидка доставка')"
                                :text="__('Оперативна доставка по всій Україні')">
                                <x-slot:icon>
                                    <x-lucide-truck class="w-8 h-8 text-white" />
                                </x-slot:icon>
                            </x-main.card-icon>

                            <!-- CARD -->
                            <x-main.card-icon
                                :title="__('Професійна підтримка')"
                                :text="__('Консультації та допомога на кожному етапі')">
                                <x-slot:icon>
                                    <x-lucide-headset class="w-8 h-8 text-white" />
                                </x-slot:icon>
                            </x-main.card-icon>
                        </div>


                        <!-- BUTTON -->
                        <div class="mt-14">

                            <button
                                class="group inline-flex items-center gap-4
                                    rounded-2xl border-2 border-[#2453df]
                                    px-8 py-4 font-bold uppercase tracking-wide
                                    text-[#2453df]
                                    transition-all duration-300
                                    hover:bg-[#2453df] hover:text-white">

                                <span>
                                    Дізнатись більше
                                </span>

                                <x-lucide-arrow-right
                                    class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" />
                            </button>
                        </div>
                    </div>
                </div>

                <!-- RIGHT SIDE -->
                <div class="flex flex-col h-full bg-[#0a3186] overflow-hidden">

                    <!-- TOP PART: IMAGE -->
                    <div class="relative flex-1 min-h-[400px] tg:min-h-[300px] sm:min-h-[250px]">
                        <img src="{{ asset('img/3_main/bd-info.png') }}" alt="Chemical"
                            class="absolute inset-0 w-full h-full object-cover object-center">
                        <div class="absolute inset-0 bg-[#082c7a]/15"></div>
                    </div>

                    <!-- BOTTOM PART: FULL WIDTH STATS -->
                    <div class="bg-[#0a3186] border-t border-white/10">

                        <div class="max-w-[1600px] mx-auto p-12 tg:p-10 md:p-8 sm:p-6">

                            <div class="flex flex-row tg:flex-col gap-16 tg:gap-8 w-full justify-between">

                                <!-- LEFT DATA GROUP -->
                                <div class="flex-1 w-full">
                                    <div class="grid grid-cols-2 xs:grid-cols-1 gap-8 sm:gap-6">
                                        <!-- ITEM -->
                                        <x-main.card-item
                                            :title="__('25+')"
                                            :text="__('років досвіду')">
                                            <x-slot:icon>
                                                <x-lucide-briefcase-business class="w-6 h-6 sm:w-7 sm:h-7 text-[#f0b51d]" />
                                            </x-slot:icon>
                                        </x-main.card-item>

                                        <!-- ITEM -->
                                        <x-main.card-item
                                            :title="__('100+')"
                                            :text="__('позицій у каталозі')">
                                            <x-slot:icon>
                                                <x-lucide-package-search class="w-6 h-6 sm:w-7 sm:h-7 text-[#f0b51d]" />
                                            </x-slot:icon>
                                        </x-main.card-item>

                                    </div>
                                </div>

                                <!-- DIVIDER -->
                                <div class="hidden tg:block h-px w-full bg-white/10 my-2"></div>
                                <div class="tg:hidden w-px bg-white/10 self-stretch"></div>

                                <!-- RIGHT DATA GROUP -->
                                <div class="flex-1 w-full">
                                    <div class="grid grid-cols-2 xs:grid-cols-1 gap-8 sm:gap-6">
                                        <!-- ITEM -->
                                        <x-main.card-item
                                            :title="__('1000+')"
                                            :text="__('задоволених клієнтів')">
                                            <x-slot:icon>
                                                <x-lucide-handshake class="w-6 h-6 sm:w-7 sm:h-7 text-[#f0b51d]" />
                                            </x-slot:icon>
                                        </x-main.card-item>

                                        <!-- ITEM -->
                                        <x-main.card-item
                                            :title="__('Якісна')"
                                            :text="__('продукція')">
                                            <x-slot:icon>
                                                <x-lucide-badge-check class="w-6 h-6 sm:w-7 sm:h-7 text-[#f0b51d]" />
                                            </x-slot:icon>
                                        </x-main.card-item>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </x-section>


    <x-section :fullWidth="true" class="px-10 sf:px-5">

        <x-decor.card>
            <x-category title=" {{ __('mes.category_title_ppy') }}" description="{{ __('mes.category_description_ppy') }}"
                image="{{ asset('img/categories/001.png') }}" link="{{ route('ppy_serovine') }}" />
            <x-category title="{{ __('mes.category_title_py') }}" description="{{ __('mes.category_description_py') }}"
                image="{{ asset('img/categories/002.png') }}" link="{{ route('py_serovine') }}" />
            <x-category title="{{ __('mes.category_title_py_stone_carpet') }}"
                description="{{ __('mes.category_description_py_stone_carpet') }} "
                image="{{ asset('img/categories/003.png') }}" link="{{ route('py_kilima') }}" />
            <x-category title="{{ __('mes.category_title_py_glue') }}"
                description="{{ __('mes.category_description_py_glue') }}"
                image="{{ asset('img/categories/004.png') }}" link="{{ route('py_klei') }}" />
            <x-category title="{{ __('mes.category_title_py_paint') }}"
                description="{{ __('mes.category_description_py_paint') }}"
                image="{{ asset('img/categories/007.png') }}" link="{{ route('py_lak_prom') }}" />
            <x-category title="{{ __('mes.category_title_py_foundry') }}"
                description="{{ __('mes.category_description_py_foundry') }}"
                image="{{ asset('img/categories/012.png') }}" link="{{ route('py_pol') }}" />
            <x-category title="{{ __('mes.category_title_py_wet_stone_effect') }}"
                description="{{ __('mes.category_description_py_wet_stone_effect') }}"
                image="{{ asset('img/categories/008.png') }}" link="{{ route('py_emk') }}" />
            <x-category title="{{ __('mes.category_title_materials_waterproofing') }}"
                description="{{ __('mes.category_description_materials_waterproofing') }}"
                image="{{ asset('img/categories/009.png') }}" link="{{ route('py_gidro') }}" />
        </x-decor.card>
    </x-section>

    <x-section :fullWidth="true" class="px-10 md:px-6 sm:px-4">
        <section class="bg-[#1E3A9A] rounded-[32px] overflow-hidden">
            <div class="grid grid-cols-2 md:grid-cols-1 min-h-[520px] md:min-h-0">

                <!-- Image Block -->
                <div class="relative h-full md:h-[300px] sm:h-[220px]">
                    <img src="{{ asset('img/block/Завод__002.png') }}" alt="Про компанію"
                        class="absolute inset-0 w-full h-full object-cover">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-[#1E3A9A]/40"></div>

                    <!-- Floating Card -->
                    <div class="absolute left-6 top-6 xs:left-4 xs:top-4">
                        <div class="flex items-center gap-4 bg-[#FFC800] px-8 py-5 xs:px-5 xs:py-3.5 rounded-[24px] xs:rounded-2xl shadow-2xl">
                            <div class="flex items-center justify-center w-14 h-14 xs:w-10 xs:h-10 rounded-xl xs:rounded-lg bg-[#1E3A9A] text-[#FFC800]">
                                <x-lucide-factory class="w-7 h-7 xs:w-5 xs:h-5" />
                            </div>
                            <div>
                                <p class="text-sm font-medium text-[#1E3A9A]/80 uppercase tracking-wide">
                                    {{ __('Про компанію') }}

                                </p>
                                <h3 class="text-2xl xs:text-lg font-bold text-[#111827]">
                                    {{ __('Надійний виробник') }}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Block -->
                <div class="relative flex items-center bg-[#1E3A9A] px-16 tg:px-10 md:px-8 sm:px-6 py-12 md:py-10">

                    <!-- Decorative Circle -->
                    <div class="absolute top-0 right-0 w-72 h-72 bg-[#FFC800]/10 rounded-full blur-3xl"></div>

                    <div class="relative z-10">

                        <!-- Label -->
                        <div class="inline-flex items-center gap-3 bg-[#FFC800] px-6 py-3 rounded-2xl mb-8">

                            <x-lucide-building-2 class="w-5 h-5 text-[#1E3A9A]" />

                            <span class="text-[#1E3A9A] font-bold text-sm uppercase tracking-wider">
                                {{ __('Хімічне виробництво') }}

                            </span>

                        </div>

                        <!-- Title -->
                        <h2 class="text-4xl tg:text-3xl sm:text-2xl font-black text-white leading-tight mb-4">
                            Сучасні рішення
                            <span class="text-[#FFC800]">
                                для промисловості
                            </span>
                        </h2>

                        <!-- Description -->
                        <p class="text-lg leading-8 text-white  mb-6 max-w-xl">
                            Ми спеціалізуємося на постачанні хімічної сировини, компонентів
                            для поліуретанів та промислових матеріалів для підприємств по всій Україні.
                            Забезпечуємо стабільну якість, швидку логістику та технічну підтримку.
                        </p>

                        <!-- Features -->
                        <div class="grid grid-cols-2 sm:grid-cols-1 gap-5 mb-6">

                            <div class="flex items-start gap-4">

                                <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-[#FFC800] shrink-0">
                                    <x-lucide-shield-check class="w-6 h-6 text-[#1E3A9A]" />
                                </div>

                                <div>
                                    <h4 class="text-white font-bold text-lg mb-1">
                                        Контроль якості
                                    </h4>

                                    <p class="text-blue-100 text-sm">
                                        Перевірена сировина та сертифікована продукція.
                                    </p>
                                </div>

                            </div>

                            <div class="flex items-start gap-4">

                                <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-[#FFC800] shrink-0">
                                    <x-lucide-truck class="w-6 h-6 text-[#1E3A9A]" />
                                </div>

                                <div>
                                    <h4 class="text-white font-bold text-lg mb-1">
                                        Швидка доставка
                                    </h4>

                                    <p class="text-blue-100 text-sm">
                                        Оперативне відвантаження по Україні.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </x-section>
    <x-section :fullWidth="true" class="px-10 md:px-6 sm:px-4">

        <section class="py-20 bg-[#F4F7FB] overflow-hidden">
            <div class="container mx-auto px-4">

                <!-- Header -->
                <div class="text-center max-w-3xl mx-auto mb-14">

                    <span
                        class="inline-flex items-center gap-2 bg-[#1E3A9A]/10 text-[#1E3A9A] font-bold px-5 py-2 rounded-full mb-5">

                     <x-lucide-briefcase-business class="w-5 h-5" />

    Наші напрямки

</span>

                    <h2 class="text-4xl tg:text-3xl sm:text-2xl font-black text-[#1E3A9A] mb-5">
                        Галузеві проекти
                    </h2>

                    <p class="text-gray-600 text-lg leading-8">
                        Спеціалізовані retail та галузеві проекти компанії Хімпостачальник
                        для окремих напрямків продукції та промислових рішень.
                    </p>
                </div>

                <!-- Cards -->
                <div class="grid grid-cols-2 md:grid-cols-1 gap-8">

                    <!-- Card 1 -->
                    <div
                        class="group relative overflow-hidden rounded-[32px] min-h-[420px] shadow-xl border border-white/40">

                        <!-- Background Image -->
                        <img src="{{ asset('img/block/ТехПолімерМакркет.png') }}" alt="TechPolymers"
                            class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-700">

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-r from-[#0F172A]/90 via-[#0F172A]/70 to-[#0F172A]/20">
                        </div>

                        <!-- Content -->
                        <div class="relative z-10 flex flex-col justify-between h-full p-10 sm:p-6">

                            <div>

                                <!-- Logo -->
                                <div
                                    class="inline-flex items-center justify-center w-42 h-16 p-1 rounded-2xl bg-blue-900 backdrop-blur mb-6">

                                    <img src="{{ asset('img/2_logo/Logo_new.png') }}" alt="Логотип"
                                         class="object-contain w-full ">

                                </div>

                                <!-- Title -->
                                <h3 class="text-3xl sm:text-2.5xl font-black text-white mb-2">
                                    ТехПолімер Маркет
                                </h3>

                                <p class="text-[#FFC800] font-bold text-lg mb-6">
                                    Технічні полімери та промислові матеріали
                                </p>

                                <!-- Description -->
                                <p class="text-white/90 leading-8 max-w-md">
                                    Спеціалізований retail та B2B-проект для технічних полімерів,
                                    компаундів та промислових матеріалів для підприємств і виробництв.
                                </p>
                            </div>

                            <!-- Bottom -->
                            <div class="flex flex-wrap items-center gap-4 mt-10">

                                <a href="https://techpolymersmarket.com/"
                                   class="inline-flex items-center gap-3 bg-[#FFC800] hover:bg-yellow-400 transition px-7 py-4 rounded-2xl font-bold text-[#1E3A9A]">

                                    <x-lucide-arrow-up-right class="w-5 h-5" />

                                    Перейти на сайт

                                </a>

                                <div class="flex items-center gap-2 text-white/90 font-medium">
                                    <i data-lucide="globe" class="w-5 h-5 text-[#FFC800]"></i>
                                    techpolymersmarket.com
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="group relative overflow-hidden rounded-[32px] min-h-[420px] shadow-xl border border-white/40">

                        <!-- Background Image -->
                        <img src="{{ asset('img/block/Хімекселен__002.png') }}" alt="Хімекселен"
                            class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-700">

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-r from-[#1E1B16]/90 via-[#1E1B16]/60 to-[#1E1B16]/20">
                        </div>

                        <!-- Content -->
                        <div class="relative z-10 flex flex-col justify-between h-full p-10 sm:p-6">

                            <div>

                                <!-- Logo -->
                                <div
                                    class="inline-flex items-center justify-center w-42 h-16 p-1 rounded-2xl bg-blue-900 backdrop-blur mb-6">

                                    <img src="{{ asset('img/2_logo/Logo_new.png') }}" alt="Логотип"
                                         class="object-contain w-full ">

                                </div>

                                <!-- Title -->
                                <h3 class="text-3xl sm:text-2.5xl font-black text-white mb-2">
                                    Хімекселен
                                </h3>

                                <p class="text-[#FFC800] font-bold text-lg mb-6">
                                    Товари для бджільництва
                                </p>

                                <!-- Description -->
                                <p class="text-white/90 leading-8 max-w-md">
                                    Спеціалізований retail-проект для пасічників та господарств.
                                    Продукція для догляду за пасіками, обладнання та супутні товари.
                                </p>
                            </div>

                            <!-- Bottom -->
                            <div class="flex flex-wrap items-center gap-4 mt-10">

                                <a href="https://bee.lg.ua/"
                                   class="inline-flex items-center gap-3 bg-[#FFC800] hover:bg-yellow-400 transition px-7 py-4 rounded-2xl font-bold text-[#1E3A9A]">

                                    <x-lucide-arrow-up-right class="w-5 h-5" />

                                    Перейти на сайт

                                </a>

                                <div class="flex items-center gap-2 text-white/90 font-medium">
                                    <i data-lucide="globe" class="w-5 h-5 text-[#FFC800]"></i>
                                    bee.lg.ua
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


    </x-section>

    <x-section :fullWidth="true" class="px-10 md:px-6 sm:px-4">
        <section class="overflow-hidden rounded-[36px] bg-[#FFD400]">

            <!-- TOP -->
            <div class="relative px-6 py-14 lg:px-16">
                <div class="grid grid-cols-[1.3fr_0.9fr] md:grid-cols-1 gap-10 items-center">

                    <!-- LEFT -->
                    <div>

                        <!-- Title Row -->
                        <div class="flex sm:flex-col items-start gap-5 mb-8">

                            <!-- Icon -->
                            <div
                                class="flex items-center justify-center w-20 h-20 sm:w-16 sm:h-16 rounded-[24px] sm:rounded-2xl bg-[#0B3B92] shadow-xl shrink-0">

                                <x-lucide-building-2 class="w-10 h-10 sm:w-8 sm:h-8 text-white" />

                            </div>

                            <!-- Text -->
                            <div>
                                <h2 class="text-3xl tg:text-2.5xl sm:text-2xl font-black text-[#0B0F1A] leading-tight mb-4">
                                    Наші проекти —
                                    <span class="text-[#0B3B92]">
                                        екосистема спеціалізованих рішень
                                    </span>
                                </h2>

                                <p class="text-[#111827] text-lg leading-8 max-w-3xl">
                                    Хімпостачальник об’єднує виробництво, оптові поставки
                                    та спеціалізовані retail-напрямки для різних галузей
                                    промисловості та професійних ринків.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        </section>
    </x-section>

    <x-section :fullWidth="true" class="px-10 md:px-6 sm:px-4">

        <section class="py-20 bg-[#F3F5F9]">
            <div class="container mx-auto px-4">

                <!-- Header -->
                <div class="flex items-center justify-between mb-12">

                    <div>
                        <span
                            class="inline-flex items-center gap-2 bg-[#0B3B92]/10 text-[#0B3B92] px-5 py-2 rounded-full font-bold mb-4">
                            <i data-lucide="briefcase-business" class="w-5 h-5"></i>
                            Retail & B2B
                        </span>

                        <h2 class="text-4xl tg:text-3xl sm:text-2xl font-black text-[#001B4D]">
                            Наші новини
                        </h2>
                    </div>

                    <a href="#"
                        class="hidden md:inline-flex items-center gap-2 text-[#0B3B92] font-bold hover:gap-4 transition-all">
                        Всі проекти
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                </div>

                <!-- Projects -->
                <div class="grid grid-cols-3 tg:grid-cols-2 sf:grid-cols-1 gap-8">

                    @foreach($latestArticles as $article)
                        <!-- CARD -->
                        <article
                            class="group bg-white rounded-[30px] overflow-hidden shadow-lg hover:-translate-y-2 transition duration-500 border border-black/5 flex flex-col h-full">

                            <!-- TOP -->
                            <div class="relative h-[280px] overflow-hidden">

                                <!-- Blue Line -->
                                <div class="absolute top-0 left-0 w-full h-3 bg-[#0B3B92] z-20"></div>

                                <!-- Image -->
                                <img src="{{ Storage::url($article->preview_image) }}" alt="{{ $article->title }}"
                                    class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">

                                <!-- Overlay -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-[#001B4D]/95 via-[#001B4D]/50 to-transparent">
                                </div>

                                <!-- Label -->
                                <div class="absolute top-5 left-5 z-20">
                                    <span
                                        class="inline-flex items-center gap-2 bg-[#FFD400] text-[#001B4D] px-4 py-2 rounded-xl text-sm font-black shadow-lg">
                                        <i data-lucide="tag" class="w-4 h-4"></i>
                                        {{ $article->category->title }}
                                    </span>
                                </div>

                                <!-- Content -->
                                <div class="relative z-10 flex flex-col justify-end h-full p-6">

                                    <div
                                        class="flex items-center justify-center w-16 h-16 rounded-2xl bg-white/90 backdrop-blur mb-5 shadow-xl">
                                        <i data-lucide="newspaper" class="w-8 h-8 text-[#0B3B92]"></i>
                                    </div>

                                    <h3 class="text-2xl sm:text-xl font-black text-white mb-2 line-clamp-2 leading-tight">
                                        {{ $article->title }}
                                    </h3>

                                    <p class="text-[#FFD400] font-bold text-sm">
                                        {{ $article->category->title }}
                                    </p>
                                </div>
                            </div>

                            <!-- BOTTOM -->
                            <div class="p-7 flex flex-col flex-1 justify-between">

                                <div>
                                    <!-- Info -->
                                    <div class="flex items-center gap-3 text-gray-500 text-sm mb-5">
                                        <i data-lucide="calendar" class="w-4 h-4 text-[#0B3B92]"></i>
                                        {{ $article->formatted_published_at }}
                                    </div>

                                    <!-- Text -->
                                    <p class="text-gray-600 leading-8 mb-8 line-clamp-3">
                                        {{ $article->preview_text }}
                                    </p>
                                </div>

                                <!-- Footer -->
                                <div class="flex items-center justify-between">

                                    <a href="{{ route('article.show', [$article->category->slug, $article->slug]) }}"
                                        class="inline-flex items-center gap-2 text-[#0B3B92] font-black hover:gap-4 transition-all">
                                        Детальніше
                                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                                    </a>

                                    <a href="{{ route('article.show', [$article->category->slug, $article->slug]) }}"
                                        class="flex items-center justify-center w-12 h-12 rounded-xl bg-[#F3F5F9] group-hover:bg-[#FFD400] transition">
                                        <i data-lucide="external-link" class="w-5 h-5 text-[#0B3B92]"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach

                </div>
            </div>
        </section>



    </x-section>
@endsection
