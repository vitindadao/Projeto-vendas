<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6'
    ];

    protected $message = [
        'email.required' => 'informe seu email',
        'email.email' => 'formato de email invalido',
        'password.required' => 'senha obrigatória'
    ];

    public function login(){
        $this->validate();

        if(Auth::attempt(['email' => $this->email,
        'password' => $this->password])){
            session()->regenerate();
           
            if(Auth::user()->user_type === 'admin'){
                return redirect()->route('admin.dashboard');
            }
            if(Auth::user()->user_type === 'funcionario'){
                return redirect()->route('funcionario.dashboard');
        }
    }

    session()->flash('error', 'Email ou senha incorretos');
}

    public function render()
    {

        return view('livewire.auth.login');
    }
}

