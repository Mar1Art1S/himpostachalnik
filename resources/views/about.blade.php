@extends('layouts.base')
@section('title', __('Хімічна сировина'))
@section('meta_description', __('Хімічна сировина для виробництва поліуретану та пінополіуретану, лакофарбових
матеріалів, клеїв і гідроізоляційних покриттів, що застосовується в будівництві, меблевій та автомобільній
промисловості, забезпечуючи стійкість, ізоляцію та довговічність матеріалів'))
@section('meta_keywords', __('хімічна сировина, поліуретан, пінополіуретан, лакофарбові матеріали, клейові матеріали,
гідроізоляція, поліуретанові матеріали, пінополіуретанові продукти, лакофарбові покриття, клеї та герметики, матеріали
для гідроізоляції'))


@section('og_title', __('Хімічна сировина'))
@section('og_description', __('Хімічна сировина для виробництва поліуретану та пінополіуретану, лакофарбових матеріалів,
клеїв і гідроізоляційних покриттів, що застосовується в будівництві, меблевій та автомобільній промисловості,
забезпечуючи стійкість, ізоляцію та довговічність матеріалів'))
@section('og_image', Vite::asset('resources/img/block/Завод__004_Інженери.png'))
@section('content')
<div class="max-w-[1600px] w-full mx-auto px-6 xs:px-4 lg:px-8 my-12">
    <div class="text-center mb-16">
        <h1 class="text-5xl md:text-4xl sm:text-3xl text-gray-900 font-r700 uppercase tracking-tight">
            {{ __('about.title_about') }}
        </h1>
        <div class="w-24 h-1 bg-[#2453df] mx-auto mt-4 rounded-full"></div>
    </div>

    <!-- FIRST BLOCK: IMAGE & TEXT -->
    <div class="flex flex-row md:flex-col gap-12 md:gap-8 items-center mb-16">
        <div class="w-1/3 md:w-full shrink-0">
            <img decoding="async" class="w-full h-auto object-cover max-h-[500px] md:max-h-[350px] rounded-3xl shadow-md border border-black/5"
                src="{{ Vite::asset('resources/img/block/Завод__004_Інженери.png') }}" alt="HIMPOST">
        </div>
        <div class="w-2/3 md:w-full">
            <div class="text-2xl leading-9 text-gray-700 font-r400 tg:text-xl tg:leading-8 fg:text-lg sm:text-base sm:leading-7">
                {{ __('about.paragraph_text_one') }}
            </div>
        </div>
    </div>

    <!-- SECOND BLOCK: FULL WIDTH TEXT -->
    <div class="mb-16">
        <div class="w-full">
            <div class="text-2xl leading-9 text-gray-700 font-r400 tg:text-xl tg:leading-8 fg:text-lg sm:text-base sm:leading-7">
                {{ __('about.paragraph_text_two') }}
            </div>
        </div>
    </div>

    <!-- THIRD BLOCK: IMAGE & TEXT -->
    <div class="flex flex-row md:flex-col gap-12 md:gap-8 items-center">
        <div class="w-1/3 md:w-full shrink-0">
            <img decoding="async" class="w-full h-auto object-cover max-h-[500px] md:max-h-[350px] rounded-3xl shadow-md border border-black/5"
                src="{{ Vite::asset('resources/img/block/Завод__004_Інженери_нове.png') }}" alt="HIMPOST new">
        </div>
        <div class="w-2/3 md:w-full">
            <div class="text-2xl leading-9 text-gray-700 font-r400 tg:text-xl tg:leading-8 fg:text-lg sm:text-base sm:leading-7">
                {{ __('about.paragraph_text_three') }}
            </div>
        </div>
    </div>
</div>
@endsection
