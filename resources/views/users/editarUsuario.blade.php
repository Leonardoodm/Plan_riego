@extends('layouts.app')
 @section('titulo')
     Editar Usuario
 @endsection

@section ('contenido')
    <div class = "md:flex md:justify-center md:gap-4 items-center">
        <div class = "md:w-4/12 p-5" >
            <img src="{{asset('img/Register.png')}}" alt="Imagen registro de usuarios">

        </div >
        
        <div class = "md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('users.update',$usuario->id)}}" method="POST" novalidate>
                 
                @csrf
                @method('PUT')
                
                    <div class="mb-5">
                        <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                            Name
                        </label>
                        <input 
                            id="name"                        
                            name="name"
                            type="text"
                            placeholder="Tu Nombre"
                            class="border p-3 w-full rounded-lg
                            @error('name') border-red-500   
                            @enderror"
                            value="{{$usuario->name}}"
                            />
                            @error('name')
                                <p class="bg-red-500 text-white my-2
                                 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                            @enderror
                    </div>
                    <div class="mb-5">
                        <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                            Username 
                        </label>
                        <input 
                            id="username"                        
                            name="username"
                            type="text"
                            placeholder="Tu Nombre de Usuario"
                            class="border p-3 w-full rounded-lg @error('username') border-red-500   
                            @enderror"
                            value="{{$usuario->username}}"
                            />
                            @error('username')
                                <p class="bg-red-500 text-white my-2
                                 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                            @enderror
                    </div>
                    <div class="mb-5">
                        <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                            Email 
                        </label>
                        <input 
                            id="email"                        
                            name="email"
                            type="text"
                            placeholder="Tu Email de Registro"
                            class="border p-3 w-full rounded-lg @error('email') border-red-500   
                            @enderror"
                            value="{{$usuario->email}}"
                            />
                            @error('email')
                                <p class="bg-red-500 text-white my-2
                                 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                            @enderror
                    </div>
                    <div class="mb-5">
                        <label for="role" class="mb-2 block uppercase text-gray-500 font-bold">
                            Role 
                        </label>
                        <select id="role" 
                            name="role">
                            <option value="{{$usuario->role}}">{{$usuario->role}}</option>
                            <option value="admin">Administrador</option>
                            <option value="user">Usuario</option>
                            </select>
                            @error('role')
                                <p class="bg-red-500 text-white my-2
                                 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                            @enderror
                    </div>

                    
                    
                    
                      
                    <input 
                    type="submit"
                    value="Save"   
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer
                    uppercase font-bold w-full p-3 text-white rounded-lg"   
                    />

                    
                </form>
            </div>
        </div>      
@endsection
