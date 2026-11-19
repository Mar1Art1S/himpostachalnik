@extends('layouts.base')
@section('title', __('terms.title'))
@section('meta_description', __('terms.meta_description'))

@section('content')
<div class="max-w-[900px] w-full mx-auto px-6 xs:px-4 lg:px-8 my-12">

    {{-- Page Header --}}
    <div class="text-center mb-12">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 text-blue-700 font-semibold text-sm mb-4">
            <x-lucide-file-text class="w-4 h-4" />
            {{ __('terms.badge') }}
        </div>
        <h1 class="text-4xl md:text-3xl sm:text-2xl text-gray-900 font-bold uppercase tracking-tight">
            {{ __('terms.heading') }}
        </h1>
        <div class="w-20 h-1 bg-blue-700 mx-auto mt-4 rounded-full"></div>
        <p class="mt-4 text-gray-400 text-sm">{{ __('terms.last_updated', ['date' => date('d.m.Y')]) }}</p>
    </div>

    {{-- Content --}}
    <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8 md:p-6 xs:p-4 prose prose-lg prose-blue max-w-none">

        <h2>{{ __('terms.s1_title') }}</h2>
        <p>{{ __('terms.s1_text') }}</p>

        <h2>{{ __('terms.s2_title') }}</h2>
        <p>{{ __('terms.s2_text') }}</p>

        <h2>{{ __('terms.s3_title') }}</h2>
        <p>{{ __('terms.s3_text') }}</p>

        <h2>{{ __('terms.s4_title') }}</h2>
        <p>{{ __('terms.s4_intro') }}</p>
        <ul>
            <li>{{ __('terms.s4_item1') }}</li>
            <li>{{ __('terms.s4_item2') }}</li>
            <li>{{ __('terms.s4_item3') }}</li>
            <li>{{ __('terms.s4_item4') }}</li>
        </ul>

        <h2>{{ __('terms.s5_title') }}</h2>
        <p>{{ __('terms.s5_text') }}</p>

        <h2>{{ __('terms.s6_title') }}</h2>
        <p>{{ __('terms.s6_text') }}</p>

        <h2>{{ __('terms.s7_title') }}</h2>
        <p>{{ __('terms.s7_text') }}</p>

        <h2>{{ __('terms.s8_title') }}</h2>
        <p>{{ __('terms.s8_text') }}</p>

        <h2>{{ __('terms.s9_title') }}</h2>
        <p>{{ __('terms.s9_text') }}</p>

        <h2>{{ __('terms.s10_title') }}</h2>
        <p>{{ __('terms.s10_intro') }}</p>
        <ul>
            <li>{!! __('terms.s10_email') !!}</li>
            <li>{{ __('terms.s10_phone') }}</li>
        </ul>

    </div>

</div>
@endsection
