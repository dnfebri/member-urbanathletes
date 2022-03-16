<x-main specialPage=true>
  {{-- @slot('specialPage')
      true
  @endslot --}}
  @push('style')
    {{-- Swiper JS --}}
    {{-- <link rel="stylesheet" href="{{ url('swiper/js/swiper-bundle.min.css') }}"> --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    {{-- <style>
      html,
      body {
        position: relative;
        height: 100%;
      }

      body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
      }

      .swiper {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
      }

      .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 300px;
        height: 300px;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
      }
    </style> --}}
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
      {{-- <div class="grid grid-cols-3 items-center">
        <div class="ml-8 py-2">
          <img class="h-9" src="{{ url('/image/Logo_Urban-2.png') }}" alt="Urban Athletes">
        </div>
        <div class="text-white">
          <p class="text-center text-sm md:text-base italic">Building a Better You</p>
        </div>
        <div></div>
      </div> --}}
      {{-- <div>
        <img src="{{ url('/image/benner/Header.png')}}" alt="Urban Athletes">
      </div> --}}
      <div class="pb-4 w-full flex aspect-auto bg-[url('/image/benner/bg_content.png')] bg-cover">
        <div class="absolute bottom-0 right-0 lg:mr-32">
          <img class="w-40 lg:w-52" src="{{ url('/image/benner/Mis_UN.png')}}" alt="Mis UN">
        </div>
        <div class="mx-8 mb-12 lg:pl-32 z-10">
          <h3 class="text-white text-2xl md:text-4xl font-[1000] font-Futura tracking-widest my-4 lg:text-5xl italic">
            <span class="text-black font-Futura tracking-widest">NGE-GYM GAK <br>
            TAKUT MAHAL</span> <br>
            GAK WORRY COVID
          </h3>
          <div class="flex items-center justify-center absolute">
            <span class="animate-ping py-2 px-4 absolute rounded-full bg-red-600 text-red-600 text-sm">
              Daftar Sekarang!
            </span>
            <a class="relative py-2 px-4 rounded-full bg-red-600 text-white text-2xl hover:text-3xl transition-all duration-500" href="{{ route('daftar.gym') }}">
              Daftar Sekarang!
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container px-4 md:px-16">
      <div class="flex justify-center items-center my-4">
        <h2 class="text-white text-lg md:text-3xl text-center font-bold font-Futura tracking-wider italic">ANDA MASIH TAKUT OLAHRAGA DI GYM?</h2>
      </div>
      {{-- <div class="flex justify-center items-center mb-8 px-16"> --}}
      <div class="flex justify-center items-center">
        <p class="text-white text-base text-center font-extralight">
          Hal itu bisa jadi disebabkan karena efek pandemi yang tidak berkesudahan. Ditambah minimnya tempat gym yang memiliki standar protokol 
          kesehatan, atau Anda mempunyai alasan lain?
        </p>
      </div>
      <div class="bg-white border-t-2 border-white mt-4"></div>
      <div class="my-8">
        <h2 class="text-white text-lg lg:text-2xl text-center font-bold font-Futura italic">MUNGKINKAH ALASAN ANDA SALAH SATU DI BAWAH INI?</h2>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
        <div class="border-[3px] border-gray-200 p-2 flex items-center">
          <img class="w-16 mx-4" src="{{ url('/image/icon/money_icon.png') }}" alt="">
          <p class="text-white">Harga GYM Mahal</p>
        </div>
        <div class="border-[3px] border-gray-200 p-2 flex items-center">
          <img class="w-16 mx-4" src="{{ url('/image/icon/contract_icon.png') }}" alt="">
          <p class="text-white">Terikat KONTRAK Tahunan</p>
        </div>
        <div class="border-[3px] border-gray-200 p-2 flex items-center">
          <img class="w-16 mx-4" src="{{ url('/image/icon/card_icon.png') }}" alt="">
          <p class="text-white">Pembayaran yang Ribet</p>
        </div>
        <div class="border-[3px] border-gray-200 p-2 flex items-center">
          <img class="w-16 mx-4" src="{{ url('/image/icon/mask_icon.png') }}" alt="">
          <p class="text-white">GYM tidak memiliki STANDAR Protokol Kesehatan</p>
        </div>
      </div>
    </div>
    <div class="my-8 w-full aspect-auto bg-[url('/image/content/heading_bg.png')] bg-cover">
      <h2 class="text-black text-lg sm:text-xl md:text-3xl text-center font-black py-4 font-Futura italic tracking-tighter">
        JIKA JAWABAN ANDA ADALAH "IYA" <br>
        MAKA KAMI PUNYA SOLUSINYA!
      </h2>
    </div>
    <div class="container content-center items-center lg:px-16 py-4">
      <iframe class="aspect-video w-full" src="https://www.youtube.com/embed/oO6tBg38hRk?playlist=oO6tBg38hRk&loop=1">
      </iframe>
    </div>
    <div class="container content-center items-center px-16 py-4">
    </div>
    <div class="flex justify-center px-4 my-8">
      <img class="" src="{{ url('/image/content/price.png') }}" alt="price urban">
    </div>
    <div class="text-white px-4 my-8 md:px-20">
      <p class="text-center">
        Program latihan dengan sistem yang lebih mudah dan hemat biaya. Mengajak Anda untuk lebih bugar dengan cara yang simple, efisien dan hemat Di klub Urban Athletes yang memiliki standar protokol kesehatan yang sesuai dengan ketentuan dari pemerintah, sehingga aman dan nyaman untuk Anda berolaraga.
      </p>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 my-4 mx-4 overflow-hidden">
        {{-- SwiperJS --}}
        <div class="swiper mySwiper w-full">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/slide1.jpg') }}" alt="Urban Athletes Benner">
            </div>
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/slide2.jpg') }}" alt="Urban Athletes Benner 1">
            </div>
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/slide3.jpg') }}" alt="Urban Athletes Benner 2">
            </div>
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/slide4.jpg') }}" alt="Urban Athletes Benner 3">
            </div>
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/content/slide/slide5.jpg') }}" alt="Urban Athletes Benner 4">
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="">
          <p class="my-4"><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">Tanpa membership</span></p>
          <p class="my-4"><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">Pembayaran instan</span></p>
          <p class="my-4"><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">Protokol kesehatan yang tinggi</span></p>
          <p class="my-4"><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">Garansi diskon membership tahunan</span></p>
          <p class="my-4"><i class="fa-solid fa-circle-check text-yellow-500"></i><span class="ml-3">Bebas memilih kelas yang diinginkan</span></p>
        </div>
      </div>
      {{-- Maps --}}
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 my-8 mx-4 overflow-hidden">
        <div class="w-full">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.577095637042!2d112.74339441420463!3d-7.288861973662437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbb8ce4cea55%3A0x6ab0a79c0d2c9cb2!2sUrban%20Athletes%20Marvell%20City%20Mall!5e0!3m2!1sid!2sid!4v1646752301629!5m2!1sid!2sid" class="w-full h-72" width="" height="" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div>
          <h3 class="text-xl">Jam Operasional Urban Athletes Marvell City Mall</h3>
          <p class="pt-4"><i class="fa-solid fa-clock text-yellow-500"></i><span class="ml-3">Senin - Jumat</span></p>
          <p class="indent-4 ml-3">15.00 - 21.00 WIB</p>
          <p class="pt-4"><i class="fa-solid fa-clock text-yellow-500"></i><span class="ml-3">Sabtu -  Minggu</span></p>
          <p class="indent-4 ml-3">09.00 - 15.00 WIB</p>
          </div>
      </div>
    </div>
    <div>
     <h3 class="text-center text-white text-xl md:text-2xl mb-4 font-Futura">Jadwal Class UA Marvell</h3>  
      {{-- Slider Class --}}
      <!-- Script Crad swiper -->
      <x-card_slider>
        <div class="card" id="c1"></div>
        <div class="card" id="c2"></div>
        <div class="card" id="c3"></div>
        <div class="card" id="c4"></div>
        <div class="card" id="c5"></div>
        <div class="card" id="c6"></div>
        <div class="card" id="c7"></div>
        <div class="card" id="c8"></div>
      </div>
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
              Covid-19 pertama dan terjamin di Surabaya
            </p>
            <p class="font-Futura italic mb-3">#buildingabetteryou</p>
            <div class="flex items-center justify-center">
              <span class="animate-ping py-2 px-4 absolute rounded-full bg-red-600 text-red-600 text-sm">
                Daftar Sekarang!
              </span>
              <a class="relative py-2 px-4 rounded-full bg-red-600 text-white text-lg md:text-xl hover:text-2xl transition-all duration-500" href="https://wa.link/9tenk0" target="_blank">
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

  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '289229666586307');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=289229666586307&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
    
  @stack('script')
  @endpush
  
</x-main>