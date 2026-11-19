<?php

use function Laravel\Folio\name;
use App\Models\Product;

name('py_gidro');
?>

@extends('layouts.base')
@section('title', __('mes.subproduct_top_title_py_waterproofing') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('meta_description', __('mes.subproduct_top_description_py_waterproofing'))
@section('og_title', __('mes.subproduct_top_title_py_waterproofing') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('og_description', __('mes.subproduct_top_description_py_waterproofing'))
@section('og_image', asset('img/mat_7/Полимочевина_гарячого_нанесення.png'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.subproduct_top_title_py_waterproofing') }}

        </x-slot>

        <x-slot:description>
            {{ __('mes.subproduct_top_description_py_waterproofing') }}
        </x-slot>

    </x-category-header>

    <x-section>
        <x-decor.card>
            <x-category-v title=" {{ __('mes.category_v_title_py_hot_applied_polyurea') }}"
                description="{{ __('mes.category_v_description_py_hot_applied_polyurea') }}"
                image="{{ asset('img/mat_7/Полимочевина_гарячого_нанесення.png') }}"
                link="{{ route('poli_moch_haryacho') }}" />
            <x-category-v title="{{ __('mes.category_v_title_py_cold_applied_polyurea') }}"
                description="{{ __('mes.category_v_description_py_cold_applied_polyurea') }}"
                image="{{ asset('img/mat_7/Полімочивина_холодного_нанесення.png') }}"
                link="{{ route('poli_moch_kholodno') }}" />
        </x-decor.card>
    </x-section>
@endsection
