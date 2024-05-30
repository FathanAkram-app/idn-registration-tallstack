<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class CardInfo extends Component
{
    public $cabangs;
    public $cabang_id = 1;
    public function render()
    {
        $this->cabangs = DB::table('quota_idn_brances')->get();
        return view('livewire.card-info');
    }
}
