@extends('layouts.base')
@section('title', __('header.projects') . ' | HIMPOST')

@section('content')
    <div class="bg-[#F8FAFC] min-h-screen font-sans selection:bg-blue-100">

        {{-- HERO HEADER SECTION --}}
        <section class="relative pt-24 pb-20 overflow-hidden bg-white">
            {{-- Subtle Background Accents --}}
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full pointer-events-none overflow-hidden opacity-40">
                <div class="absolute -top-[10%] -left-[10%] w-[40%] h-[60%] bg-blue-100/50 rounded-full blur-[120px]"></div>
                <div class="absolute top-[20%] -right-[5%] w-[30%] h-[50%] bg-yellow-50/50 rounded-full blur-[100px]"></div>
            </div>

            <div class="container relative z-10 mx-auto px-6 max-w-7xl">
                <div class="max-w-4xl mx-auto text-center">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 border border-blue-100 mb-6">
                        <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                        <span class="text-xs font-bold uppercase tracking-widest text-blue-700">Екосистема напрямків</span>
                    </div>

                    <h1 class="text-[52px] md:text-[72px] sm:text-4xl xs:text-3xl font-black leading-[1.1] text-[#0b2f7a] uppercase tracking-tighter mb-8">
                        Наші проєкти
                    </h1>

                    <p class="text-xl md:text-2xl text-slate-600 font-medium leading-relaxed max-w-3xl mx-auto">
                        Спеціалізовані retail та галузеві напрямки компанії <span class="text-[#0b2f7a] font-bold">Хімпостачальник</span>, що забезпечують інноваційні рішення для різних сфер промисловості.
                    </p>
                </div>
            </div>
        </section>

        {{-- PROJECTS CARDS GRID --}}
        <section class="pb-24">
            <div class="container mx-auto px-6 max-w-7xl">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

                    {{-- TECHPOLYMERS MARKET CARD --}}
                    <div class="group relative flex flex-col bg-white rounded-[30px] overflow-hidden shadow-sm border border-black/5 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
                        <div class="flex flex-col md:flex-row h-full">
                            {{-- Content Side --}}
                            <div class="flex-1 p-10 sm:p-6 xs:p-4 flex flex-col justify-between relative z-10">
                                <div>
                                    {{-- Hexagon Logo Style --}}
                                    <div class="relative w-16 h-16 mb-8">
                                        <div class="absolute inset-0 bg-[#2453df] rotate-45 rounded-xl opacity-10"></div>
                                        <div class="absolute inset-0 border-2 border-[#2453df]/20 rotate-45 rounded-xl"></div>
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <x-lucide-box class="w-8 h-8 text-[#2453df]" />
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <span class="text-[13px] font-black uppercase tracking-[0.3em] text-[#2453df]">ТехПолімер</span>
                                        <span class="text-[13px] font-bold uppercase tracking-[0.3em] text-slate-400">Маркет</span>
                                    </div>

                                    <h3 class="text-3xl font-black text-[#0b2f7a] leading-tight mb-4">
                                        Технічні полімери та промислові матеріали
                                    </h3>

                                    <p class="text-slate-500 leading-relaxed mb-8">
                                        Спеціалізований retail та B2B-проєкт для технічних полімерів, компаундів та промислових матеріалів.
                                    </p>
                                </div>

                                <div class="mt-auto">
                                    <a href="https://techpolymersmarket.com/" target="_blank"
                                        class="inline-flex items-center gap-4 bg-[#2453df] text-white px-8 py-4 sm:px-6 sm:py-3 xs:px-4 xs:py-2.5 xs:text-xs rounded-2xl font-bold uppercase tracking-wide transition-all duration-300 hover:bg-[#0b2f7a] hover:shadow-xl active:scale-95 group/btn">
                                        <span>Перейти на сайт</span>
                                        <x-lucide-arrow-up-right class="w-5 h-5 transition-transform duration-300 group-hover/btn:translate-x-1 group-hover/btn:-translate-y-1" />
                                    </a>
                                    <div class="mt-6 text-sm font-bold text-slate-400">techpolymersmarket.com</div>
                                </div>
                            </div>

                            {{-- Image Side --}}
                            <div class="md:w-[42%] relative min-h-[300px] md:min-h-full bg-slate-50">
                                <img
                                    src="{{ asset('img/block/ТехПолімерМакркет.png') }}"
                                    alt="TechPolymers Granules"
                                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110"
                                />
                                <div class="absolute inset-0 bg-gradient-to-l from-transparent via-transparent to-white/10"></div>
                                <div class="absolute inset-0 bg-[#2453df]/5"></div>
                            </div>
                        </div>
                    </div>

                    {{-- KHIMEXELEN CARD --}}
                    <div class="group relative flex flex-col bg-white rounded-[30px] overflow-hidden shadow-sm border border-black/5 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
                        <div class="flex flex-col md:flex-row h-full">
                            {{-- Content Side --}}
                            <div class="flex-1 p-10 sm:p-6 xs:p-4 flex flex-col justify-between relative z-10">
                                <div>
                                    {{-- Logo Style --}}
                                    <div class="relative w-16 h-16 mb-8">
                                        <div class="absolute inset-0 bg-[#f0b51d] rotate-[15deg] rounded-2xl opacity-10"></div>
                                        <div class="absolute inset-0 border-2 border-[#f0b51d]/20 rotate-[15deg] rounded-2xl"></div>
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <x-lucide-flower class="w-8 h-8 text-[#f0b51d]" />
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <span class="text-[13px] font-black uppercase tracking-[0.3em] text-[#f0b51d]">Хімекселен</span>
                                    </div>

                                    <h3 class="text-3xl font-black text-[#0b2f7a] leading-tight mb-4">
                                        Товари для<br>бджільництва
                                    </h3>

                                    <p class="text-slate-500 leading-relaxed mb-8">
                                        Спеціалізований retail-проєкт для пасічних господарств та бджільництва.
                                    </p>
                                </div>

                                <div class="mt-auto">
                                    <a href="https://bee.lg.ua/" target="_blank"
                                        class="inline-flex items-center gap-4 bg-[#f0b51d] text-white px-8 py-4 sm:px-6 sm:py-3 xs:px-4 xs:py-2.5 xs:text-xs rounded-2xl font-bold uppercase tracking-wide transition-all duration-300 hover:bg-[#d9a31a] hover:shadow-xl active:scale-95 group/btn">
                                        <span>Перейти на сайт</span>
                                        <x-lucide-arrow-up-right class="w-5 h-5 transition-transform duration-300 group-hover/btn:translate-x-1 group-hover/btn:-translate-y-1" />
                                    </a>
                                    <div class="mt-6 text-sm font-bold text-slate-400">bee.lg.ua</div>
                                </div>
                            </div>

                            {{-- Image Side --}}
                            <div class="md:w-[42%] relative min-h-[300px] md:min-h-full bg-amber-50">
                                <img
                                    src="{{ asset('img/block/Хімекселен__002.png') }}"
                                    alt="Beekeeping"
                                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110"
                                />
                                <div class="absolute inset-0 bg-gradient-to-l from-transparent via-transparent to-white/10"></div>
                                <div class="absolute inset-0 bg-[#f0b51d]/5"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>




    </div>
@endsection
