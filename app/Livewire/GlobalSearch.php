<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\App;
use Livewire\Component;

class GlobalSearch extends Component
{
    public string $search = '';

    public function getProductsProperty()
    {
        if (strlen($this->search) < 2) {
            return [];
        }

        $locale = App::getLocale();

        return Product::query()
            ->where("name->{$locale}", 'like', '%'.$this->search.'%')
            ->take(5)
            ->get();
    }

    public function render()
    {
        return view('livewire.global-search');
    }
}
