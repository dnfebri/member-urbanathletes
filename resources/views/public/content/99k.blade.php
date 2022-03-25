<x-main specialPage=true>
  {{-- @slot('specialPage')
      true
  @endslot --}}
  @push('style')
    {{-- Swiper JS --}}
    {{-- <link rel="stylesheet" href="{{ url('swiper/js/swiper-bundle.min.css') }}"> --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    
    @stack('style')
  @endpush
  <div class="bg-content-bg">
    <div class="relative">
      <div class="flex flex-row items-center">
        <div class="py-4">
          <img class="h-9 md:h-12 ml-4 md:ml-8" src="{{ url('/image/Logo_Urban-2.png') }}" alt="Urban Athletes">
        </div>
        <div class="text-white w-full">
          <p class="text-center text-base md:text-xl font-extrabold italic tracking-widest md:tracking-[.55em] z-10">Building a Better You</p>
        </div>
      </div>
      
      <div class="pb-4 w-full flex aspect-auto bg-[url('/image/benner/bg_content.png')] bg-cover">
        <div class="absolute bottom-0 right-0 lg:mr-32">
          <img class="w-40 lg:w-52" src="{{ url('/image/benner/Mis_UN.png')}}" alt="Mis UN">
        </div>
        <div class="mx-8 mb-12 lg:pl-32 z-10">
          <h3 class="text-white text-3xl md:text-4xl font-[1000] font-Futura tracking-normal lg:tracking-widest my-4 lg:text-5xl italic">
            <span class="text-black text-shadow-xl font-Futura tracking-widest">BEST DEAL ! <br>
            MEMBERSHIP</span> <br>
            IDR 99 K ONLY
          </h3>
          <div class="flex items-center justify-center absolute">
            <span class="animate-ping py-2 px-4 absolute rounded-full bg-red-600 text-red-600 text-sm">
              Daftar Sekarang!
            </span>
            <a id="addToCartButton" class="relative py-2 px-4 rounded-full bg-red-600 text-white text-2xl hover:text-3xl transition-all duration-500" href="{{ route('daftar.index') }}">
              Daftar Sekarang!
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container px-4 md:px-16">
      <div class="flex justify-center items-center my-4">
        <h2 class="text-white text-lg md:text-3xl text-center font-bold font-Futura tracking-wider italic">HAJAR LEMAKMU ! BUKAN DOMPETMU !</h2>
      </div>
      {{-- <div class="flex justify-center items-center mb-8 px-16"> --}}
      <div class="flex justify-center items-center">
        <p class="text-white text-sm md:text-base text-center font-extralight">
          Membership terjangkau khusus bagi kamu yang mau cobain ngegym ditempat bonafit, tapi dana lagi pas-pasan. Dapatkan membership 14 hari dengan harga terjangkau. rasakan pengalaman ngegym yang berbeda dengan standar Gym Internasional.
        </p>
      </div>
      <div class="bg-white border-t-2 border-white mt-4"></div>
      <div class="my-8">
        <h2 class="text-white text-lg lg:text-2xl text-center font-bold font-Futura italic uppercase">International standard GYM local price !</h2>
        
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
        <div class="border-[3px] border-gray-200 p-2 flex items-center">
          <img class="w-16 mx-4" src="{{ url('/image/icon/money_icon.png') }}" alt="">
          <p class="text-white">Murah tapi jauh dari murahan</p>
        </div>
        <div class="border-[3px] border-gray-200 p-2 flex items-center">
          <img class="w-16 mx-4" src="{{ url('/image/icon/contract_icon.png') }}" alt="">
          <p class="text-white">Fasilitas standar Internasional</p>
        </div>
        <div class="border-[3px] border-gray-200 p-2 flex items-center">
          <img class="w-16 mx-4" src="{{ url('/image/icon/card_icon.png') }}" alt="">
          <p class="text-white">Pembayaran mudah</p>
        </div>
        <div class="border-[3px] border-gray-200 p-2 flex items-center">
          <img class="w-10 mx-4" src="{{ url('/image/icon/PeduliLindungi.png') }}" alt="">
          <p class="text-white">Gym aman dengan Protokol kesehatan yang ketat</p>
        </div>
      </div>
    </div>
    <div class="my-8 w-full aspect-auto bg-[url('/image/content/heading_bg.png')] bg-cover">
      <h2 class="text-black text-lg sm:text-xl md:text-3xl text-center font-black py-4 font-Futura italic tracking-tighter">
        TERBATAS ! 50 ORANG PENDAFTAR <br>
        PERTAMA HARI INI !
      </h2>
    </div>
    <div class="flex justify-center px-4 my-8">
      <img class="px-14" src="{{ url('/image/content/alamat.png') }}" alt="alamat urban">
    </div>
    <div class="text-white px-4 my-8 md:px-20">
      {{-- <p class="text-center">
        Program latihan dengan sistem yang lebih mudah dan hemat biaya. Mengajak Anda untuk lebih bugar dengan cara yang simple, efisien dan hemat Di klub Urban Athletes yang memiliki standar protokol kesehatan yang sesuai dengan ketentuan dari pemerintah, sehingga aman dan nyaman untuk Anda berolaraga.
      </p> --}}
      {{-- UA Merr --}}
      <div class="grid grid-cols-2 md:grid-cols-2 gap-4 md:gap-8 my-4 md:mx-4 overflow-hidden">
        {{-- SwiperJS --}}
        <div class="swiper mySwiper w-full">
          <div class="swiper-wrapper aspect-[4/2.5]">
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/merr/slider1.JPG') }}" alt="Urban Athletes Benner">
            </div>
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/merr/slider2.JPG') }}" alt="Urban Athletes Benner 1">
            </div>
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/merr/slider3.JPG') }}" alt="Urban Athletes Benner 2">
            </div>
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/merr/slider4.JPG') }}" alt="Urban Athletes Benner 3">
            </div>
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/merr/slider5.JPG') }}" alt="Urban Athletes Benner 4">
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="text-xs md:text-sm lg:text-base leading-4 md:leading-5">
          <h3 class="text-base lg:text-xl font-Futura">Gunawangsa Merr Appartemen</h3>
          <a href="https://goo.gl/maps/ATpNBqy4UqQvxnPv5" target="_blank"><p class="mb-2 font-light underline">Alamat UA Merr</p></a>
          <div class="lg:text-lg">
            <p class=""><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">Ruangan Gym dengan alat yang berstandar</span></p>
            <p class=""><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">Ruangan kelas multi fungsi</span></p>
            <p class=""><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">kelas Yoga, Zumba, LessMills, dll</span></p>
            <p class=""><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">Kolam renang</span></p>
            <p class=""><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">The Valor</span></p>
          </div>
        </div>
      </div>
      {{-- UA Marvell --}}
      <div class="grid grid-cols-2 md:grid-cols-2 gap-4 md:gap-8 my-4 md:mx-4 overflow-hidden">
        {{-- SwiperJS --}}
        <div class="swiper mySwiper w-full">
          <div class="swiper-wrapper aspect-[4/2.5]">
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/marvell/slider1.jpg') }}" alt="Urban Athletes Benner">
            </div>
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/marvell/slider2.jpg') }}" alt="Urban Athletes Benner 1">
            </div>
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/marvell/slider3.jpg') }}" alt="Urban Athletes Benner 2">
            </div>
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/marvell/slider4.jpg') }}" alt="Urban Athletes Benner 3">
            </div>
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/marvell/slider5.jpg') }}" alt="Urban Athletes Benner 4">
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="text-xs md:text-sm lg:text-base leading-4 md:leading-5">
          <h3 class="text-base lg:text-xl font-Futura">Marvell City</h3>
          <a href="https://goo.gl/maps/kQoWqnsq7Vutba1Q6" target="_blank"><p class="mb-2 font-light underline">Alamat UA Marvel</p></a>
          <div class="lg:text-lg">
            <p class=""><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">Ruangan Fungsional Training</span></p>
            <p class=""><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">Ruangan kelas multi fungsi</span></p>
            <p class=""><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">kelas Yoga, Zumba, dll</span></p>
            <p class=""><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">Fungsional training Private & Group</span></p>
            <p class=""><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">The Valor</span></p>
          </div>
        </div>
      </div>
      {{-- UA Tidar --}}
      <div class="grid grid-cols-2 md:grid-cols-2 gap-4 md:gap-8 my-4 md:mx-4 overflow-hidden">
        {{-- SwiperJS --}}
        <div class="swiper mySwiper w-full">
          <div class="swiper-wrapper aspect-[4/2.5]">
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/tidar/slider1.JPG') }}" alt="Urban Athletes Benner">
            </div>
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/tidar/slider2.JPG') }}" alt="Urban Athletes Benner 1">
            </div>
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/tidar/slider3.JPG') }}" alt="Urban Athletes Benner 2">
            </div>
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/tidar/slider4.JPG') }}" alt="Urban Athletes Benner 3">
            </div>
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/tidar/slider5.JPG') }}" alt="Urban Athletes Benner 4">
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="text-xs md:text-sm lg:text-base leading-4 md:leading-5">
          <h3 class="text-base lg:text-xl font-Futura">Gunawangsa Tidar / The Central Mall</h3>
          <a href="https://goo.gl/maps/TgZg3oKhvwGRf4pC8" target="_blank"><p class="mb-2 font-light underline">Alamat UA Tidar</p></a>
          <div class="lg:text-lg">
            <p class=""><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">Ruangan Gym dengan alat yang berstandar</span></p>
            <p class=""><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">Ruangan kelas multi fungsi</span></p>
            <p class=""><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">kelas Yoga, Zumba, LessMills, dll</span></p>
            <p class=""><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">Kolam renang</span></p>
            <p class=""><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">The Valor</span></p>
          </div>
        </div>
      </div>
      {{-- UA Lenmarc --}}
      <div class="grid grid-cols-2 md:grid-cols-2 gap-4 md:gap-8 my-4 md:mx-4 overflow-hidden">
        {{-- SwiperJS --}}
        <div class="swiper mySwiper w-full">
          <div class="swiper-wrapper aspect-[4/2.5]">
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/lenmarc/slider1.JPG') }}" alt="Urban Athletes Benner">
            </div>
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/lenmarc/slider2.JPG') }}" alt="Urban Athletes Benner 1">
            </div>
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/lenmarc/slider3.JPG') }}" alt="Urban Athletes Benner 2">
            </div>
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/lenmarc/slider4.JPG') }}" alt="Urban Athletes Benner 3">
            </div>
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/lenmarc/slider5.JPG') }}" alt="Urban Athletes Benner 4">
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="text-xs md:text-sm lg:text-base leading-4 md:leading-5">
          <h3 class="text-base lg:text-xl font-Futura">Lenmarc Mall</h3>
          <a href="https://goo.gl/maps/nx3vUhxxi9UXoKPn6" target="_blank"><p class="mb-2 font-light underline">Alamat UA Lenmarc</p></a>
          <div class="lg:text-lg">
            <p class=""><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">Ruangan Gym dengan alat yang berstandar</span></p>
            <p class=""><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">Ruangan kelas multi fungsi</span></p>
            <p class=""><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">kelas Yoga, Zumba, LessMills, dll</span></p>
            <p class=""><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">Kids Class</span></p>
            <p class=""><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">The Valor</span></p>
          </div>
        </div>
      </div>
    </div>
    <div class="my-8 w-full aspect-auto bg-[url('/image/content/heading_bg.png')] bg-cover">
      <h2 class="text-black text-lg sm:text-xl md:text-3xl text-center font-black py-4 font-Futura italic tracking-tighter">
        TERBATAS ! 50 ORANG PENDAFTAR <br>
        PERTAMA HARI INI !
      </h2>
    </div>
    <div class="flex justify-center px-4 mt-8">
      <img class="lg:px-14" src="{{ url('/image/content/jadwal-kelas.png') }}" alt="Jadwal urban">
    </div>
    <div>
      <h3 class="text-center text-white text-lg md:text-2xl mb-4">GESER UNTUK MENGETAHUI JADWAL KELAS</h3>  
      {{-- Slider Class --}}
      <!-- Script Crad swiper -->
      <x-card_slider>
        {{-- Merr --}}
        <img src="{{url('/image/schedule/merr/Artboard 1.png')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/merr/Artboard 2.png')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/merr/Artboard 3.png')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/merr/Artboard 4.png')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/merr/Artboard 5.png')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/merr/Artboard 6.png')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/merr/Artboard 7.png')}}" alt="Clas Urban" class="card object-cover object-center">
        {{-- Marvell --}}
        <img src="{{url('/image/schedule/marvell/Artboard1.png')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/marvell/Artboard2.png')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/marvell/Artboard3.png')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/marvell/Artboard4.png')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/marvell/Artboard5.png')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/marvell/Artboard6.png')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/marvell/Artboard7.png')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/marvell/Artboard8.png')}}" alt="Clas Urban" class="card object-cover object-center">
        {{-- Tidar --}}
        <img src="{{url('/image/schedule/tidar/Artboard 1.jpeg')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/tidar/Artboard 2.jpeg')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/tidar/Artboard 3.jpeg')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/tidar/Artboard 4.jpeg')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/tidar/Artboard 5.jpeg')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/tidar/Artboard 6.jpeg')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/tidar/Artboard 7.jpeg')}}" alt="Clas Urban" class="card object-cover object-center">
        {{-- lenmarc --}}
        <img src="{{url('/image/schedule/lenmarc/Artboard 1.jpeg')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/lenmarc/Artboard 2.jpeg')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/lenmarc/Artboard 3.jpeg')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/lenmarc/Artboard 4.jpeg')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/lenmarc/Artboard 5.jpeg')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/lenmarc/Artboard 6.jpeg')}}" alt="Clas Urban" class="card object-cover object-center">
        <img src="{{url('/image/schedule/lenmarc/Artboard 7.jpeg')}}" alt="Clas Urban" class="card object-cover object-center">
      </x-card_slider>
    </div>
      
    <div class="max-h-60 w-full aspect-auto bg-[url('/image/content/footer_bg.png')] bg-cover mt-20">
      <div class="flex flex-row">
        <div class="basis-4/12 md:basis-1/5 relative">
          <div class="absolute bottom-0 left-0">
            <img class="h-40" src="/image/content/on_mask_treadmill.png" alt="rban Athletes">
          </div>
        </div>
        <div class="basis-8/12 px-4 py-4">
          <div class="text-center uppercase font-bold items-center text-base">
            <p class="italic font-Futura">
              Urban Athletes adalah Gym dengan Protokol
              Covid-19 pertama dan terjamin di Surabaya!
            </p>
            <p class="font-Futura italic mb-3">#buildingabetteryou</p>
            <div class="flex items-center justify-center">
              <span class="animate-ping py-2 px-4 absolute rounded-full bg-red-600 text-red-600 text-sm">
                Daftar Sekarang!
              </span>
              <a id="addToCartButton" class="relative py-2 px-4 rounded-full bg-red-600 text-white text-2xl hover:text-3xl transition-all duration-500" href="{{ route('daftar.index') }}">
                Daftar Sekarang!
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </div>

  @push('script')
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        // cssMode: true,
        spaceBetween: 300,
        // centeredSlides: true,
        effect: "fade",
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        mousewheel: true,
        keyboard: true,
      });
    </script>

    <!-- Meta Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '544863203544959');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=544863203544959&ev=PageView&noscript=1"
    /></noscript>
    <script type="text/javascript">
      document.getElementById('addToCartButton').addEventListener('click', function() {
      insert_event_code_here;
      fbq('track', 'AddToCart');
      }, false);
    </script>
    <!-- End Meta Pixel Code -->
    
  @stack('script')
  @endpush
  
</x-main>