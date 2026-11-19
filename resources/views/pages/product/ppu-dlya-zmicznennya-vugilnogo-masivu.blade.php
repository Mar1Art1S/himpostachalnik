<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PPU_MASIVU)->get();

name('prod_ppu_masivu');
?>

@extends('layouts.base')

@section('title', __('mes.product_top_title_ppy_coal') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('meta_description', __('mes.product_top_description_ppy_coal'))
@section('og_title', __('mes.product_top_title_ppy_coal') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('og_description', __('mes.product_top_description_ppy_coal'))
@section('og_image', asset('img/6_PPU_grup/006.png'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_ppy_coal') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_ppy_coal') }}

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

