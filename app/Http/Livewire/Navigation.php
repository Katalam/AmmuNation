<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\Route;

class Navigation extends Component
{
    public $cartTotal = 0;
    public $currentRouteName;

    protected $listeners = [
        'productAdded' => 'updateCartTotal',
        'productRemoved' => 'updateCartTotal',
        'clearCart' => 'updateCartTotal'
    ];

    public function mount()
    {
        $this->cartTotal = count(Cart::get()['products']);
        $this->currentRouteName = Route::currentRouteName();
    }

    public function render()
    {
        return view('livewire.navigation');
    }

    public function updateCartTotal(): void
    {
        $this->cartTotal = count(Cart::get()['products']);
    }
}
