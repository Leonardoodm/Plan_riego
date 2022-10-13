@extends('layouts.app')
 @section('titulo')
    Servicios Destacados
 @endsection

@section ('contenido')



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


<!-- Servicios Destacados -->
<div class="container ml-auto mr-auto flex flex-wrap items-start mt-8">
  <div class="w-full pl-5 lg:pl-2 mb-4 mt-4">
    
  </div>
  <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
    <div class="bg-white rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
      <figure class="mb-2">
        <img src="{{asset('img/dom.png')}}" alt="" class="h-64 ml-auto mr-auto" />
      </figure>
      <div class="rounded-lg p-4 flex flex-col">
        <div>
          <h5 class="text-2xl font-bold leading-none text-center"> LUZ </h5>
          <p class="mt-4"> Nulla blandit ac tortor a ullamcorper. Fusce dictum, quam at ornare finibus, leo erat lacinia urna, vitae interdum est lacus vel massa. Donec porttitor posuere lacus sit amet auctor. Fusce fringilla mauris ipsum, nec tempus odio porttitor a. Cras eu urna eget est egestas pulvinar. </p>
        </div>
        <div class="flex items-center mt-4">
          <a href="#" class="font-bold text-orange-900">Leer más</a>
          <button href="javascript:;" class="rounded-full bg-purple-900 text-white hover:bg-white hover:text-purple-900 hover:shadow-xl focus:outline-none w-10 h-10 flex ml-4 transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stroke-current m-auto">
              <line x1="12" y1="5" x2="12" y2="19"></line>
              <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
    <div class="bg-white rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
      <figure class="mb-2">
        <img src="{{asset('img/planta.png')}}" alt="" class="h-64 ml-auto mr-auto" />
      </figure>
      <div class="rounded-lg p-4 flex flex-col">
        <div>
          <h5 class="text-2xl font-bold leading-none text-center"> SUELO </h5>
          <p class="mt-4"> Nulla blandit ac tortor a ullamcorper. Fusce dictum, quam at ornare finibus, leo erat lacinia urna, vitae interdum est lacus vel massa. Donec porttitor posuere lacus sit amet auctor. Fusce fringilla mauris ipsum, nec tempus odio porttitor a. Cras eu urna eget est egestas pulvinar. </p>
        </div>
        <div class="flex items-center mt-4">
          <a href="#" class="font-bold text-orange-900">Leer más</a>
          <button href="javascript:;" class="rounded-full bg-purple-900 text-white hover:bg-white hover:text-purple-900 hover:shadow-xl focus:outline-none w-10 h-10 flex ml-4 transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stroke-current m-auto">
              <line x1="12" y1="5" x2="12" y2="19"></line>
              <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
    <div class="bg-white rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
      <figure class="mb-2">
        <img src="{{asset('img/lluvia.png')}}" alt="" class="h-64 ml-auto mr-auto" />
      </figure>
      <div class="rounded-lg p-4 flex flex-col">
        <div>
          <h5 class="text-2xl font-bold leading-none text-center"> LLUVIA </h5>
          <p class="mt-4"> Nulla blandit ac tortor a ullamcorper. Fusce dictum, quam at ornare finibus, leo erat lacinia urna, vitae interdum est lacus vel massa. Donec porttitor posuere lacus sit amet auctor. Fusce fringilla mauris ipsum, nec tempus odio porttitor a. Cras eu urna eget est egestas pulvinar. </p>
        </div>
        <div class="flex items-center mt-4">
          <a href="#" class="font-bold text-orange-900">Leer más</a>
          <button href="javascript:;" class="rounded-full bg-purple-900 text-white hover:bg-white hover:text-purple-900 hover:shadow-xl focus:outline-none w-10 h-10 flex ml-4 transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stroke-current m-auto">
              <line x1="12" y1="5" x2="12" y2="19"></line>
              <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
    <div class="bg-white rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
      <figure class="mb-2">
        <img src="{{asset('img/termometro.png')}}" alt="" class="h-64 ml-auto mr-auto" />
      </figure>
      <div class="rounded-lg p-4 flex flex-col">
        <div>
          <h5 class="text-2xl font-bold leading-none text-center"> T-H </h5>
          <p class="mt-4"> Nulla blandit ac tortor a ullamcorper. Fusce dictum, quam at ornare finibus, leo erat lacinia urna, vitae interdum est lacus vel massa. Donec porttitor posuere lacus sit amet auctor. Fusce fringilla mauris ipsum, nec tempus odio porttitor a. Cras eu urna eget est egestas pulvinar. </p>
        </div>
        <div class="flex items-center mt-4">
          <a href="#" class="font-bold text-orange-900">Leer más</a>
          <button href="javascript:;" class="rounded-full bg-purple-900 text-white hover:bg-white hover:text-purple-900 hover:shadow-xl focus:outline-none w-10 h-10 flex ml-4 transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stroke-current m-auto">
              <line x1="12" y1="5" x2="12" y2="19"></line>
              <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
 @endsection