<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{       
    
    public function index(){
        
        
        return view('auth.login');
        
    }
    
    public function store(Request $request){

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if(!auth()->attempt($request->only('email','password'),$request->remember)){
            return back()->with('mensaje','Credenciales Incorrectas');

        }else{

            if(auth()->user()->role == 'admin'){
                return redirect()->route('admin.index');
            }else{
                return redirect()->route('posts.index', auth()->user()->username);
            }
        }

        

        
    }
}
