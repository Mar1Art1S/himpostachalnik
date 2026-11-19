<footer class="relative overflow-hidden bg-[#031B52] text-white">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none opacity-20">
        <div class="absolute top-0 right-0 w-[450px] h-[450px] bg-blue-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-[350px] h-[350px] bg-yellow-400/10 rounded-full blur-3xl"></div>
    </div>

    <div class="relative z-10">

        {{-- TOP SECTION --}}
        <div class="grid grid-cols-5 border-b tg:grid-cols-2 sf:grid-cols-1 border-white/10">

            {{-- BRAND --}}
            <div class="px-8 rg:px-5 tg:px-8 sf:px-4 py-10 xs:py-6 border-r tg:border-b sf:border-r-0 border-white/10">

                <a href="{{ route('main') }}">
                    <img src="{{ asset('img/2_logo/Logo_new.png') }}" alt="HIMPOST" class="w-[220px]">
                </a>

                <p class="mt-7 text-[15px] leading-8 text-blue-100">
                    {{ __('footer.foo_brand_desc') }}
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
            <div class="px-8 rg:px-5 tg:px-8 sf:px-4 py-10 xs:py-6 border-r tg:border-r-0 tg:border-b border-white/10">

                <h3 class="text-sm font-bold tracking-wide text-yellow-400 uppercase mb-7">
                    {{ __('footer.foo_contacts_title') }}
                </h3>

                <div class="space-y-7">

                    <div>
                        <div class="mb-2 text-xs text-blue-200">
                            {{ __('footer.foo_reception') }}
                        </div>

                        <a href="tel:+380503403547"
                            class="text-[22px] rg:text-[19px] tg:text-[22px] sm:text-[18px] xs:text-[16px] font-bold tracking-wide leading-none hover:text-yellow-400 transition-colors whitespace-nowrap">
                            +38 (050) 340-35-47
                        </a>
                    </div>

                    <div>
                        <div class="mb-2 text-xs text-blue-200">
                            {{ __('footer.foo_tech_logistics') }}
                        </div>

                        <a href="tel:+380503403547"
                            class="text-[22px] rg:text-[19px] tg:text-[22px] sm:text-[18px] xs:text-[16px] font-bold tracking-wide leading-none hover:text-yellow-400 transition-colors whitespace-nowrap">
                            +38 (050) 340-35-47
                        </a>
                    </div>

                    <div>
                        <div class="mb-2 text-xs text-blue-200">
                            {{ __('footer.foo_address') }}
                        </div>

                        <a href="mailto:director@himpost.com"
                            class="text-[16px] text-yellow-300 hover:text-yellow-400 transition-colors break-all">
                            director@himpost.com
                        </a>
                    </div>

                </div>

            </div>

            {{-- LEGAL --}}
            <div class="px-8 rg:px-5 tg:px-8 sf:px-4 py-10 xs:py-6 border-r tg:border-b sf:border-r-0 border-white/10">

                <h3 class="text-sm font-bold tracking-wide text-yellow-400 uppercase mb-7">
                    {{ __('footer.foo_legal_title') }}
                </h3>

                <div class="text-[15px] leading-8 text-blue-100">
                    {!! __('footer.foo_legal_address_html') !!}
                </div>

            </div>

            {{-- FACT --}}
            <div class="px-8 rg:px-5 tg:px-8 sf:px-4 py-10 xs:py-6 border-r tg:border-r-0 tg:border-b border-white/10">

                <h3 class="text-sm font-bold tracking-wide text-yellow-400 uppercase mb-7">
                    {{ __('footer.foo_actual_title') }}
                </h3>

                <div class="text-[15px] leading-8 text-blue-100">
                    {!! __('footer.foo_actual_address_html') !!}
                </div>

            </div>

            {{-- PROJECTS --}}
            <div class="px-6 rg:px-4 tg:px-8 sf:px-4 py-10 xs:py-6 tg:col-span-2 sf:col-span-1">

                <h3 class="text-sm font-bold tracking-wide text-yellow-400 uppercase mb-7">
                    {{ __('footer.foo_retail_title') }}
                </h3>

                <div class="grid grid-cols-1 gap-4 tg:grid-cols-2 sf:grid-cols-1">

                    {{-- BEE --}}
                    <a href="https://bee.lg.ua/" target="_blank"
                        class="group flex items-center gap-4 p-4 rounded-2xl border border-yellow-400/10 bg-white/[0.03] hover:border-yellow-400/40 hover:bg-white/[0.06] transition-all">

                        <div class="min-w-0">

                            <div class="text-[16px] font-bold text-white group-hover:text-yellow-300 transition-colors">
                                {{ __('footer.foo_bee_title') }}
                            </div>

                            <div class="text-[12px] text-yellow-300 mt-1">
                                {{ __('footer.foo_bee_desc') }}
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
                                {{ __('footer.foo_tech_title') }}
                            </div>

                            <div class="text-[12px] text-blue-300 mt-1">
                                {{ __('footer.foo_tech_desc') }}
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
        <div class="grid grid-cols-4 border-b tg:grid-cols-2 sf:grid-cols-1 border-white/10">

            <div class="flex gap-4 px-8 border-r xs:gap-3 rg:px-5 tg:px-8 sf:px-4 py-7 xs:py-5 tg:border-b sf:border-r-0 border-white/10">

                <div class="text-3xl text-yellow-400 shrink-0">
                    ✓
                </div>

                <div>
                    <div class="text-[17px] font-semibold">
                        {{ __('footer.foo_benefit_quality_title') }}
                    </div>

                    <p class="mt-2 text-[13px] leading-7 text-blue-100">
                        {{ __('footer.foo_benefit_quality_desc') }}
                    </p>
                </div>

            </div>

            <div class="flex gap-4 px-8 border-r xs:gap-3 rg:px-5 tg:px-8 sf:px-4 py-7 xs:py-5 tg:border-r-0 tg:border-b border-white/10">

                <div class="text-3xl text-yellow-400 shrink-0">
                    ⚗
                </div>

                <div>
                    <div class="text-[17px] font-semibold">
                        {{ __('footer.foo_benefit_tech_title') }}
                    </div>

                    <p class="mt-2 text-[13px] leading-7 text-blue-100">
                        {{ __('footer.foo_benefit_tech_desc') }}
                    </p>
                </div>

            </div>

            <div class="flex gap-4 px-8 border-r xs:gap-3 rg:px-5 tg:px-8 sf:px-4 py-7 xs:py-5 sf:border-r-0 sf:border-b border-white/10">

                <div class="text-3xl text-yellow-400 shrink-0">
                    🚚
                </div>

                <div>
                    <div class="text-[17px] font-semibold">
                        {{ __('footer.foo_benefit_logistics_title') }}
                    </div>

                    <p class="mt-2 text-[13px] leading-7 text-blue-100">
                        {{ __('footer.foo_benefit_logistics_desc') }}
                    </p>
                </div>

            </div>

            <div class="flex gap-4 px-8 xs:gap-3 rg:px-5 tg:px-8 sf:px-4 py-7 xs:py-5">

                <div class="text-3xl text-yellow-400 shrink-0">
                    🤝
                </div>

                <div>
                    <div class="text-[17px] font-semibold">
                        {{ __('footer.foo_benefit_partner_title') }}
                    </div>

                    <p class="mt-2 text-[13px] leading-7 text-blue-100">
                        {{ __('footer.foo_benefit_partner_desc') }}
                    </p>
                </div>

            </div>

        </div>

        {{-- BOTTOM --}}
        <div class="flex flex-row items-center justify-between gap-6 px-8 sf:flex-col xs:px-4 py-7 xs:py-5">

            <div class="text-[14px] text-blue-200">
                {{ __('footer.foo_copyright', ['year' => date('Y')]) }}
            </div>

        </div>

    </div>

</footer>
