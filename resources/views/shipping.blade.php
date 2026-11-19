@extends('layouts.base')
@section('title', __('shipping.title'))
@section('meta_description', __('shipping.meta_description'))

@section('content')
<div class="max-w-[1200px] w-full mx-auto px-6 xs:px-4 lg:px-8 my-12">

    {{-- Page Header --}}
    <div class="text-center mb-12">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 text-blue-700 font-semibold text-sm mb-4">
            <x-lucide-truck class="w-4 h-4" />
            {{ __('shipping.badge') }}
        </div>
        <h1 class="text-4xl md:text-3xl sm:text-2xl text-gray-900 font-bold uppercase tracking-tight">
            {{ __('shipping.heading') }}
        </h1>
        <div class="w-20 h-1 bg-blue-700 mx-auto mt-4 rounded-full"></div>
    </div>

    {{-- Content --}}
    <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8 md:p-6 xs:p-4 space-y-8">

        <div>
            <h2 class="text-2xl font-bold text-gray-900 mb-3 flex items-center gap-3">
                <span class="flex items-center justify-center w-9 h-9 rounded-xl bg-blue-700 text-white shrink-0">
                    <x-lucide-map-pin class="w-4 h-4" />
                </span>
                {{ __('shipping.regions_title') }}
            </h2>
            <p class="text-gray-600 leading-relaxed">{{ __('shipping.regions_text') }}</p>
        </div>

        <div class="border-t border-gray-100 pt-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-3 flex items-center gap-3">
                <span class="flex items-center justify-center w-9 h-9 rounded-xl bg-blue-700 text-white shrink-0">
                    <x-lucide-clock class="w-4 h-4" />
                </span>
                {{ __('shipping.terms_title') }}
            </h2>
            <ul class="space-y-3 text-gray-600">
                <li class="flex items-start gap-2">
                    <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-yellow-400"></span>
                    <span>{!! __('shipping.terms_nova_poshta') !!}</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-yellow-400"></span>
                    <span>{!! __('shipping.terms_own_delivery') !!}</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-yellow-400"></span>
                    <span>{!! __('shipping.terms_international') !!}</span>
                </li>
            </ul>
        </div>

        <div class="border-t border-gray-100 pt-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-3 flex items-center gap-3">
                <span class="flex items-center justify-center w-9 h-9 rounded-xl bg-blue-700 text-white shrink-0">
                    <x-lucide-credit-card class="w-4 h-4" />
                </span>
                {{ __('shipping.payment_title') }}
            </h2>
            <ul class="space-y-3 text-gray-600">
                <li class="flex items-start gap-2">
                    <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-yellow-400"></span>
                    <span>{{ __('shipping.payment_cashless') }}</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-yellow-400"></span>
                    <span>{{ __('shipping.payment_prepayment') }}</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-yellow-400"></span>
                    <span>{{ __('shipping.payment_pickup') }}</span>
                </li>
            </ul>
        </div>

        <div class="border-t border-gray-100 pt-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-3 flex items-center gap-3">
                <span class="flex items-center justify-center w-9 h-9 rounded-xl bg-blue-700 text-white shrink-0">
                    <x-lucide-package class="w-4 h-4" />
                </span>
                {{ __('shipping.pickup_title') }}
            </h2>
            <p class="text-gray-600 leading-relaxed">{{ __('shipping.pickup_text') }}</p>
        </div>

    </div>

    {{-- CTA --}}
    <div class="mt-8 text-center">
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-6 py-3 font-semibold text-white bg-blue-700 rounded-2xl hover:bg-blue-800 transition shadow-lg shadow-blue-100">
            <x-lucide-message-circle class="w-5 h-5" />
            {{ __('shipping.contact_btn') }}
        </a>
    </div>

</div>
@endsection
