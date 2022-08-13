<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public $cerrarsesion;

    public function index()
    {
        return view('welcome', compact('usuarioingresado'));
    }
}
