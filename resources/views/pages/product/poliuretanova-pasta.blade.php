<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PU_PASTA)->get();

name('prod_pu_pasta');
?>

@extends('layouts.base')

@section('title', __('mes.product_top_title_py_paste') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('meta_description', __('mes.product_top_description_py_paste'))
@section('og_title', __('mes.product_top_title_py_paste') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('og_description', __('mes.product_top_description_py_paste'))
@section('og_image', asset('img/mat_2/04.png'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_py_paste') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_py_paste') }}
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


