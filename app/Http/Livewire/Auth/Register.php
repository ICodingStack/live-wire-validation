<?php

namespace App\Http\Livewire\Auth;

use App\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name ="";
    public $email ="";
    public $password ="";
    public $confirmPassword ="";
    public function register(){

        $this->validate([
            'name'=>'required|min:10',
            'email' =>'required|email|unique:users',
            'password' =>'required|min:6|same:confirmPassword'
        ]);
        User::create([
            'name' => $this->name,
            'email' =>$this->email,
            'password' => Hash::make($this->password)
        ]);
        return redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
