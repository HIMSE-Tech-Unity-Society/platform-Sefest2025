<?php

namespace App\Livewire;

use App\Livewire\Forms\FormWorkshopCreate;
use App\Models\Form;
use App\Models\RegistrationWorkshop as ModelsRegistrationWorkshop;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

#[Title('Registration Workshop')]
class RegistrationWorkshop extends Component
{
    use WithFileUploads;

    public FormWorkshopCreate $form;
    public $pdfload;
    public $success = false;
    public $isClosed;
    public function render()
    {
        if ($this->form->proof_of_payment) {
            $this->pdfload = null;
        }
        return view('livewire.registration-workshop');
    }
    public function mount(){
        $this->isClosed = Form::find(1)->isClosed;
        $this->form->name = session()->get('form_workshop.name', '');
        $this->form->email = session()->get('form_workshop.email', '');
        $this->form->institution = session()->get('form_workshop.institution', '');
        $this->form->phone = session()->get('form_workshop.phone', '');
        $this->form->referral_source = session()->get('form_workshop.referral_source', '');
        $this->form->participant_category = session()->get('form_workshop.participant_category', '');
        $this->pdfload = null;
        $pdfload = session()->get('form_workshop.proof_of_payment', null);
        if ($pdfload) {
            $filename = json_decode($pdfload, true)['path'];
            if(Storage::disk('local')->exists('livewire-tmp/'.$filename)){
                $this->pdfload = json_decode($pdfload, true);
            }
        }
    }
    public function save(){
        if ($this->isClosed == 1) {
            return;
        }
        if (!$this->form->proof_of_payment) {
            $this->form->proof_of_payment = $this->pdfload;
        }
        $this->validate();
        if($this->form->proof_of_payment instanceof \Livewire\Features\SupportFileUploads\TemporaryUploadedFile){
            $filePath = Str::random(10).'.'.$this->form->proof_of_payment->extension();
            $this->form->proof_of_payment->storeAs('payments', $filePath, 'public');

        }else{
            $filenama = $this->form->proof_of_payment['path'];
            $extension = pathinfo($filenama)['extension'];
            $filePath = Str::random(10).'.'.$extension;
            Storage::disk('public')->put('payments/'.$filePath, Storage::disk('local')->get('livewire-tmp/'.$filenama));
        }
        ModelsRegistrationWorkshop::create([
            'full_name' => $this->form->name,
            'email' => $this->form->email,
            'institution' => $this->form->institution,
            'phone' => $this->form->phone,
            'referral_source' => $this->form->referral_source,
            'participant_category' => $this->form->participant_category,
            'proof_of_payment' => $filePath
        ]);
        $this->resetform();
        $this->success = true;
    }
    public function resetform(){
        session()->forget('form_workshop');
        $this->form->proof_of_payment = null;
        $this->pdfload = null;
        $this->form->name = '';
        $this->form->email = '';
        $this->form->institution = '';
        $this->form->phone = '';
        $this->form->referral_source = '';
        $this->form->participant_category = '';

    }
    public function arsip(){
        session(['form_workshop.name' => $this->form->name]);
        session(['form_workshop.email' => $this->form->email]);
        session(['form_workshop.institution' => $this->form->institution]);
        session(['form_workshop.phone' => $this->form->phone]);
        session(['form_workshop.referral_source' => $this->form->referral_source]);
        session(['form_workshop.participant_category' => $this->form->participant_category]);
        if ($this->form->proof_of_payment) {
            $json = [
                "path" =>  $this->form->proof_of_payment->getFilename(),
                "originalname" => $this->form->proof_of_payment->getClientOriginalName()
            ];
            session(['form_workshop.proof_of_payment' => json_encode($json)]);
        };
    }
    public function deletepdf(){
        session(['form_workshop.proof_of_payment' => null]);
        $this->form->proof_of_payment = null;
        $this->pdfload = null;
    }

}
