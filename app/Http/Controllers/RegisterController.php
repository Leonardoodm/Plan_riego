<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        
        return view('auth.Register');
    }

    public function store(Request $request){

        //validacion
        $this->validate($request,[
            'name' => 'required',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required'
        ]);
    }
}
