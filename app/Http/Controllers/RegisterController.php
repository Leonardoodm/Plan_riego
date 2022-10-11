<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        
        return view('auth.Register');
    }

    public function store(Request $request){

       //Modificar el request
       $request->request->add(['username' => Str::slug($request->username)]);
        //validacion
        $this->validate($request,[
            'name' => 'required',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:8'
        ]);
            //Datos del registro requeridos
        User::create([
            'name' => $request-> name,
            'username' => $request->username, // Str es el nombre de la clase y con lower vuelve todos los caracteres a minusculas y Slug te hace el caracter tipo url 
            'email' => $request-> email,
            'password' => Hash::make ($request-> password), //funcion Hash hace que se incripten las passwords se llaman helpers Hash es el nombre de la clase
        ]);
        //autenticar usuarios
         /*  auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);*/
           // otra forma de autenticar 
        auth()->attempt($request->only('email','password'));   
            

        //Redirecionar al usuario
            return redirect()->route('posts.index');
    }
}
