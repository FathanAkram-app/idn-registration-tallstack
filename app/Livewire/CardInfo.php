<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class CardInfo extends Component
{
    public $kuotas;
    public $cabang_names;
    public $cabang_id = 1;

    function getKuota() {
        $this->kuotas = DB::table('programs')
            ->leftjoin('idn_branch_programs','programs.id', '=', 'idn_branch_programs.programs_id')
            ->leftjoin('idn_brances', 'idn_brances.id', '=', 'idn_branch_programs.idn_brances_id')
            ->select('programs.name', 'idn_branch_programs.quota', 'idn_branch_programs.programs_id')
            ->where('idn_branch_programs.idn_brances_id', '=', $this->cabang_id)
            ->get();
    }
    

    public function render()
    {
        $this->getKuota();
        
        $this->cabang_names = DB::table('idn_brances')->get();
        return view('livewire.card-info');
    }
}
