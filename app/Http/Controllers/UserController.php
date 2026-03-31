<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //criando a minha index

    public function index(){

        $users = User::all();

        return view('user.index', compact('users'));
    }

    public function create(Request $request){

        return view('auth.create');
    }

    public function store(Request $request){
        
        dd($request);

    }
}
