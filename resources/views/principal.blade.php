@extends('layouts.app')

@section('titulo')
   Principal
@endsection


@section('contenido')

      
      <main class="mt-10">


            <!-- Texto de Introducción (Servicios) -->
          <center>
            <p>
              En el equipo JBRANGN Intelligent Solutions contamos con los servicios de creacion, desarrollo e implementacion de software, nos enfocamos en tres principales caracteristicas fundamentales al momento de hacer nuestro trabajo 
             como lo son: 
      </p>
      </center>
          </div>
          
        </div> 

        <!-- Servicios -->
        <div class="container ml-auto mr-auto flex flex-wrap items-start mt-8">
          <div class="w-full md:w-1/2 lg:w-1/3 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
            <div class="bg-white rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
              <figure class="mb-2">
                <img src="{{asset('img/idea.png')}}" alt="" class="h-64 ml-auto mr-auto" />
              </figure>
              <div class="rounded-lg p-4 flex flex-col">
                <div>
                  <h5 class="text-2xl font-bold leading-none text-center"> Crear Soluciones </h5>
                  <p class="mt-4">
                    En JBRAN GN Intelligent Solutions nuestro trabajo es crear soluciones
                    para facilitar la vida de nuestros clientes. 
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/3 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
            <div class="bg-white rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
              <figure class="mb-2">
                <img src="{{asset('img/calidad.png')}}" alt="" class="h-64 ml-auto mr-auto" />
              </figure>
              <div class="rounded-lg p-4 flex flex-col">
                <div>
                  <h5 class="text-2xl font-bold leading-none text-center"> Productos con calidad </h5>
                  <p class="mt-4">
                    Nuestro equipo de trabajo se enfoca en desarrollar productos con la 
                    mayor calidad posible.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/3 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
            <div class="bg-white rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
              <figure class="mb-2">
                <img src="{{asset('img/seguridad.png')}}" alt="" class="h-64 ml-auto mr-auto" />
              </figure>
              <div class="rounded-lg p-4 flex flex-col">
                <div>
                  <h5 class="text-2xl font-bold leading-none text-center">  Seguridad </h5>
                  <p class="mt-4">
                    Sabemos lo importante que es mantener seguro los datos de nuestros clientes, por ello es una de las caracteristicas en las que nos enfocamos.
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div> 

 @endsection