<?php

namespace App\Livewire;
use Illuminate\Support\Facades\DB;

use Livewire\Component;
use Livewire\Attributes\Validate;

use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;

class RegistrationForm extends Component
{
    use WithFileUploads;

    public $cabangs;
    public $kuotas;


    #[Validate('required|string|email|max:255|unique:registered_students,email')] 
    public $emailInput;

    #[Validate('required|string|min:6|max:32')] 
    public $pwInput;

    #[Validate('required|string|min:3|max:255')]
    public $namaInput;

    public $genderInput;
    public $cabangInput = 1;

    #[Validate('required')] 
    public $programInput;

    #[Validate('image|max:1024')] 
    public $buktiTransfer;

    public $btt;

   

    function resetSelection() {
        $this->programInput = "";
    }


    function getKuota() {
        $this->kuotas = DB::table('programs')
            ->leftjoin('idn_branch_programs','programs.id', '=', 'idn_branch_programs.programs_id')
            ->leftjoin('idn_brances', 'idn_brances.id', '=', 'idn_branch_programs.idn_brances_id')
            ->select('programs.name', 'idn_branch_programs.quota', 'idn_branch_programs.id')
            ->where('idn_branch_programs.idn_brances_id', '=', $this->cabangInput)
            ->get();
    }
    function save() {
        if($this->validate()){
            $filename = $this->buktiTransfer->store(path:'buktitransfer');
            DB::table('registered_students')->insert(
                [
                    'email' => $this->emailInput, 
                    'password' => Hash::make($this->pwInput),
                    'santri_name' => $this->namaInput,
                    'gender' => $this->genderInput,
                    'idn_branch_programs_id' => $this->programInput,
                    'proof_of_transaction'=>$filename

                    
                ]
            );
            redirect(route('success'));
        }
        
        
    }
    public function render()
    {
       
        $this->cabangs = DB::table('idn_brances')->get();
        $this->getKuota();
        return view('livewire.registration-form');
    }
}
