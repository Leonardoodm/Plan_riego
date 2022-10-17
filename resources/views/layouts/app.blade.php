<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link  href="{{asset('css/app.css')}}" rel="stylesheet">
        <title>Dev - @yield('titulo')</title>
        <script src="{{('js/app.css')}}" defer></script>
        @vite('resources/css/app.css')
    </head>

    <body class = "bg-gray-100" >
    <header class = "p-5 border-b  bg-white shadow">
        <div class = "container mx-auto flex justify-between
        items-center">
            <h1 class = "text-3xl font-black">
             <a href="http://localhost/22C/plan_riego/public/">  DevStagram </a>
            </h1>
                    
            @auth
            <div class = "container mx-auto flex justify-between
        items-center">
            <div class=" sm:ml-8 sm:block">
          <div class="flex space-x-8">
            <a href="{{route('datos.index')}}" class="text-gray-500 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Datos</a>

            
                    
                    @if (auth()->user()->role == 'admin')

                  
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->

            <a href="{{route('users.index')}}" class="text-gray-500 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Usuarios</a>

            
          
            </div>
            </div>
                    <nav class = "flex gap-10 items-center" >
                     <a class= "font-bold  text-gray-600
                     text-sm " href = "{{ route('admin.index')}}" >
                     welcome: 
                     <span class="font-normal">{{ auth()->user()->role }} {{ auth()->user()->username }}</span>
                     </a> 
                    <a href="{{ route('Register')}}"> 
                     <img class="flex gap-2 items-center w-10" src="{{asset('img/registerlogo.png')}}" alt="" >
                     <p>Register</p>
                    </a> 
                    <form method="POST" action="{{ route('logout')}}">
                            @csrf
                     <button type="submit"> 
                     <img class="flex gap-2 items-center w-10" src="{{asset('img/cerrar-sesion.png')}}" alt="" >
                     <p>Logout</p>
                     </button> 
                     </form>
                    </nav>
                    @else

                    </div>
            </div>
                  
                    <nav class = "flex gap-10 items-center" >
                     <a class= "font-bold  text-gray-600
                     text-sm " href = "{{route('posts.index')}}" >
                     welcome: 
                     <span class="font-normal">{{ auth()->user()->role }} {{ auth()->user()->username }}</span>
                     </a> 
                        <form method="POST" action="{{ route('logout')}}">
                            @csrf
                     <button type="submit"> 
                     <img class="flex gap-2 items-center w-10" src="{{asset('img/cerrar-sesion.png')}}" alt="" >
                     <p>Logout</p>
                     </button> 
                     </form>
                    @endif
                    @endauth

                    @guest

                    <a href="{{route('somos')}}" class="text-gray-500 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Nosotros</a>
                    <a href="{{route('contactanos')}}" class="text-gray-500 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contactanos</a>
                    
                <nav class = "flex gap-2 items-center" >
                     <a class= "font-bold uppercase text-gray-600
                     text-sm " href = "{{route('login')}}" >
                     <img class="flex gap-2 items-center w-10" src="{{asset('img/cuenta.png')}}" alt="">
                     <p>Login</p>
                     </a>     
                </nav>
            @endguest

            
       
       
        </div>
    </header>
    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10">@yield('titulo')</h2>
        @yield('contenido')
    </main>
    
     <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
            Devstagram - Todos los derechos reservados {{now()->year}}
     </footer>
    </body>
</html>