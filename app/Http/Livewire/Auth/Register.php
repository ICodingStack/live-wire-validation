<?php

namespace App\Http\Livewire\Auth;

use App\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name ="";
    public $email ="";
    public $passwod ="";
    public $confirmPassword ="";
    public function register(){
        User::create([
            'name' => $this->name,
            'email' =>$this->email,
            'password' => Hash::make($this->passwod)
        ]);
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
