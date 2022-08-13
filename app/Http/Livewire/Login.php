<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;


class Login extends Component
{
    public $cerrarsesion;
    public $users, $username, $password, $name;
    public $estado = false;

    public function render()
    {

        return view('livewire.login');
    }

    private function resetInputFields(){

        $this->name = '';
        $this->username = '';
        $this->password = '';

    }

    public function login(){

        session_start();
        if (isset($_SESSION['nombreusuario'])){
            return redirect()->route('homeini');
        }
        
        if (isset($_SESSION['token'])){
            return redirect()->route('homeini');
        }

        session(['user' => $this->username]);

        Validator::extend('without_spaces', function($attr, $value){
            return preg_match('/^\S/', $value);
        });
        
        $validatedDate = $this->validate([
            'username' => 'required|without_spaces',
            'password' => 'required|without_spaces',
        ],
        [
            'without_spaces' => 'Los espacios en blanco al inicio no son permitidos',
            'required' => 'Se requiere que llene este campo'
        ]);

        // Login
        $loginuser = HTTP::asForm()->POST('https://farmecc.herokuapp.com/api/public/user/login',[
            'username'=>$this->username,
            'password'=>$this->password,
       
        ]);
        //Tokens: acces_token & refresh_token
        $loginArray = $loginuser->json();
        
        
        if($loginArray){
            $token = $loginArray['acces_token'];
            if (!isset($_SESSION['nombreusuario'])){
            $_SESSION['nombreusuario'] = $this->username;
            $_SESSION['token'] = $token; // Si tiene valor de token
            //dd($_SESSION['token']);
            session()->flash('message', "Inicio de sesión exitoso");
            config(['varglobales.varlogout' => true]);
            $usern= session('user');
            $estado=true;
            }
            return redirect()->route('homeini');
        }else{
            session()->flash('error', 'El usuario/contraseña no son correctos');
        }
        
        
    }
}
