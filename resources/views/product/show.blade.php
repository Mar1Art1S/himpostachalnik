@extends('layouts.base')

@section('title', $product->getTranslation('name', app()->getLocale()))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ $product->getTranslation('name', app()->getLocale()) }}
        </x-slot>

        <x-slot:description>
            {{ __('product.prod_commodity') }}
        </x-slot>
    </x-category-header>

    <x-section>
        <div class="flex justify-center">
            <x-product :product="$product" />
        </div>
    </x-section>
@endsection
