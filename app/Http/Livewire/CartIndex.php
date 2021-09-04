<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Facades\CartFacade as Cart;

class CartIndex extends Component
{
    public $cart;

    public function mount()
    {
        $this->cart = Cart::get();
    }

    public function render()
    {
        return view('livewire.cart-index');
    }

    public function removeFromCart($productId)
    {
        Cart::remove($productId);
        $this->cart = Cart::get();
        $this->emit('productRemoved');
    }

    public function checkout()
    {
        Cart::clear();
        $this->emit('clearCart');
        $this->cart = Cart::get();
    }
}
