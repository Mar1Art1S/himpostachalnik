<?php

use function Laravel\Folio\name;
use App\Models\Product;

name('py_serovine');
?>

@extends('layouts.base')

@section('title', __('mes.subproduct_top_title_py') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('meta_description', __('mes.subproduct_top_description_py'))
@section('og_title', __('mes.subproduct_top_title_py') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('og_description', __('mes.subproduct_top_description_py'))
@section('og_image', asset('img/categories/002.png'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.subproduct_top_title_py') }}

        </x-slot>

        <x-slot:description>
            {{ __('mes.subproduct_top_description_py') }}

        </x-slot>
    </x-category-header>

    <x-section>
        <x-decor.card>
            <x-category-v title=" {{ __('mes.category_v_title_py_injection_molding') }}"
                description="{{ __('mes.category_v_description_py_injection_molding') }}"
                image="{{ asset('img/mat_2/01.png') }}" link="{{ route('prod_pu_livarnij') }}"
                video_one="{{ 'hhkZFJQwQmc?si=lnbvXBkrxqyZfzXi' }}" />
            <x-category-v title=" {{ __('mes.category_v_title_py_leveling_floors') }}"
                description="{{ __('mes.category_v_description_py_leveling_floors') }}"
                image="{{ asset('img/mat_2/02.png') }}" link="{{ route('prod_pu_pidlogi') }}" />
            <x-category-v title=" {{ __('mes.category_v_title_py_elastomers') }}"
                description="{{ __('mes.category_v_description_py_elastomers') }}"
                image="{{ asset('img/mat_2/03.png') }}" link="{{ route('prod_pu_elastomiri') }}"
                video_one="{{ 'Gtbn_KSweLY?si=Z9yzD9QhkwdJbezB' }}" />
            <x-category-v title=" {{ __('mes.category_v_title_py_paste') }}"
                description="{{ __('mes.category_v_description_py_paste') }}"
                image="{{ asset('img/mat_2/04.png') }}" link="{{ route('prod_pu_pasta') }}" />
            <x-category-v title=" {{ __('mes.category_v_title_py_pigment_pastes') }}"
                description="{{ __('mes.category_v_description_py_pigment_pastes') }}"
                image="{{ asset('img/mat_2/05.png') }}" link="{{ route('prod_pu_pigment') }}"
                video_one="{{ 'njCuAvQ_YNc?si=uEVedbemEHlwVsC0' }}" />
        </x-decor.card>
    </x-section>
@endsection
