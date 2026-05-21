<?php

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\App;

new class extends Component {
    public string $search = '';

    public function getProductsProperty()
    {
        if (strlen($this->search) < 2) {
            return [];
        }

        $locale = App::getLocale();

        return Product::query()
            ->where("name->{$locale}", 'like', '%' . $this->search . '%')
            ->take(5)
            ->get();
    }
};
?>

<div class="relative w-full" x-data="{ open: true }" @click.outside="open = false">
    <div class="relative">
        <input type="text" wire:model.live.debounce.300ms="search" @focus="open = true" placeholder="Пошук продукції..."
            class="w-full h-16 px-6 pr-16 text-lg transition-all border border-gray-200 outline-none rounded-2xl bg-gray-50 focus:border-blue-600 focus:ring-2 focus:ring-blue-100">

        <div class="absolute text-gray-500 transition-all -translate-y-1/2 right-5 top-1/2">
            <x-lucide-search class="w-7 h-7" />
        </div>
    </div>

    @if (strlen($search) >= 2)
        <div x-show="open" x-transition
            class="absolute z-50 w-full mt-2 overflow-hidden bg-white border border-gray-100 shadow-2xl rounded-2xl">
            @forelse($this->products as $product)
                <a href="{{ route('product.show', $product) }}"
                    class="block px-6 py-4 text-gray-700 transition border-b border-gray-50 last:border-b-0 hover:bg-blue-50 hover:text-blue-700">
                    <div class="font-semibold">{{ $product->getTranslation('name', App::getLocale()) ?? 'Без назви' }}</div>
                </a>
            @empty
                <div class="px-6 py-4 text-gray-500">
                    Нічого не знайдено за запитом "{{ $search }}"
                </div>
            @endforelse
        </div>
    @endif
</div>
