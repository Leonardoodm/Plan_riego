@extends('layouts.app')


@section('titulo')
    principal
@endsection

@section('contenido')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200
rounded-lg shadow-lg">
    <h1 class="text-3xl text-center font-bold">Login</h1>

    <form class="mt-4" method="POST" action="{{route('Login')}}">
        <input type="email" class="border border-gray-200 rounded-b-md bg-gray-200
        w-full text-lg placeholderbg-gray-900 p-2 my-2 focus:bg-white placeholder="Email"
        id="email" name="email">

        
        <input type="password" class="border border-gray-200 rounded-b-md bg-gray-200
        w-full text-lg placeholderbg-gray-900 p-2 my-2 focus:bg-white placeholder="Password"
        id="password" name="password">

        <p class="border border-red-500 rounded-md bg-red-100 w-full
        text-red-600 p-2 my-2">
        </p>
        
        <button type="submit" class="rounded-md bg-red-600 w-full text-lg text-white font-semibold
        p-2 my-3 hover:bg-red-900">send</button>
    </form>

</div>
@endsection
