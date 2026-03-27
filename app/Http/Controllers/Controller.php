<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //criando a minha index

    public function index(){
        return view('user.index');
    }
}
