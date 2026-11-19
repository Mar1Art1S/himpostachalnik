<?php
use App\Enums\CategoryEnum;
use App\Models\Product;
use function Laravel\Folio\name;


$products=Product::where('category',App\Enums\CategoryEnum::PROD_PPU_NAPILENNYA)->get();

name('prod_ppu_napilennya');
?>

@extends('layouts.base')

@section('title', __('mes.product_top_title_ppy_filing') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('meta_description', __('mes.product_top_description_ppy_filing'))
@section('og_title', __('mes.product_top_title_ppy_filing') . ' — ' . (app()->getLocale() === 'en' ? 'Himpost' : 'Хімпостачальник'))
@section('og_description', __('mes.product_top_description_ppy_filing'))
@section('og_image', asset('img/6_PPU_grup/001.png'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_ppy_filing') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_ppy_filing') }}

        </x-slot>

    </x-category-header>

    <livewire:insulation-form/>

{{--@dump($products)--}}
    <x-section>
        <x-decor.card>
            @foreach ($products as $product)
                <x-product :product="$product" />
            @endforeach

        </x-decor.card>
    </x-section>

@endsection
