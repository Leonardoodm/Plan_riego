@extends('layouts.app')

@section('titulo')
    Usuarios Registrados
@endsection


@section('contenido')

<div class="container flex justify-center mx-auto">
  <div class="flex flex-col">
    <div class="w-full">
      <div class="border-b border-gray-200 shadow">
        <table class="divide-y divide-green-400 ">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-6 py-2 text-xs text-gray-500">
                ID
              </th>
              <th class="px-6 py-2 text-xs text-gray-500">
                Username
              </th>
              <th class="px-6 py-2 text-xs text-gray-500">
                Name
              </th>
              <th class="px-6 py-2 text-xs text-gray-500">
                Email
              </th>
              <th class="px-6 py-2 text-xs text-gray-500">
                role
              </th>
              <th class="px-6 py-2 text-xs text-gray-500">
                Edit
              </th>
              <th class="px-6 py-2 text-xs text-gray-500">
                Delete
              </th>
            </tr>
          </thead>
          
            <tbody>
                @foreach ($usuarios as $usuario)
                    
                
            <tr class="whitespace-nowrap">
              <td class="px-6 py-4 text-sm text-gray-500">
              {{$usuario->id}}
              </td>
              <td class="px-6 py-4">
                <div class="text-sm text-gray-900">
                {{$usuario->username}}
                </div>
              </td>
              <td class="px-6 py-4">
                <div class="text-sm text-gray-500">
                {{$usuario->name}}
                </div>
              </td>
              <td class="px-6 py-4">
                <div class="text-sm text-gray-500">
                {{$usuario->email}}
                </div>
              </td>
              <td class="px-6 py-4">
                <div class="text-sm text-gray-500">
                {{$usuario->role}}
                </div>
              </td>

              <!--modal agregar para poder darle una alternativa!--->
              <form action="{{route('users.destroy',$usuario->id)}}" method="POST">
              <td class="px-6 py-4">
                <a href="users/{{$usuario->id}}/edit">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-6 h-6 text-blue-400"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                    />
                  </svg>
                </a>
              </td>
              
               @csrf
              @method('DELETE')
              <td class="px-6 py-4">
                     <button type="submit">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-6 h-6 text-red-400"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                    
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                    />
                  </svg>
                  </button>
                </form>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection