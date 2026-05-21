<footer class="relative overflow-hidden bg-[#031B52] text-white">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none opacity-20">
        <div class="absolute top-0 right-0 w-[450px] h-[450px] bg-blue-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-[350px] h-[350px] bg-yellow-400/10 rounded-full blur-3xl"></div>
    </div>

    <div class="relative z-10">

        {{-- TOP SECTION --}}
        <div class="grid grid-cols-1 border-b md:grid-cols-2 sf:grid-cols-1 xl:grid-cols-6 border-white/10">

            {{-- BRAND --}}
            <div class="px-8 xs:px-4 py-10 xs:py-6 border-b xl:border-b-0 xl:border-r border-white/10">

                <a href="{{ route('main') }}">
                    <img src="{{ asset('img/2_logo/Logo_new.png') }}" alt="HIMPOST" class="w-[220px]">
                </a>

                <p class="mt-7 text-[15px] leading-8 text-blue-100">
                    Виробник та постачальник інноваційних
                    полімерних матеріалів та хімічної
                    продукції для промисловості.
                </p>

                <div class="flex flex-wrap gap-2 mt-7">

                    <span
                        class="px-3 py-1 text-xs text-yellow-300 border rounded-full border-yellow-400/20 bg-yellow-400/10">
                        B2B
                    </span>

                    <span class="px-3 py-1 text-xs text-blue-100 border rounded-full border-blue-300/20 bg-blue-300/10">
                        Wholesale
                    </span>

                    <span class="px-3 py-1 text-xs text-white border rounded-full border-white/10 bg-white/5">
                        Manufacturing
                    </span>

                </div>

            </div>

            {{-- CONTACTS --}}
            <div class="px-8 xs:px-4 py-10 xs:py-6 border-b xl:border-b-0 xl:border-r border-white/10">

                <h3 class="text-sm font-bold tracking-wide text-yellow-400 uppercase mb-7">
                    Контакти
                </h3>

                <div class="space-y-7">

                    <div>
                        <div class="mb-2 text-xs text-blue-200">
                            Приймальня директора
                        </div>

                        <a href="tel:+380504756847"
                            class="text-[24px] sm:text-xl xs:text-lg font-bold tracking-wide leading-none hover:text-yellow-400 transition-colors whitespace-nowrap">
                            +38 (050) 475-68-47
                        </a>
                    </div>

                    <div>
                        <div class="mb-2 text-xs text-blue-200">
                            Технології та логістика
                        </div>

                        <a href="tel:+380503403547"
                            class="text-[24px] sm:text-xl xs:text-lg font-bold tracking-wide leading-none hover:text-yellow-400 transition-colors whitespace-nowrap">
                            +38 (050) 340-35-47
                        </a>
                    </div>

                    <div>
                        <div class="mb-2 text-xs text-blue-200">
                            Email
                        </div>

                        <a href="mailto:director@himpost.com"
                            class="text-[16px] text-yellow-300 hover:text-yellow-400 transition-colors break-all">
                            director@himpost.com
                        </a>
                    </div>

                </div>

            </div>

            {{-- LEGAL --}}
            <div class="px-8 xs:px-4 py-10 xs:py-6 border-b xl:border-b-0 xl:border-r border-white/10">

                <h3 class="text-sm font-bold tracking-wide text-yellow-400 uppercase mb-7">
                    Юридична адреса
                </h3>

                <div class="text-[15px] leading-8 text-blue-100">
                    82111, Україна,<br>
                    Львівська область,<br>
                    вул. Самбірська, 85,<br>
                    м. Дрогобич
                </div>

            </div>

            {{-- FACT --}}
            <div class="px-8 xs:px-4 py-10 xs:py-6 border-b xl:border-b-0 xl:border-r border-white/10">

                <h3 class="text-sm font-bold tracking-wide text-yellow-400 uppercase mb-7">
                    Фактична адреса
                </h3>

                <div class="text-[15px] leading-8 text-blue-100">
                    39603, Україна,<br>
                    Полтавська обл.,<br>
                    м. Кременчук,<br>
                    вул. Профспілкова, 11
                </div>

            </div>

            {{-- KYIV --}}
            <div class="px-8 xs:px-4 py-10 xs:py-6 border-b xl:border-b-0 xl:border-r border-white/10">

                <h3 class="text-sm font-bold tracking-wide text-yellow-400 uppercase mb-7">
                    м. Київ (Склад)
                </h3>

                <div class="text-[15px] leading-8 text-blue-100">
                    Миколи Хвильового, 15,<br>
                    Дарницький район
                </div>

                <a href="tel:+380503482310"
                    class="inline-block mt-7 text-[24px] sm:text-xl xs:text-lg font-bold tracking-wide whitespace-nowrap hover:text-yellow-400 transition-colors">
                    +38 (050) 348-23-10
                </a>

            </div>

            {{-- PROJECTS --}}
            <div class="px-6 xs:px-4 py-10 xs:py-6">

                <h3 class="text-sm font-bold tracking-wide text-yellow-400 uppercase mb-7">
                    Окремі retail та галузеві напрямки компанії Хімпостачальник
                </h3>

                <div class="space-y-4">

                    {{-- BEE --}}
                    <a href="https://bee.lg.ua/" target="_blank"
                        class="group flex items-center gap-4 p-4 rounded-2xl border border-yellow-400/10 bg-white/[0.03] hover:border-yellow-400/40 hover:bg-white/[0.06] transition-all">



                        <div class="min-w-0">

                            <div class="text-[16px] font-bold text-white group-hover:text-yellow-300 transition-colors">
                                Хімекселен
                            </div>

                            <div class="text-[12px] text-yellow-300 mt-1">
                                товари для бджільництва
                            </div>

                            <div class="mt-2 text-[13px] text-yellow-400 font-semibold truncate">
                                bee.lg.ua →
                            </div>

                        </div>

                    </a>

                    {{-- TECH --}}
                    <a href="https://techpolymersmarket.com/" target="_blank"
                        class="group flex items-center gap-4 p-4 rounded-2xl border border-blue-400/10 bg-white/[0.03] hover:border-blue-400/40 hover:bg-white/[0.06] transition-all">



                        <div class="min-w-0">

                            <div
                                class="text-[16px] font-bold text-white group-hover:text-blue-300 transition-colors leading-tight">
                                TechPolymers
                            </div>

                            <div class="text-[12px] text-blue-300 mt-1">
                                технічні полімери
                            </div>

                            <div class="mt-2 text-[13px] text-blue-300 font-semibold truncate">
                                techpolymersmarket.com →
                            </div>

                        </div>

                    </a>

                </div>

            </div>

        </div>

        {{-- BENEFITS --}}
        <div class="grid grid-cols-1 border-b md:grid-cols-2 sf:grid-cols-1 xl:grid-cols-4 border-white/10">

            <div class="flex gap-4 xs:gap-3 px-8 xs:px-4 border-b py-7 xs:py-5 md:border-b-0 xl:border-r border-white/10">

                <div class="text-3xl text-yellow-400 shrink-0">
                    ✓
                </div>

                <div>
                    <div class="text-[17px] font-semibold">
                        Якість та надійність
                    </div>

                    <p class="mt-2 text-[13px] leading-7 text-blue-100">
                        Гарантуємо стабільну якість
                        та відповідність стандартам.
                    </p>
                </div>

            </div>

            <div class="flex gap-4 xs:gap-3 px-8 xs:px-4 border-b py-7 xs:py-5 md:border-b-0 xl:border-r border-white/10">

                <div class="text-3xl text-yellow-400 shrink-0">
                    ⚗
                </div>

                <div>
                    <div class="text-[17px] font-semibold">
                        Інноваційні технології
                    </div>

                    <p class="mt-2 text-[13px] leading-7 text-blue-100">
                        Сучасне виробництво
                        та розвиток продукції.
                    </p>
                </div>

            </div>

            <div class="flex gap-4 xs:gap-3 px-8 xs:px-4 border-b py-7 xs:py-5 md:border-b-0 xl:border-r border-white/10">

                <div class="text-3xl text-yellow-400 shrink-0">
                    🚚
                </div>

                <div>
                    <div class="text-[17px] font-semibold">
                        Оперативна логістика
                    </div>

                    <p class="mt-2 text-[13px] leading-7 text-blue-100">
                        Швидка доставка по Україні
                        та країнах Європи.
                    </p>
                </div>

            </div>

            <div class="flex gap-4 xs:gap-3 px-8 xs:px-4 py-7 xs:py-5">

                <div class="text-3xl text-yellow-400 shrink-0">
                    🤝
                </div>

                <div>
                    <div class="text-[17px] font-semibold">
                        Партнерство та підтримка
                    </div>

                    <p class="mt-2 text-[13px] leading-7 text-blue-100">
                        Індивідуальний підхід
                        до кожного клієнта.
                    </p>
                </div>

            </div>

        </div>

        {{-- BOTTOM --}}
        <div class="flex flex-col items-center justify-between gap-6 px-8 xs:px-4 xl:flex-row py-7 xs:py-5">

            <div class="text-[14px] text-blue-200">
                © {{ date('Y') }} Хімпостачальник. Усі права захищені.
            </div>

        </div>

    </div>

</footer>
