<div class="relative w-full" x-data="{ open: true }" @click.outside="open = false">
    <div class="relative">
        <input type="text" wire:model.live.debounce.300ms="search" @focus="open = true" placeholder="{{ __('search.search_products_placeholder') }}"
            class="w-full h-16 px-6 pr-16 text-lg transition-all border border-gray-200 outline-none rounded-2xl bg-gray-50 focus:border-blue-600 focus:ring-2 focus:ring-blue-100">

        <div class="absolute text-gray-500 transition-all -translate-y-1/2 right-5 top-1/2">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-7 h-7">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.3-4.3"></path>
            </svg>
        </div>
    </div>

    @if (strlen($search) >= 2)
        <div x-show="open" x-transition
            class="absolute z-50 w-full mt-2 overflow-hidden bg-white border border-gray-100 shadow-2xl rounded-2xl">
            @forelse($this->products as $product)
                <a href="{{ route('product.show', $product) }}"
                    class="block px-6 py-4 text-gray-700 transition border-b border-gray-50 last:border-b-0 hover:bg-blue-50 hover:text-blue-700">
                    <div class="font-semibold">{{ $product->getTranslation('name', App::getLocale()) ?? __('search.search_no_title') }}</div>
                </a>
            @empty
                <div class="px-6 py-4 text-gray-500">
                    {{ __('search.search_not_found', ['query' => $search]) }}
                </div>
            @endforelse
        </div>
    @endif
</div>
