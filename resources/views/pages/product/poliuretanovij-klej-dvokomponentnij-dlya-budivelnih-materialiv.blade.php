<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_KLEJ_BUDIVELNIH)->get();

name('prod_klej_budivelnih');
?>

@extends('layouts.base')

@section('title', __('mes.product_top_title_py_construction') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('meta_description', __('mes.product_top_description_py_construction'))
@section('og_title', __('mes.product_top_title_py_construction') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('og_description', __('mes.product_top_description_py_construction'))
@section('og_image', asset('img/mat_4/05.png'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_py_construction') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_py_construction') }}

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
