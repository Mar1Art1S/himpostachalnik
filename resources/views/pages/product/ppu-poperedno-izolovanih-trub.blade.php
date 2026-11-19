<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PPU_TRUB)->get();

name('prod_ppu_trub');
?>

@extends('layouts.base')

@section('title', __('mes.product_top_title_ppy_insulated_pipes') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('meta_description', __('mes.product_top_description_ppy_insulated_pipes'))
@section('og_title', __('mes.product_top_title_ppy_insulated_pipes') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('og_description', __('mes.product_top_description_ppy_insulated_pipes'))
@section('og_image', asset('img/6_PPU_grup/003.png'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_ppy_insulated_pipes') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_ppy_insulated_pipes') }}

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

