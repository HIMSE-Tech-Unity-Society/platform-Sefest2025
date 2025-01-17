<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Form;

class FormWorkshopCreate extends Form
{
    public $name;
    public $email;
    public $institution;
    public $phone;
    public $referral_source;
    public $participant_category;
    public $proof_of_payment;

    public function rules(){
        if($this->proof_of_payment instanceof \Livewire\Features\SupportFileUploads\TemporaryUploadedFile){
            $rules = [
                "name" => ["required"],
                "email" => ["required"],
                "institution" => ["required"],
                "phone" => ["required", 'numeric'],
                "referral_source" => ["required"],
                "participant_category" => ["required"],
                "proof_of_payment" => ['required', 'mimes:pdf', 'max:10000']
            ];
        }else{
            $rules = [
                "name" => ["required"],
                "email" => ["required"],
                "institution" => ["required"],
                "phone" => ["required", 'numeric'],
                "referral_source" => ["required"],
                "participant_category" => ["required"],
                "proof_of_payment" => ['required']
            ];

        }

        return $rules;
    }
    protected function messages(){
        if($this->proof_of_payment instanceof \Livewire\Features\SupportFileUploads\TemporaryUploadedFile){
            return [
                'name.required' => 'Nama lengkap harus harus diisi',
                'email.required' => 'Alamat email harus diisi',
                'phone.required' => 'Nomor telephone harus diisi',
                'phone.numeric' => 'Nomor telphone harus angka',
                'institution.required' => 'Institusi / Asal Sekolah harus diisi',
                'referral_source.required' => 'Pilihan ini harus diisi',
                'participant_category.required' => 'Pilihan ini harus diisi',
                'proof_of_payment.required' => 'bukti harus diisi',
                'proof_of_payment.mimes' => 'file harus pdf',
                'proof_of_payment.max' => 'Maximal file kurang dari 10mb'
            ];
        }else{
            return [
                'name.required' => 'Nama lengkap harus harus diisi',
                'email.required' => 'Alamat email harus diisi',
                'phone.required' => 'Nomor telephone harus diisi',
                'phone.numeric' => 'Nomor telphone harus angka',
                'institution.required' => 'Institusi / Asal Sekolah harus diisi',
                'referral_source.required' => 'Pilihan ini harus diisi',
                'participant_category.required' => 'Pilihan ini harus diisi',
                'proof_of_payment.required' => 'bukti harus diisi',
            ];
        }
    }
}
