<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Form;

class FormCompetitionCreate extends Form
{
    public $typecompetition;
    public $email;
    public $phone;
    public $member;
    public $drive;
    public $team;

    public function rules(){
        $rules = [
            "typecompetition" => ["required"],
            "team" => ['required'],
            "email" => ["required"],
            "phone" => ["required", 'numeric'],
            "member" => ["required"],
            "member.*.name" => ["required"],
            "member.*.asalsekolah" => ["required"],
            "drive" => ["required"]
        ];

        return $rules;
    }
    protected function messages()
    {
        return [
            'typecompetition.required' => 'jenis lomba harus diisi',
            'team.required' => 'Nama team harus diisi',
            'email.required' => 'Alamat email harus diisi',
            'phone.required' => 'Nomor telephone harus diisi',
            'phone.numeric' => 'Nomor telphone harus angka',
            'member.required' => 'Member harus diisi',
            'member.*.name.required' => 'Nama harus diisi',
            'member.*.asalsekolah.required' => 'Asal Sekolah harus diisi',
            'drive' => 'link google drive harus diisi',
        ];
    }
}
