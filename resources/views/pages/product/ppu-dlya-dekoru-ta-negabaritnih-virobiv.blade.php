<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PPU_VIROBIV)->get();

name('prod_ppu_virobiv');
?>

@extends('layouts.base')

@section('title', __('mes.product_top_title_ppy_decor') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('meta_description', __('mes.product_top_description_ppy_decor'))
@section('og_title', __('mes.product_top_title_ppy_decor') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('og_description', __('mes.product_top_description_ppy_decor'))
@section('og_image', asset('img/6_PPU_grup/005.png'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_ppy_decor') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_ppy_decor') }}
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

