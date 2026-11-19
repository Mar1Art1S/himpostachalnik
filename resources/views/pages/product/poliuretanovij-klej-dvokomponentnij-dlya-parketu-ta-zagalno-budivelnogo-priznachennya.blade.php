<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_KLEJ_PARKETU)->get();

name('prod_klej_parketu');
?>

@extends('layouts.base')

@section('title', __('mes.product_top_title_py_parquet') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('meta_description', __('mes.product_top_description_ppy_parquet'))
@section('og_title', __('mes.product_top_title_py_parquet') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('og_description', __('mes.product_top_description_ppy_parquet'))
@section('og_image', asset('img/mat_4/06.png'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_py_parquet') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_ppy_parquet') }}

        </x-slot>

    </x-category-header>
    <livewire:search/>

    <x-section>
        <x-decor.card>
            @foreach ($products as $product)
                <x-product :product="$product" />
            @endforeach

        </x-decor.card>
    </x-section>
@endsection
