<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\App;
use Livewire\Component;

class HeaderSearch extends Component
{
    public $query = '';

    public function render()
    {
        $products = collect();

        if (strlen($this->query) >= 2) {
            $locale = App::getLocale();
            $products = Product::where("name->{$locale}", 'like', '%'.$this->query.'%')
                ->limit(6)
                ->get();
        }

        return view('livewire.header-search', compact('products'));
    }
}
