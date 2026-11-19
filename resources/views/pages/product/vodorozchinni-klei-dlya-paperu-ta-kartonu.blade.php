<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_KLEJ_KARTONU)->get();

name('prod_klej_kartonu');
?>

@extends('layouts.base')

@section('title', __('mes.product_top_title_py_paper') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('meta_description', __('mes.product_top_description_py_paper'))
@section('og_title', __('mes.product_top_title_py_paper') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('og_description', __('mes.product_top_description_py_paper'))
@section('og_image', asset('img/mat_4/08.png'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_py_paper') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_py_paper') }}

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
