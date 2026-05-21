<div>
    @session('order-success')
    <div class="text-center py-8 px-4 max-w-md mx-auto">
        <div class="inline-flex items-center justify-center w-16 h-16 mb-5 bg-green-100 text-green-600 rounded-full shadow-inner">
            <x-lucide-check class="w-8 h-8" />
        </div>
        <h3 class="text-2xl font-bold text-slate-900 mb-2">{{ __('order.order_sent') }}</h3>
        <p class="text-slate-600 mb-8 font-medium">{{ __('order.order_manager') }}</p>
        <button @click="modalOpen=false" type="button" 
            class="w-full py-3.5 px-6 font-semibold text-white bg-[#2453df] hover:bg-[#1a44c2] rounded-2xl shadow-lg shadow-blue-500/10 hover:shadow-blue-500/20 transition duration-200 active:scale-95">
            {{ __('order.order_сlosed') }}
        </button>
    </div>
    @else
    <form wire:submit='save' class="space-y-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            {{-- Left column: inputs --}}
            <div class="space-y-5">
                {{-- Name Input --}}
                <div>
                    <label class="block mb-2 text-sm font-semibold text-slate-700">{{ __('order.order_name') }}</label>
                    <input type="text" 
                        placeholder="{{ __('order.order_name') }}" 
                        wire:model.blur='order.fio' 
                        required 
                        class="w-full px-4 py-3 border @error('order.fio') border-red-500 focus:ring-red-200 focus:border-red-500 @else border-slate-200 focus:ring-blue-100 focus:border-blue-500 @enderror rounded-2xl focus:ring-4 outline-none text-slate-900 placeholder-slate-400 bg-white transition duration-200" />
                    @error('order.fio')
                        <p class="mt-1.5 text-xs text-red-500 flex items-center gap-1.5 font-medium">
                            <x-lucide-alert-circle class="w-4 h-4 text-red-500" />
                            <span>{{ $message }}</span>
                        </p>
                    @enderror
                </div>

                {{-- Contact Input --}}
                <div>
                    <label class="block mb-2 text-sm font-semibold text-slate-700">{{ __('order.order_phone') }}</label>
                    <input type="text" 
                        placeholder="{{ __('order.order_phone') }}" 
                        wire:model='order.contact' 
                        required 
                        class="w-full px-4 py-3 border @error('order.contact') border-red-500 focus:ring-red-200 focus:border-red-500 @else border-slate-200 focus:ring-blue-100 focus:border-blue-500 @enderror rounded-2xl focus:ring-4 outline-none text-slate-900 placeholder-slate-400 bg-white transition duration-200" />
                    @error('order.contact')
                        <p class="mt-1.5 text-xs text-red-500 flex items-center gap-1.5 font-medium">
                            <x-lucide-alert-circle class="w-4 h-4 text-red-500" />
                            <span>{{ $message }}</span>
                        </p>
                    @enderror
                </div>

                {{-- City Input --}}
                <div>
                    <label class="block mb-2 text-sm font-semibold text-slate-700">{{ __('order.order_сity') }}</label>
                    <input type="text" 
                        placeholder="{{ __('order.order_сity') }}" 
                        wire:model='order.city' 
                        class="w-full px-4 py-3 border @error('order.city') border-red-500 focus:ring-red-200 focus:border-red-500 @else border-slate-200 focus:ring-blue-100 focus:border-blue-500 @enderror rounded-2xl focus:ring-4 outline-none text-slate-900 placeholder-slate-400 bg-white transition duration-200" />
                    @error('order.city')
                        <p class="mt-1.5 text-xs text-red-500 flex items-center gap-1.5 font-medium">
                            <x-lucide-alert-circle class="w-4 h-4 text-red-500" />
                            <span>{{ $message }}</span>
                        </p>
                    @enderror
                </div>
            </div>

            {{-- Right column: textarea --}}
            <div class="flex flex-col">
                <label class="block mb-2 text-sm font-semibold text-slate-700">{{ __('order.order_description') }}</label>
                <div class="flex-1 flex flex-col">
                    <textarea 
                        placeholder="{{ __('order.order_description') }}" 
                        wire:model='order.description' 
                        class="w-full flex-1 px-4 py-3 border @error('order.description') border-red-500 focus:ring-red-200 focus:border-red-500 @else border-slate-200 focus:ring-blue-100 focus:border-blue-500 @enderror rounded-2xl focus:ring-4 outline-none text-slate-900 placeholder-slate-400 bg-white resize-none transition duration-200 min-h-[160px] lg:min-h-0"></textarea>
                </div>
                @error('order.description')
                    <p class="mt-1.5 text-xs text-red-500 flex items-center gap-1.5 font-medium">
                        <x-lucide-alert-circle class="w-4 h-4 text-red-500" />
                        <span>{{ $message }}</span>
                    </p>
                @enderror
            </div>
        </div>

        <input type="hidden" wire:model='order.product' value="{{ $product }}" />

        {{-- Buttons --}}
        <div class="flex flex-col-reverse sm:flex-row sm:justify-end gap-3 pt-5 border-t border-slate-100">
            <button @click="modalOpen=false" type="button" 
                class="w-full sm:w-auto px-6 h-12 flex items-center justify-center gap-2 font-semibold text-slate-700 bg-slate-100 hover:bg-slate-200 rounded-2xl transition duration-200 active:scale-95">
                {{ __('order.order_сancel') }}
                <x-lucide-ban class="w-4 h-4" />
            </button>
            <button type="submit" 
                class="w-full sm:w-auto px-8 h-12 flex items-center justify-center gap-2 font-semibold text-white bg-[#2453df] hover:bg-[#1a44c2] rounded-2xl shadow-lg shadow-blue-500/10 hover:shadow-blue-500/20 transition duration-200 active:scale-95">
                <span>{{ __('order.order_send') }}</span>
                <x-lucide-send class="w-4 h-4" />
            </button>
        </div>
    </form>
    @endsession
</div>
