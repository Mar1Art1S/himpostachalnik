@extends('layouts.base')
@section('title', __('main.meta_title'))
@section('meta_description', __('main.meta_description'))
@section('meta_keywords', __('main.meta_keywords'))
@section('og_title', __('main.meta_title'))
@section('og_description', __('main.meta_description'))
@section('og_image', asset('img/3_main/BGr.jpg'))
@section('content')
    <x-section :fullWidth="true" class="max-w-full my-0 overflow-hidden ">
        <div class="w-full overflow-hidden bg-[#eef2fb]">
            <!-- MAIN GRID -->
            <div class="home-hero-grid grid grid-cols-2 tg:grid-cols-1 items-stretch">
                <!-- LEFT SIDE -->
                <div class="home-hero-copy flex items-center px-24 lf:px-16 tg:px-10 md:px-8 sm:px-6 py-16 tg:py-10">
                    <div class="home-hero-content w-full max-w-3xl">
                        <!-- TITLE -->
                        <h1
                            class="home-hero-title text-[78px] lf:text-[64px] tg:text-[56px] sm:text-[42px] leading-[0.95]
                    font-black uppercase tracking-[-2px] text-[#0b2f7a]">

                            {{ __('mes.chemical_raw_materials') }}
                        </h1>

                        <!-- SUBTITLE -->
                        <div class="home-hero-subtitle mt-5 text-2xl tg:text-xl sm:text-lg font-bold uppercase text-[#353535]">
                            {{ __('mes.production_and_supply') }}
                        </div>

                        <!-- FEATURES -->
                        <div class="home-benefits-grid grid grid-cols-4 tg:grid-cols-2 sm:grid-cols-1 gap-6 mt-14">

                            <!-- CARD -->
                            <x-main.card-icon
                                :title="__('main.feat_quality_title')"
                                :text="__('main.feat_quality_text')">
                                <x-slot:icon>
                                    <x-lucide-flask-conical class="w-8 h-8 text-white" />
                                </x-slot:icon>
                            </x-main.card-icon>

                            <!-- CARD -->
                            <x-main.card-icon
                                :title="__('main.feat_reliability_title')"
                                :text="__('main.feat_reliability_text')">
                                <x-slot:icon>
                                    <x-lucide-shield-check class="w-8 h-8 text-white" />
                                </x-slot:icon>
                            </x-main.card-icon>
                            <!-- CARD -->
                            <x-main.card-icon
                                :title="__('main.feat_delivery_title')"
                                :text="__('main.feat_delivery_text')">
                                <x-slot:icon>
                                    <x-lucide-truck class="w-8 h-8 text-white" />
                                </x-slot:icon>
                            </x-main.card-icon>

                            <!-- CARD -->
                            <x-main.card-icon
                                :title="__('main.feat_support_title')"
                                :text="__('main.feat_support_text')">
                                <x-slot:icon>
                                    <x-lucide-headset class="w-8 h-8 text-white" />
                                </x-slot:icon>
                            </x-main.card-icon>
                        </div>


                        <!-- BUTTON -->
                        <div class="mt-14">

                            <a href="{{ route('about') }}"
                                class="group inline-flex items-center gap-4
                                    rounded-2xl border-2 border-[#2453df]
                                    px-8 py-4 font-bold uppercase tracking-wide
                                    text-[#2453df]
                                    transition-all duration-300
                                    hover:bg-[#2453df] hover:text-white">

                                <span>
                                    {{ __('main.learn_more') }}
                                </span>

                                <x-lucide-arrow-right
                                    class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" />
                            </a>
                        </div>
                    </div>
                </div>

                <!-- RIGHT SIDE -->
                <div class="flex flex-col h-full bg-[#0a3186] overflow-hidden">

                    <!-- TOP PART: IMAGE -->
                    <div class="relative flex-1 min-h-[400px] tg:min-h-[300px] sm:min-h-[250px]">
                        <img src="{{ asset('img/3_main/bd-info.png') }}" alt="Chemical"
                            class="home-hero-media absolute inset-0 w-full h-full object-cover object-center">
                        <div class="absolute inset-0 bg-[#082c7a]/15"></div>
                    </div>

                    <!-- BOTTOM PART: FULL WIDTH STATS -->
                    <div class="bg-[#0a3186] border-t border-white/10">

                        <div class="max-w-[1600px] mx-auto p-12 tg:p-10 md:p-8 sm:p-6">

                            <div class="home-stats-layout flex flex-row tg:flex-col gap-16 tg:gap-8 w-full justify-between">

                                <!-- LEFT DATA GROUP -->
                                <div class="flex-1 w-full">
                                    <div class="home-stat-grid grid grid-cols-2 xs:grid-cols-1 gap-8 sm:gap-6">
                                        <!-- ITEM -->
                                        <x-main.card-item
                                            title="25+"
                                            :text="__('main.stat_exp')">
                                            <x-slot:icon>
                                                <x-lucide-briefcase-business class="w-6 h-6 sm:w-7 sm:h-7 text-[#f0b51d]" />
                                            </x-slot:icon>
                                        </x-main.card-item>

                                        <!-- ITEM -->
                                        <x-main.card-item
                                            title="100+"
                                            :text="__('main.stat_catalog')">
                                            <x-slot:icon>
                                                <x-lucide-package-search class="w-6 h-6 sm:w-7 sm:h-7 text-[#f0b51d]" />
                                            </x-slot:icon>
                                        </x-main.card-item>

                                    </div>
                                </div>

                                <!-- DIVIDER -->
                                <div class="home-stats-divider-horizontal hidden tg:block h-px w-full bg-white/10 my-2"></div>
                                <div class="home-stats-divider-vertical tg:hidden w-px bg-white/10 self-stretch"></div>

                                <!-- RIGHT DATA GROUP -->
                                <div class="flex-1 w-full">
                                    <div class="home-stat-grid grid grid-cols-2 xs:grid-cols-1 gap-8 sm:gap-6">
                                        <!-- ITEM -->
                                        <x-main.card-item
                                            title="1000+"
                                            :text="__('main.stat_clients')">
                                            <x-slot:icon>
                                                <x-lucide-handshake class="w-6 h-6 sm:w-7 sm:h-7 text-[#f0b51d]" />
                                            </x-slot:icon>
                                        </x-main.card-item>

                                        <!-- ITEM -->
                                        <x-main.card-item
                                            :title="__('main.stat_quality_title')"
                                            :text="__('main.stat_quality_text')">
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


    <x-section :fullWidth="true" class="home-section-padding px-10 sf:px-5">

        <x-decor.card gridClass="home-category-grid">
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

    <x-section :fullWidth="true" class="home-section-padding px-10 md:px-6 sm:px-4">
        <section class="bg-[#1E3A9A] rounded-[32px] overflow-hidden">
            <div class="grid grid-cols-2 md:grid-cols-1 min-h-[520px] md:min-h-0">

                <!-- Image Block -->
                <div class="relative h-full md:h-[300px] sm:h-[220px]">
                    <img src="{{ asset('img/block/Завод__002.png') }}" alt="{{ __('main.about_company_badge') }}"
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
                                    {{ __('main.about_company_badge') }}
                                </p>
                                <h3 class="text-2xl xs:text-lg font-bold text-[#111827]">
                                    {{ __('main.about_reliable_producer') }}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Block -->
                <div class="home-about-copy relative flex items-center bg-[#1E3A9A] px-16 tg:px-10 md:px-8 sm:px-6 py-12 md:py-10">

                    <!-- Decorative Circle -->
                    <div class="absolute top-0 right-0 w-72 h-72 bg-[#FFC800]/10 rounded-full blur-3xl"></div>

                    <div class="relative z-10">

                        <!-- Label -->
                        <div class="inline-flex items-center gap-3 bg-[#FFC800] px-6 py-3 rounded-2xl mb-8">

                            <x-lucide-building-2 class="w-5 h-5 text-[#1E3A9A]" />

                            <span class="text-[#1E3A9A] font-bold text-sm uppercase tracking-wider">
                                {{ __('main.about_production_badge') }}
                            </span>

                        </div>

                        <!-- Title -->
                        <h2 class="text-4xl tg:text-3xl sm:text-2xl font-black text-white leading-tight mb-4">
                            {{ __('main.about_solutions_title') }}
                            <span class="text-[#FFC800]">
                                {{ __('main.about_solutions_highlight') }}
                            </span>
                        </h2>

                        <!-- Description -->
                        <p class="text-lg leading-8 text-white  mb-6 max-w-xl">
                            {{ __('main.about_desc') }}
                        </p>

                        <!-- Features -->
                        <div class="grid grid-cols-2 sm:grid-cols-1 gap-5 mb-6">

                            <div class="flex items-start gap-4">

                                <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-[#FFC800] shrink-0">
                                    <x-lucide-shield-check class="w-6 h-6 text-[#1E3A9A]" />
                                </div>

                                <div>
                                    <h4 class="text-white font-bold text-lg mb-1">
                                        {{ __('main.about_qc_title') }}
                                    </h4>

                                    <p class="text-blue-100 text-sm">
                                        {{ __('main.about_qc_text') }}
                                    </p>
                                </div>

                            </div>

                            <div class="flex items-start gap-4">

                                <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-[#FFC800] shrink-0">
                                    <x-lucide-truck class="w-6 h-6 text-[#1E3A9A]" />
                                </div>

                                <div>
                                    <h4 class="text-white font-bold text-lg mb-1">
                                        {{ __('main.about_delivery_title') }}
                                    </h4>

                                    <p class="text-blue-100 text-sm">
                                        {{ __('main.about_delivery_text') }}
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </x-section>
    <x-section :fullWidth="true" class="home-section-padding px-10 md:px-6 sm:px-4">

        <section class="overflow-hidden rounded-[32px] bg-[#F4F7FB] py-20 tg:py-16 sm:rounded-[24px] sm:py-12">
            <div class="container mx-auto max-w-[1600px] px-8 tg:px-6 sm:px-4">

                <!-- Header -->
                <div class="mx-auto mb-14 max-w-3xl text-center sm:mb-10">

                    <span
                        class="mb-5 inline-flex items-center gap-2 rounded-full bg-[#1E3A9A]/10 px-5 py-2 font-bold text-[#1E3A9A] sm:px-4 sm:text-sm">

                     <x-lucide-briefcase-business class="w-5 h-5" />

                        {{ __('main.directions_badge') }}

                    </span>

                    <h2 class="mb-5 text-4xl font-black text-[#1E3A9A] tg:text-3xl sm:text-2xl">
                        {{ __('main.directions_title') }}
                    </h2>

                    <p class="text-lg leading-8 text-gray-600 sm:text-base sm:leading-7">
                        {{ __('main.directions_lead') }}
                    </p>
                </div>

                <!-- Cards -->
                <div class="grid grid-cols-2 gap-8 md:grid-cols-1 sm:gap-6">

                    <!-- Card 1 -->
                    <article
                        class="group relative min-h-[520px] overflow-hidden rounded-[32px] border border-white/40 shadow-xl md:min-h-[500px] sm:min-h-[560px] sm:rounded-[24px] xs:min-h-[600px]">

                        <!-- Background Image -->
                        <img src="{{ asset('img/block/ТехПолімерМакркет.png') }}"
                            alt="{{ __('main.project_tech_brand') }}"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-700 group-hover:scale-105">

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-r from-[#0F172A]/95 via-[#0F172A]/75 to-[#0F172A]/25 sm:bg-gradient-to-b sm:from-[#0F172A]/95 sm:via-[#0F172A]/80 sm:to-[#0F172A]/55">
                        </div>

                        <!-- Content -->
                        <div class="relative z-10 flex min-h-[520px] flex-col justify-between p-10 md:min-h-[500px] sm:min-h-[560px] sm:p-6 xs:min-h-[600px] xs:p-5">

                            <div>

                                <!-- Logo -->
                                <div
                                    class="mb-6 inline-flex h-16 w-42 items-center justify-center rounded-2xl bg-blue-900 p-1 backdrop-blur sm:h-14 sm:w-36">

                                    <img src="{{ asset('img/2_logo/Logo_new.png') }}" alt="{{ __('main.project_tech_brand') }}"
                                         class="object-contain w-full ">

                                </div>

                                <!-- Title -->
                                <h3 class="mb-2 text-3xl font-black text-white sm:text-2xl">
                                    {{ __('main.project_tech_brand') }}
                                </h3>

                                <p class="mb-6 text-lg font-bold text-[#FFC800] sm:text-base">
                                    {{ __('main.project_tech_sub') }}
                                </p>

                                <!-- Description -->
                                <p class="max-w-md leading-8 text-white/90 sm:text-sm sm:leading-7">
                                    {{ __('main.project_tech_desc') }}
                                </p>
                            </div>

                            <!-- Bottom -->
                            <div class="mt-10 flex flex-wrap items-center gap-4 sm:flex-col sm:items-stretch sm:gap-3">

                                <a href="https://techpolymersmarket.com/" target="_blank" rel="noopener noreferrer"
                                   class="inline-flex items-center justify-center gap-3 rounded-2xl bg-[#FFC800] px-7 py-4 font-bold text-[#1E3A9A] transition hover:bg-yellow-400 focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-white/70 sm:w-full sm:px-5 sm:py-3.5">

                                    <x-lucide-arrow-up-right class="w-5 h-5" />

                                    {{ __('main.visit_site') }}

                                </a>

                                <div class="flex min-w-0 items-center gap-2 font-medium text-white/90 sm:justify-center sm:text-sm">
                                    <x-lucide-globe-2 class="h-5 w-5 shrink-0 text-[#FFC800]" />
                                    <span class="break-all">techpolymersmarket.com</span>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Card 2 -->
                    <article
                        class="group relative min-h-[520px] overflow-hidden rounded-[32px] border border-white/40 shadow-xl md:min-h-[500px] sm:min-h-[560px] sm:rounded-[24px] xs:min-h-[600px]">

                        <!-- Background Image -->
                        <img src="{{ asset('img/block/Хімекселен__002.png') }}" alt="{{ __('main.project_bee_brand') }}"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-700 group-hover:scale-105">

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-r from-[#1E1B16]/95 via-[#1E1B16]/70 to-[#1E1B16]/25 sm:bg-gradient-to-b sm:from-[#1E1B16]/95 sm:via-[#1E1B16]/78 sm:to-[#1E1B16]/55">
                        </div>

                        <!-- Content -->
                        <div class="relative z-10 flex min-h-[520px] flex-col justify-between p-10 md:min-h-[500px] sm:min-h-[560px] sm:p-6 xs:min-h-[600px] xs:p-5">

                            <div>

                                <!-- Logo -->
                                <div
                                    class="mb-6 inline-flex h-16 w-42 items-center justify-center rounded-2xl bg-blue-900 p-1 backdrop-blur sm:h-14 sm:w-36">

                                    <img src="{{ asset('img/2_logo/Logo_new.png') }}" alt="{{ __('main.project_bee_brand') }}"
                                         class="object-contain w-full ">

                                </div>

                                <!-- Title -->
                                <h3 class="mb-2 text-3xl font-black text-white sm:text-2xl">
                                    {{ __('main.project_bee_brand') }}
                                </h3>

                                <p class="mb-6 text-lg font-bold text-[#FFC800] sm:text-base">
                                    {{ __('main.project_bee_sub') }}
                                </p>

                                <!-- Description -->
                                <p class="max-w-md leading-8 text-white/90 sm:text-sm sm:leading-7">
                                    {{ __('main.project_bee_desc') }}
                                </p>
                            </div>

                            <!-- Bottom -->
                            <div class="mt-10 flex flex-wrap items-center gap-4 sm:flex-col sm:items-stretch sm:gap-3">

                                <a href="https://bee.lg.ua/" target="_blank" rel="noopener noreferrer"
                                   class="inline-flex items-center justify-center gap-3 rounded-2xl bg-[#FFC800] px-7 py-4 font-bold text-[#1E3A9A] transition hover:bg-yellow-400 focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-white/70 sm:w-full sm:px-5 sm:py-3.5">

                                    <x-lucide-arrow-up-right class="w-5 h-5" />

                                    {{ __('main.visit_site') }}

                                </a>

                                <div class="flex min-w-0 items-center gap-2 font-medium text-white/90 sm:justify-center sm:text-sm">
                                    <x-lucide-globe-2 class="h-5 w-5 shrink-0 text-[#FFC800]" />
                                    <span class="break-all">bee.lg.ua</span>
                                </div>
                            </div>
                        </div>
                    </article>

                </div>
            </div>
        </section>


    </x-section>

    <x-section :fullWidth="true" class="home-section-padding px-10 md:px-6 sm:px-4">
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
                                    {{ __('main.banner_title_1') }}
                                    <span class="text-[#0B3B92]">
                                        {{ __('main.banner_title_2') }}
                                    </span>
                                </h2>

                                <p class="text-[#111827] text-lg leading-8 max-w-3xl">
                                    {{ __('main.banner_desc') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </x-section>

    <x-section :fullWidth="true" class="home-section-padding px-10 md:px-6 sm:px-4">

        <section class="py-20 bg-[#F3F5F9]">
            <div class="container mx-auto px-4">

                <!-- Header -->
                <div class="flex items-center justify-between mb-12">

                    <div>
                        <span
                            class="inline-flex items-center gap-2 bg-[#0B3B92]/10 text-[#0B3B92] px-5 py-2 rounded-full font-bold mb-4">
                            <i data-lucide="briefcase-business" class="w-5 h-5"></i>
                            {{ __('main.news_badge') }}
                        </span>

                        <h2 class="text-4xl tg:text-3xl sm:text-2xl font-black text-[#001B4D]">
                            {{ __('main.news_heading') }}
                        </h2>
                    </div>

                    <a href="{{ route('article.index') }}"
                        class="hidden md:inline-flex items-center gap-2 text-[#0B3B92] font-bold hover:gap-4 transition-all">
                        {{ __('main.all_projects') }}
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
                                        {{ __('main.read_more') }}
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
