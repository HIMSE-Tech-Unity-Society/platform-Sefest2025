<?php

namespace App\Livewire\Admin;

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
    public function mount(){
        $jumlahworkshop = RegistrationWorkshop::all()->count();
        $jumlahkompetisi = RegistrationCompetition::all()->count();
        $this->peserta = [
            "jumlahworkshop" => $jumlahworkshop,
            "jumlahkompetisi" => $jumlahkompetisi
        ];
    }
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
