<?php

namespace App\Helper;

use App\Models\Product;

class Cart
{
    public function __construct()
    {
        if ($this->get() == null)
            $this->set($this->empty());
    }

    public function add(Product $product)
    {
        $cart = $this->get();
        array_push($cart['products'], $product);
        $this->set($cart);
    }

    public function remove(int $productId)
    {
        $cart = $this->get();
        array_splice($cart['products'], array_search($productId, array_column($cart['products'], 'id')), 1);
        $this->set($cart);
    }

    public function clear()
    {
        $this->set($this->empty());
    }

    public function empty()
    {
        return [
            'products' => [],
        ];
    }

    public function get()
    {
        return request()->session()->get('cart');
    }

    public function set($cart)
    {
        request()->session()->put('cart', $cart);
    }
}
