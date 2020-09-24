<?php

namespace App\Http\Livewire;

use App\Category;
use App\Product;
use Livewire\Component;

class Home extends Component
{
    public $search;

    protected $queryString = ['search'];

    // public function mount()
    // {
    //     $this->search = request('search');
    // }

    public function render()
    {
        $products = Product::query();

        if ($this->search !== null) {
            $products->where('name', 'like', '%' . $this->search . '%');
        }

        return view('livewire.home', [
            'categories' => Category::get(),
            'products' => $products->paginate(12),
        ]);
    }
}
