<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

#[Title('Login page')]
class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];
    public function messages()
    {
        return [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter',
        ];
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
    public function save(){
        $credentials = $this->validate();
        if (Auth::attempt($credentials)) {
            session()->regenerate();
            return redirect()->to("/sefest");
        }
    }
}
