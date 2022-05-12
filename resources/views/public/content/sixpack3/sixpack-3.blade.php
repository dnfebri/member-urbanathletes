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
          <img class="h-56 md:h-72 lg:h-80" src="{{ url('/image/content/sixpack/Header_pict.png')}}" alt="Mis UN">
        </div>
        <div class="mx-8 mb-12 lg:pl-32 z-10">
          <h3 class="text-white text-2xl md:text-4xl font-[1000] font-Futura -tracking-normal lg:tracking-widest my-4 lg:text-5xl italic">
            <span class="text-black text-shadow-xl font-Futura -tracking-wide">6 MINGGU <br>
            BAKAR LEMAK PERUT</span> <br>
            Modul latihan dan <br> diet 
            untuk pemula
          </h3>
          <div class="flex items-center justify-center absolute">
            <span class="animate-ping py-2 px-4 absolute rounded-full bg-red-600 text-red-600 text-sm">
              Daftar Sekarang!
            </span>
            <a id="addToCartButton" class="relative py-2 px-4 rounded-full bg-red-600 text-white text-2xl hover:text-3xl transition-all duration-500" href="{{ route('sixpack3.daftar') }}">
              Daftar Sekarang!
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container px-4 md:px-16">
      <div class="flex justify-center items-center my-4">
        <h2 class="text-white text-lg md:text-3xl text-center font-bold font-Futura tracking-wider italic">MERASA SUSAH BAKAR LEMAK PERUT?</h2>
      </div>
      {{-- <div class="flex justify-center items-center mb-8 px-16"> --}}
      <div class="flex justify-center items-center">
        <p class="text-white text-sm md:text-base text-center font-extralight">
          Lemak perut anda sudah tebal dan mulai meresahkan? pingin bakar lemaknya tapi gak tau caranya? sudah ngegym tapi gak kurus-kurus? mungkin masalah anda adalah tidak punya program latihan dan diet yang tepat. Dapatkan modul latihan untuk enam minggu ! program latihan dan diet langsung dari profesional Urban Athletes!
        </p>
      </div>
      <div class="bg-white border-t-2 border-white mt-4"></div>
      <div class="my-8">
        <h2 class="text-white text-lg lg:text-2xl text-center font-bold font-Futura italic uppercase">MEREKA SUDAH BUKTIKAN !</h2>
      </div>
      <div class="container content-center items-center lg:px-16 py-4">
        {{-- <iframe class="aspect-video w-full" src="https://www.youtube.com/embed/HvK6iCGFKP0?playlist=HvK6iCGFKP0&loop=1">
        </iframe> --}}
        <iframe class="aspect-video w-full" src="https://www.youtube.com/embed/HvK6iCGFKP0?autoplay=1&mute=1&playlist=HvK6iCGFKP0&loop=1">
        </iframe>
      </div>
    </div>
    <div class="my-8 w-full aspect-auto bg-[url('/image/content/heading_bg.png')] bg-cover">
      <h2 class="text-black text-lg sm:text-xl md:text-3xl text-center font-black py-4 font-Futura italic tracking-tighter">
        BUKTIKAN SENDIRI ! <br>
        TERBATAS ! HANYA 50 ORANG PERTAMA !
      </h2>
    </div>
    <div class="flex items-center justify-center">
      <a id="addToCartButton" class="relative py-1 px-4 rounded-full bg-red-600 text-white text-xl hover:text-2xl transition-all duration-500" href="http://wa.me/6281779176132?text=halo%20saya%20pingin%20bakar%20lemak%20perut%20saya%20">
        Hubingi Kami
      </a>
    </div>
    <div class="flex justify-center px-4 my-8">
      <img class="px-14" src="{{ url('/image/content/sixpack/yg_didapat.png') }}" alt="alamat urban">
    </div>
    <div class="container content-center items-center lg:px-16 py-4">
      <iframe class="aspect-video w-full" src="https://www.youtube.com/embed/5jrCadmBCr8?playlist=5jrCadmBCr8&loop=1">
      </iframe>
    </div>
    <div class="my-8 w-full aspect-auto bg-[url('/image/content/heading_bg.png')] bg-cover">
      <h2 class="text-black text-3xl lg:text-5xl text-center font-black py-0 font-Futura italic tracking-tighter">
        IDR 1.488K
      </h2>
    </div>
    <div class="text-white grid grid-cols-1 md:grid-cols-2 gap-4 mx-12 tracking-widest leading-loose">
      <div class="lg:px-8">
        <ul>
          <li><i class="fa-solid fa-circle text-yellow-500"></i> Exclussive Training Modul</li>
          <li><i class="fa-solid fa-circle text-yellow-500"></i> Exclussive Diet Guide</li>
          <li><i class="fa-solid fa-circle text-yellow-500"></i> Exclussive Motivation Group</li>
          <li><i class="fa-solid fa-circle text-yellow-500"></i> Exclussive Training Menu Video</li>
        </ul>
      </div>
      <div class="lg:px-8">
        <ul class="list-outside">
          <li><i class="fa-solid fa-circle text-yellow-500"></i> Free consultation with our PT & diet coach on group</li>
          <li><i class="fa-solid fa-circle text-yellow-500"></i> Membership 6 weeks</li>
          <li><i class="fa-solid fa-circle text-yellow-500"></i> Specified merchandise</li>
        </ul>
      </div>
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
              <a id="addToCartButton" class="relative py-2 px-4 rounded-full bg-red-600 text-white text-2xl hover:text-3xl transition-all duration-500" href="{{ route('sixpack3.daftar') }}">
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
      fbq('init', '370181471818627');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=370181471818627&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
    
  @stack('script')
  @endpush
  
</x-main>