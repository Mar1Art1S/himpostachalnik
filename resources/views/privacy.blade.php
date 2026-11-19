@extends('layouts.base')
@section('title', __('privacy.title'))
@section('meta_description', __('privacy.meta_description'))

@section('content')
<div class="max-w-[900px] w-full mx-auto px-6 xs:px-4 lg:px-8 my-12">

    {{-- Page Header --}}
    <div class="text-center mb-12">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 text-blue-700 font-semibold text-sm mb-4">
            <x-lucide-shield class="w-4 h-4" />
            {{ __('privacy.badge') }}
        </div>
        <h1 class="text-4xl md:text-3xl sm:text-2xl text-gray-900 font-bold uppercase tracking-tight">
            {{ __('privacy.heading') }}
        </h1>
        <div class="w-20 h-1 bg-blue-700 mx-auto mt-4 rounded-full"></div>
        <p class="mt-4 text-gray-400 text-sm">{{ __('privacy.last_updated', ['date' => date('d.m.Y')]) }}</p>
    </div>

    {{-- Content --}}
    <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8 md:p-6 xs:p-4 prose prose-lg prose-blue max-w-none">

        <h2>{{ __('privacy.s1_title') }}</h2>
        <p>{{ __('privacy.s1_text') }}</p>

        <h2>{{ __('privacy.s2_title') }}</h2>
        <p>{{ __('privacy.s2_intro') }}</p>
        <ul>
            <li>{{ __('privacy.s2_item1') }}</li>
            <li>{{ __('privacy.s2_item2') }}</li>
            <li>{{ __('privacy.s2_item3') }}</li>
            <li>{{ __('privacy.s2_item4') }}</li>
            <li>{{ __('privacy.s2_item5') }}</li>
        </ul>

        <h2>{{ __('privacy.s3_title') }}</h2>
        <p>{{ __('privacy.s3_intro') }}</p>
        <ul>
            <li>{{ __('privacy.s3_item1') }}</li>
            <li>{{ __('privacy.s3_item2') }}</li>
            <li>{{ __('privacy.s3_item3') }}</li>
            <li>{{ __('privacy.s3_item4') }}</li>
            <li>{{ __('privacy.s3_item5') }}</li>
        </ul>

        <h2>{{ __('privacy.s4_title') }}</h2>
        <p>{{ __('privacy.s4_intro') }}</p>
        <ul>
            <li>{{ __('privacy.s4_item1') }}</li>
            <li>{{ __('privacy.s4_item2') }}</li>
        </ul>

        <h2>{{ __('privacy.s5_title') }}</h2>
        <p>{{ __('privacy.s5_text') }}</p>

        <h2>{{ __('privacy.s6_title') }}</h2>
        <p>{{ __('privacy.s6_text') }}</p>

        <h2>{{ __('privacy.s7_title') }}</h2>
        <p>{{ __('privacy.s7_intro') }}</p>
        <ul>
            <li>{{ __('privacy.s7_item1') }}</li>
            <li>{{ __('privacy.s7_item2') }}</li>
            <li>{{ __('privacy.s7_item3') }}</li>
            <li>{{ __('privacy.s7_item4') }}</li>
        </ul>

        <h2>{{ __('privacy.s8_title') }}</h2>
        <p>{{ __('privacy.s8_intro') }}</p>
        <ul>
            <li>{!! __('privacy.s8_email') !!}</li>
            <li>{{ __('privacy.s8_phone') }}</li>
        </ul>

        <h2>{{ __('privacy.s9_title') }}</h2>
        <p>{{ __('privacy.s9_text') }}</p>

    </div>

</div>
@endsection
