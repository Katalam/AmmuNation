<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Facades\CartFacade as Cart;

class ProductIndex extends Component
{
    public $products;
    public $input;

    public function render()
    {
        if ($this->input != null)
        {
            $searchTerm = '%' . $this->input . '%';
            $this->products = Product::where('name', 'like', $searchTerm)->orderBy('name')->get();
        }
        else
        {
            $this->products = Product::orderBy('name')->get();
        }
        return view('livewire.product-index');
    }

    public function addToCart(int $productId)
    {
        Cart::add(Product::where('id', $productId)->first());
        $this->emit('productAdded');
    }
}
