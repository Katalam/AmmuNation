<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CustomerIndex extends Component
{
    public $customers;
    public $input;

    public function render()
    {
        if ($this->input != null)
        {
            $searchTerm = '%' . $this->input . '%';
            $this->customers = Customer::where('name', 'like', $searchTerm)->orderBy('name')->get();
        }
        else
        {
            $this->customers = Customer::orderBy('name')->get();
        }
        return view('livewire.customer-index');
    }
}
