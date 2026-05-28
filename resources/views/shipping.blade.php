@extends('layouts.base')
@section('title', 'Умови поставки — Хімпостачальник')
@section('meta_description', 'Умови поставки хімічної сировини: терміни, способи доставки, регіони та умови оплати.')

@section('content')
<div class="max-w-[1200px] w-full mx-auto px-6 xs:px-4 lg:px-8 my-12">

    {{-- Page Header --}}
    <div class="text-center mb-12">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 text-blue-700 font-semibold text-sm mb-4">
            <x-lucide-truck class="w-4 h-4" />
            Підтримка
        </div>
        <h1 class="text-4xl md:text-3xl sm:text-2xl text-gray-900 font-bold uppercase tracking-tight">
            Умови поставки
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
                Регіони доставки
            </h2>
            <p class="text-gray-600 leading-relaxed">Ми здійснюємо поставки по всій Україні. Доставка можлива у будь-яке місто чи населений пункт за допомогою перевізників — Нова Пошта, Укрпошта, а також власним або найнятим транспортом для великогабаритних замовлень.</p>
        </div>

        <div class="border-t border-gray-100 pt-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-3 flex items-center gap-3">
                <span class="flex items-center justify-center w-9 h-9 rounded-xl bg-blue-700 text-white shrink-0">
                    <x-lucide-clock class="w-4 h-4" />
                </span>
                Терміни доставки
            </h2>
            <ul class="space-y-3 text-gray-600">
                <li class="flex items-start gap-2">
                    <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-yellow-400"></span>
                    <span><strong class="text-gray-900">Нова Пошта / Укрпошта:</strong> 1–3 робочих дні з моменту відвантаження.</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-yellow-400"></span>
                    <span><strong class="text-gray-900">Власна доставка (Київ та область):</strong> 1 робочий день.</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-yellow-400"></span>
                    <span><strong class="text-gray-900">Міжнародна доставка:</strong> обговорюється індивідуально.</span>
                </li>
            </ul>
        </div>

        <div class="border-t border-gray-100 pt-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-3 flex items-center gap-3">
                <span class="flex items-center justify-center w-9 h-9 rounded-xl bg-blue-700 text-white shrink-0">
                    <x-lucide-credit-card class="w-4 h-4" />
                </span>
                Умови оплати
            </h2>
            <ul class="space-y-3 text-gray-600">
                <li class="flex items-start gap-2">
                    <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-yellow-400"></span>
                    <span>Безготівковий розрахунок (рахунок-фактура, ПДВ).</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-yellow-400"></span>
                    <span>Передоплата 100% або відстрочка платежу (для постійних партнерів).</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-yellow-400"></span>
                    <span>Готівковий розрахунок при самовивозі.</span>
                </li>
            </ul>
        </div>

        <div class="border-t border-gray-100 pt-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-3 flex items-center gap-3">
                <span class="flex items-center justify-center w-9 h-9 rounded-xl bg-blue-700 text-white shrink-0">
                    <x-lucide-package class="w-4 h-4" />
                </span>
                Самовивіз
            </h2>
            <p class="text-gray-600 leading-relaxed">Ви можете забрати замовлення самостійно зі складу після погодження наявності товару з менеджером. Адреса складу та час роботи уточнюється при замовленні.</p>
        </div>

    </div>

    {{-- CTA --}}
    <div class="mt-8 text-center">
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-6 py-3 font-semibold text-white bg-blue-700 rounded-2xl hover:bg-blue-800 transition shadow-lg shadow-blue-100">
            <x-lucide-message-circle class="w-5 h-5" />
            Зв'язатися з нами
        </a>
    </div>

</div>
@endsection
