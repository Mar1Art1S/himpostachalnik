<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_KILIMA)->get();

name('py_kilima');
?>

@extends('layouts.base')

@section('title', __('mes.subproduct_top_title_py_stone_carpet') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('meta_description', __('mes.subproduct_top_description_py_stone_carpet'))
@section('og_title', __('mes.subproduct_top_title_py_stone_carpet') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('og_description', __('mes.subproduct_top_description_py_stone_carpet'))
@section('og_image', asset('img/categories/003.png'))
@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.subproduct_top_title_py_stone_carpet') }}

        </x-slot>

        <x-slot:description>
            {{ __('mes.subproduct_top_description_py_stone_carpet') }}
        </x-slot>

    </x-category-header>


    <x-section>
        <x-decor.card>
            @foreach ($products as $product)
                <x-product :product="$product" />
            @endforeach

        </x-decor.card>
    </x-section>
@endsection
