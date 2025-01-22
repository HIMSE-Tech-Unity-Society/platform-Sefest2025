<?php

namespace App\Livewire\Admin;

use App\Models\Form;
use App\Models\RegistrationCompetition;
use App\Models\RegistrationWorkshop;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard')]
#[Layout('components.layouts.admin')]
class Dashboard extends Component
{
    public $peserta = [];
    public $lomba;
    public $workshop;
    public $oldForm;
    public function mount(){
        $jumlahworkshop = RegistrationWorkshop::all()->count();
        $jumlahkompetisi = RegistrationCompetition::all()->count();
        $oldForm = Form::all()->pluck('isClosed');
        $this->oldForm = [
            0 => $oldForm[0] ? false : true,
            1 => $oldForm[1] ? false : true
        ];
        $this->lomba = $this->oldForm[0] ? true : false;
        $this->workshop = $this->oldForm[1] ? true : false;

        $this->peserta = [
            "jumlahworkshop" => $jumlahworkshop,
            "jumlahkompetisi" => $jumlahkompetisi
        ];
    }
    public function save(){
        if($this->oldForm[0] != $this->lomba){
            $hasil  = $this->lomba ? 0 : 1;
            $d = Form::find(1);
            $d->update([
                "isClosed" => $hasil
            ]);
        }
        if($this->oldForm[1] != $this->workshop){
            $hasil  = $this->lomba ? 0 : 1;
            $d = Form::find(2);
            $d->update([
                "isClosed" => $hasil
            ]);
        }
    }
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
