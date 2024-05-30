<?php

namespace App\Livewire;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class RegistrationForm extends Component
{
    public $cabangs;
    public function render()
    {
        $this->cabangs = DB::table('quota_idn_brances')->get();
        return view('livewire.registration-form');
    }
}
