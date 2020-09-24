<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product;
    public $currency;

    public function mount(Product $product)
    {
        $this->currency = "Rp " . number_format($product->price,2,',','.');

        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.product-detail');
    }
}
