<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\InviteCode;

class InviteCodeIndex extends Component
{
    public $invite_codes;
    public $input;

    public function render()
    {
        if ($this->input != null)
        {
            $searchTerm = '%' . $this->input . '%';
            $this->invite_codes = InviteCode::with('user')->where('code', 'like', $searchTerm)->orderBy('used_by')->get();
        }
        else
        {
            $this->invite_codes = InviteCode::with('user')->orderBy('used_by')->get();
        }
        return view('livewire.invite-code-index');
    }
}
