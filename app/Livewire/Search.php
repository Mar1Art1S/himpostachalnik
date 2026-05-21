<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\Attributes\Url;
use Illuminate\Support\Facades\App;

class Search extends Component
{
  #[Url(as: 'query')]
  public ?string $search = '';

  public function mount()
  {
      if (request()->has('query')) {
          $this->search = request()->query('query');
      }
  }

  public function clear()
  {
    $this->search = '';
  }

  public function render()
  {
    $products = collect();

    if (strlen($this->search) > 3) {
      $locale = App::getLocale();
      $products = Product::where("name->{$locale}", 'like', '%'.$this->search.'%')
        ->limit(10)
        ->get();
    }

    return view('livewire.search', compact('products'));
  }
}