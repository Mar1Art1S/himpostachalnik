<?php

use function Laravel\Folio\name;
use App\Models\Product;
use App\Enums\CategoryEnum;
$products=Product::where('category',App\Enums\CategoryEnum::PROD_PPU_SHKARLUPI)->get();

name('prod_ppu_shkarlupi');
?>

@extends('layouts.base')

@section('title', __('mes.product_top_title_ppy_scalp') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('meta_description', __('mes.product_top_description_ppy_scalp'))
@section('og_title', __('mes.product_top_title_ppy_scalp') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('og_description', __('mes.product_top_description_ppy_scalp'))
@section('og_image', asset('img/6_PPU_grup/002.png'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_ppy_scalp') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_ppy_scalp') }}

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

