@extends('layouts.base')
@section('title', 'FAQ — Часті запитання — Хімпостачальник')
@section('meta_description', 'Відповіді на найпоширеніші запитання про продукцію, замовлення, доставку та роботу з Хімпостачальником.')

@section('content')
<div class="max-w-[1200px] w-full mx-auto px-6 xs:px-4 lg:px-8 my-12">

    {{-- Page Header --}}
    <div class="text-center mb-12">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 text-blue-700 font-semibold text-sm mb-4">
            <x-lucide-circle-help class="w-4 h-4" />
            Підтримка
        </div>
        <h1 class="text-4xl md:text-3xl sm:text-2xl text-gray-900 font-bold uppercase tracking-tight">
            Часті запитання
        </h1>
        <div class="w-20 h-1 bg-blue-700 mx-auto mt-4 rounded-full"></div>
        <p class="mt-4 text-gray-500 max-w-xl mx-auto">Тут зібрані відповіді на найпоширеніші питання наших клієнтів.</p>
    </div>

    {{-- FAQ Items --}}
    <div class="space-y-3" x-data="{ active: null }">

        @php
        $faqs = [
            [
                'q' => 'Як зробити замовлення?',
                'a' => 'Ви можете оформити замовлення через форму на сайті, телефоном або надіславши запит на нашу електронну пошту. Після отримання заявки менеджер зв'яжеться з вами для уточнення деталей.',
            ],
            [
                'q' => 'Яка мінімальна сума замовлення?',
                'a' => 'Мінімальна сума замовлення залежить від конкретної продукції. Уточнюйте деталі у нашого менеджера. Для постійних клієнтів можливі індивідуальні умови.',
            ],
            [
                'q' => 'Чи надаєте ви зразки продукції?',
                'a' => 'Так, для нових клієнтів ми можемо надати технічні зразки для тестування. Умови надання зразків уточнюйте у менеджера.',
            ],
            [
                'q' => 'Які способи доставки ви пропонуєте?',
                'a' => 'Доставка здійснюється через Нову Пошту, Укрпошту, або власним транспортом для великогабаритних замовлень. Для Києва та найближчих областей можлива кур'єрська доставка.',
            ],
            [
                'q' => 'Як дізнатися наявність товару на складі?',
                'a' => 'Будь ласка, зв'яжіться з нашим менеджером по телефону або через форму зворотного зв'язку. Ми оперативно перевіримо наявність та повідомимо вас.',
            ],
            [
                'q' => 'Чи є знижки при великих замовленнях?',
                'a' => 'Так, ми пропонуємо гнучку систему знижок для оптових покупців та постійних партнерів. Детальніше — у вашого персонального менеджера.',
            ],
            [
                'q' => 'Чи є у вас технічна підтримка?',
                'a' => 'Наші фахівці готові надати технічну консультацію щодо застосування продукції. Зверніться до нас зручним для вас способом.',
            ],
            [
                'q' => 'Які умови повернення товару?',
                'a' => 'Повернення можливе за умови відповідності товару вимогам повернення (неушкоджене пакування, збережений товарний вигляд). Деталі уточнюйте у менеджера при оформленні повернення.',
            ],
        ];
        @endphp

        @foreach($faqs as $i => $faq)
        <div class="rounded-2xl border border-gray-100 bg-white shadow-sm overflow-hidden">
            <button
                @click="active === {{ $i }} ? active = null : active = {{ $i }}"
                class="w-full flex items-center justify-between gap-4 px-6 py-5 text-left group"
            >
                <span class="flex items-center gap-4">
                    <span class="flex items-center justify-center w-8 h-8 rounded-xl bg-blue-50 text-blue-700 font-bold text-sm shrink-0 group-hover:bg-blue-700 group-hover:text-white transition">
                        {{ $i + 1 }}
                    </span>
                    <span class="font-semibold text-gray-900 text-lg md:text-base">{{ $faq['q'] }}</span>
                </span>
                <x-lucide-chevron-down
                    class="w-5 h-5 text-gray-400 shrink-0 transition-transform duration-300"
                    x-bind:class="active === {{ $i }} ? 'rotate-180 text-blue-700' : ''"
                />
            </button>
            <div
                x-show="active === {{ $i }}"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 -translate-y-2"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-2"
                class="px-6 pb-5"
            >
                <div class="pl-12 md:pl-0 text-gray-600 leading-relaxed border-t border-gray-100 pt-4">
                    {{ $faq['a'] }}
                </div>
            </div>
        </div>
        @endforeach

    </div>

    {{-- CTA --}}
    <div class="mt-10 p-8 rounded-3xl bg-gradient-to-r from-blue-900 to-blue-700 text-white text-center">
        <h3 class="text-2xl font-bold mb-2">Не знайшли відповідь?</h3>
        <p class="text-blue-200 mb-6">Зв'яжіться з нами, і ми відповімо на всі ваші запитання.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-6 py-3 font-semibold text-blue-900 bg-yellow-400 rounded-2xl hover:bg-yellow-300 transition shadow-lg">
            <x-lucide-message-circle class="w-5 h-5" />
            Написати нам
        </a>
    </div>

</div>
@endsection
