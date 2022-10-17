@extends('layouts.app')
 @section('titulo')
     Nosotros
 @endsection

@section ('contenido')


    

            <!-- Imagen (Nosotros) -->
            <body>
   

   <!-- Implement the carousel -->
   <div class="relative w-[600px] mx-auto">
       <div class="slide relative">
           <img class="w-full h-[300px] object-cover"
               src="https://www.kindacode.com/wp-content/uploads/2022/07/flower-1.jpeg">
           <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Flower One Caption</div>
       </div>

       <div class="slide relative">
           <img class="w-full h-[300px] object-cover"
               src="https://www.kindacode.com/wp-content/uploads/2022/07/flower-2.jpeg">
           <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Flower Two Caption</div>
       </div>

       <div class="slide relative">
           <img class="w-full h-[300px] object-cover"
               src="https://www.kindacode.com/wp-content/uploads/2022/07/flower-3.jpeg">
           <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Flower Three Caption
           </div>
       </div>
       <div class="slide relative">
           <img class="w-full h-[300px] object-cover"
               src="https://www.kindacode.com/wp-content/uploads/2022/07/flower-2.jpeg">
           <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Flower Two Caption</div>
       </div>

       <!-- The previous button -->
       <a class="absolute left-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
           onclick="moveSlide(-1)">❮</a>

       <!-- The next button -->
       <a class="absolute right-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
           onclick="moveSlide(1)">❯</a>

   </div>
   <br>

   <!-- The dots -->
   <div class="flex justify-center items-center space-x-5">
       <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(1)"></div>
       <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(2)"></div>
       <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(3)"></div>
       <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(3)"></div>
   </div>

   <!-- Javascript code -->
   <script>
       // set the default active slide to the first one
       let slideIndex = 1;
       showSlide(slideIndex);

       // change slide with the prev/next button
       function moveSlide(moveStep) {
           showSlide(slideIndex += moveStep);
       }

       // change slide with the dots
       function currentSlide(n) {
           showSlide(slideIndex = n);
       }

       function showSlide(n) {
           let i;
           const slides = document.getElementsByClassName("slide");
           const dots = document.getElementsByClassName('dot');
           
           if (n > slides.length) { slideIndex = 1 }
           if (n < 1) { slideIndex = slides.length }

           // hide all slides
           for (i = 0; i < slides.length; i++) {
               slides[i].classList.add('hidden');
           }

           // remove active status from all dots
           for (i = 0; i < dots.length; i++) {
               dots[i].classList.remove('bg-yellow-500');
               dots[i].classList.add('bg-green-600');
           }

           // show the active slide
           slides[slideIndex - 1].classList.remove('hidden');

           // highlight the active dot
           dots[slideIndex - 1].classList.remove('bg-green-600');
           dots[slideIndex - 1].classList.add('bg-yellow-500');
       }
   </script>
</body>

<div class="min-h-full">

  
      
      <main class="mt-10">

        <!-- Nosotros (Introducción) -->
     

          <div class="w-full pl-5 lg:pl-2 mb-4 mt-4 pr-4">

            <p>
              Como proveedor global de servicios de tecnología, JABRA GN  crea productos y plataformas digitales de alta calidad que aceleran el tiempo de productividad. Nos enfocamos en resultados medibles,en nuestros clientes, para modernizar las tecnologias, madurar las capacidades basadas en datos y mejorar la experiencia del usuario.

              Nuestros equipo  brindan la combinación correcta de soluciones, capacidades y metodologías para brindar resultados, asi como para fomentar la innovación a través del aprendizaje continuo.
            </p>
          </div>
          
        </div> 

@endsection