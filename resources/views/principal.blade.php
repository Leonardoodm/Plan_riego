@extends('layouts.app')
 @section('titulo')
     Principal
 @endsection

@section ('contenido')
 
<!-- Objetivo, Misión y Visión -->
<div class="container ml-auto mr-auto flex flex-wrap items-start mt-8">
  <div class="w-full md:w-1/2 lg:w-1/3 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
    <div class="bg-white rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
      <figure class="mb-2">
        <img src="assets/img/n1.png" alt="" class="h-64 ml-auto mr-auto" />
      </figure>
      <div class="rounded-lg p-4 flex flex-col">
        <div>
          <h5 class="text-2xl font-bold leading-none text-center"> Objetivo </h5>
          <p class="mt-4"> Donec non consequat enim. Duis maximus, dui hendrerit sollicitudin maximus, ipsum velit sodales arcu, nec ultricies metus nisi quis tortor. Nulla mauris odio, lacinia a leo ut, euismod vestibulum dolor. Praesent eget dapibus neque, non rutrum sapien. Duis malesuada nunc nec elit dignissim hendrerit. </p>
        </div>
      </div>
    </div>
  </div>
  <div class="w-full md:w-1/2 lg:w-1/3 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
    <div class="bg-white rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
      <figure class="mb-2">
        <img src="assets/img/n2.png" alt="" class="h-64 ml-auto mr-auto" />
      </figure>
      <div class="rounded-lg p-4 flex flex-col">
        <div>
          <h5 class="text-2xl font-bold leading-none text-center"> Misión </h5>
          <p class="mt-4"> Donec non consequat enim. Duis maximus, dui hendrerit sollicitudin maximus, ipsum velit sodales arcu, nec ultricies metus nisi quis tortor. Nulla mauris odio, lacinia a leo ut, euismod vestibulum dolor. Praesent eget dapibus neque, non rutrum sapien. Duis malesuada nunc nec elit dignissim hendrerit. </p>
        </div>
      </div>
    </div>
  </div>
  <div class="w-full md:w-1/2 lg:w-1/3 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
    <div class="bg-white rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
      <figure class="mb-2">
        <img src="assets/img/n3.png" alt="" class="h-64 ml-auto mr-auto" />
      </figure>
      <div class="rounded-lg p-4 flex flex-col">
        <div>
          <h5 class="text-2xl font-bold leading-none text-center"> Visión </h5>
          <p class="mt-4"> Donec non consequat enim. Duis maximus, dui hendrerit sollicitudin maximus, ipsum velit sodales arcu, nec ultricies metus nisi quis tortor. Nulla mauris odio, lacinia a leo ut, euismod vestibulum dolor. Praesent eget dapibus neque, non rutrum sapien. Duis malesuada nunc nec elit dignissim hendrerit. </p>
        </div>
      </div>
    </div>
  </div>
</div>
 @endsection