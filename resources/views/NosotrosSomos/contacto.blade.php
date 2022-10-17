@extends('layouts.app')
 @section('titulo')
     Contactanos
 @endsection

@section ('contenido')

  <div class="container ml-auto mr-auto flex flex-wrap items-start mt-8">
  <div class="w-full pl-5 lg:pl-2 mb-4 mt-4">
    
  </div>
  <div class="w-full md:w-1/2 lg:w-1/3 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
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
  <div class="w-full md:w-1/2 lg:w-1/3 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
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
  <div class="w-full md:w-1/2 lg:w-1/3 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
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
  <div class="w-full md:w-1/2 lg:w-1/1 pl-5 pr-5 mb-10 lg:pl-2 lg:pr-2">
            <div class="bg-white m-h-64 p-2">

              <!-- Datos de Contacto -->
              
              <div class="rounded-lg p-4 flex flex-col">

                <div class="lc">

                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                  </svg> <p class="cc pl-2 pb-4"> Av. Chapultepec Sur # 1348 - Jalisco, México. </p>

                </div>

                <div class="lc">

                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg> <p class="cc pl-2 pb-4"> JABRAGNIntelligentSolutions@gmail.com </p>

                </div>

                <div class="lc">

                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                  </svg> <p class="cc pl-2 pb-4"> 33-9690-0000 </p>

                </div>

                <div class="lc">

                  <a href="#" title="Facebook" class="mr-1">
                    <i class="fab fa-facebook-square fa-2x"></i>
                  </a>

                  <a href="#" title="Twitter" class="mr-1">
                    <i class="fab fa-twitter-square fa-2x"></i>
                  </a>

                  <a href="#" title="Instagram" class="mr-1">
                    <i class="fab fa-instagram-square fa-2x"></i>
                  </a>

                  <a href="#" title="YouTube" class="mr-1">
                    <i class="fab fa-youtube-square fa-2x"></i>
                  </a>

                  <a href="#" title="WhatsApp" class="mr-1">
                    <i class="fab fa-whatsapp-square fa-2x"></i>
                  </a>

                  <a href="#" title="Telegram" class="mr-1">
                    <i class="fab fa-telegram-square fa-2x"></i>
                  </a>

                </div>
                
              </div>

            </div>
          </div>

        </div> 
</div>
         

        <!-- Mapa de Google -->

        <div class="container ml-auto mr-auto flex flex-wrap items-start">

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571.645626842475!2d-103.37060636626374!3d20.67225632897084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae067205bd1d%3A0x5fc3a42af84955b!2sAv.%20Chapultepec%20Sur%2C%20Americana%2C%20Guadalajara%2C%20Jal.!5e1!3m2!1sen!2smx!4v1665940724370!5m2!1sen!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          
        </div>

@endsection