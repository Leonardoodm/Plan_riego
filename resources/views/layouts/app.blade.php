<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titulo')</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        @vite('resources/css/app.css')
    </head>

    <body class="bg-gray-100 text-gray-800">

        <nav class="flex py-5 bg-gray-500 text-white">
            <div class="w-1/2 px-12 mr-auto">
                <p class="text-2xl font-bold">My Application</p>
            </div>
        </nav>
      
     @yield('contenido')
    </body>
</html>