<?php

use function Laravel\Folio\name;
use App\Models\Product;

name('py_pol');
?>

@extends('layouts.base')

@section('title', __('mes.subproduct_top_title_py_injection_molded_polyurethane') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('meta_description', __('mes.subproduct_top_description_py_injection_molded_polyurethane'))
@section('og_title', __('mes.subproduct_top_title_py_injection_molded_polyurethane') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('og_description', __('mes.subproduct_top_description_py_injection_molded_polyurethane'))
@section('og_image', asset('img/categories/012.png'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.subproduct_top_title_py_injection_molded_polyurethane') }}

        </x-slot>

        <x-slot:description>
            {{ __('mes.subproduct_top_description_py_injection_molded_polyurethane') }}

        </x-slot>

    </x-category-header>


    <x-section>
{{--        <x-decor.card>--}}
{{--            @foreach ($products as $product)--}}
{{--                <x-product :product="$product" />--}}
{{--            @endforeach--}}

{{--        </x-decor.card>--}}
    </x-section>
@endsection
