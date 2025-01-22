<?php

namespace App\Livewire;

use App\Livewire\Forms\FormCompetitionCreate;
use App\Models\Form;
use App\Models\RegistrationCompetition as ModelsRegistrationCompetition;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Registration Competition')]
class RegistrationCompetition extends Component
{
    public FormCompetitionCreate $form;
    public $member = [];
    public $typecompetition;
    public $success = false;
    public $isClosed;
    public function mount(){
        $this->isClosed = Form::find(1)->isClosed;
        $member = [
            ["name" => "", "asalsekolah" => ""],
            ["name" => "", "asalsekolah" => ""],
            ["name" => "", "asalsekolah" => ""],
        ];
        $this->form->typecompetition = session()->get('form_data.typecompetition', 'webdev');
        $this->form->team = session()->get('form_data.team', '');
        $this->form->email = session()->get('form_data.email', '');
        $this->form->member = session()->get('form_data.member');
        $this->form->phone = session()->get('form_data.phone', '');
        $this->form->drive = session()->get('form_data.drive', '');
        $this->member = $this->form->member ? json_decode($this->form->member) : $member;
        $this->typecompetition = $this->form->typecompetition;
    }

    public function updatedTypecompetition()
    {
        if ($this->typecompetition == "webdev") {
            $this->member = [
                ["name" => "", "asalsekolah" => ""],
                ["name" => "", "asalsekolah" => ""],
                ["name" => "", "asalsekolah" => ""],
            ];
        }else{
            $this->member = [
                ["name" => "", "asalsekolah" => ""],
            ];
        }
    }
    public function render()
    {
        return view('livewire.registration-competition');
    }
    public function save(){
        if ($this->isClosed == 1) {
            return;
        }
        $this->form->member = $this->member;
        // dd($this->form->member);
        $this->form->typecompetition = $this->typecompetition;
        $this->validate();
        // belom ditambahin error anjay
        ModelsRegistrationCompetition::create([
            "type" => $this->form->typecompetition,
            "team" => $this->form->team,
            "gmail" => $this->form->email,
            "phone" => $this->form->phone,
            "drive" => $this->form->drive,
            "member" => json_encode($this->form->member),
        ]);
        $this->resetform();
        $this->success = true;
    }
    public function arsip(){
        $this->form->member = $this->member;
        $this->form->typecompetition = $this->typecompetition;
        // dd($this->form->member);
        session(['form_data.team' => $this->form->team]);
        session(['form_data.email' => $this->form->email]);
        session(['form_data.phone' => $this->form->phone]);
        session(['form_data.drive' => $this->form->drive]);
        session(['form_data.typecompetition' => $this->form->typecompetition]);
        session(['form_data.member' => json_encode($this->form->member)]);
    }
    public function resetform(){
        session()->forget('form_data');
        $this->member = [
            ["name" => "", "asalsekolah" => ""],
            ["name" => "", "asalsekolah" => ""],
            ["name" => "", "asalsekolah" => ""],
        ];
        $this->typecompetition = 'webdev';
        $this->form->typecompetition = $this->typecompetition;
        $this->form->phone = '';
        $this->form->drive = '';
        $this->form->member = $this->member;
        $this->form->team = '';
        $this->form->email = '';
    }
}
