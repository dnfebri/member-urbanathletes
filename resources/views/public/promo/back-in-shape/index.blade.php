<x-main specialPage=true>
  {{-- @slot('specialPage')
      true
  @endslot --}}
  @push('style')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    @stack('style')
  @endpush
  {{-- @dd($kode) --}}
  <div class="bg-content-bg">
    <div class="relative">
      <div class="flex flex-row items-center">
        <div class="py-4">
          <img class="h-9 md:h-12 ml-4 md:ml-8" src="{{ url('/image/Logo_Urban-2.png') }}" alt="Urban Athletes">
        </div>
        <div class="text-white w-full">
          {{-- <p class="text-center text-base md:text-xl font-extrabold italic tracking-widest md:tracking-[.55em] z-10">PINGIN PUNYA BADAN IDEAL SEPERTI MEREKA?</p> --}}
        </div>
      </div>
      <div class="pb-4 w-full flex aspect-auto bg-[url('/image/benner/bg_content.png')] bg-cover">
        <div class="absolute bottom-0 right-0 lg:mr-20">
          <img class="w-56 md:w-72" src="{{ url('/image/promo/back-in-shape/bis.png')}}" alt="BIS">
        </div>
        <div class="mx-8 mb-12 lg:pl-32 z-10 md:max-w-5xl">
          <h3 class="text-white text-2xl md:text-4xl font-[1000] font-Futura tracking-widest my-4 lg:text-5xl italic">
            <span class="text-black font-Futura tracking-widest">
              PINGIN PUNYA BADAN IDEAL 
              SEPERTI MEREKA? </span> <br>
              MULAI SEKARANG DENGAN MENGIKUTI
          </h3>
          <div class="flex items-center justify-center absolute">
            <span class="animate-ping py-2 px-4 absolute rounded-full bg-red-600 text-red-600 text-sm">
              Daftar Sekarang!
            </span>
            <form action="{{ route('v2.back-in-shape.daftar') }}" method="get">
              <input type="text" name="kdRef" value="{{$kdRef}}" class="hidden">
              <button type="submit" class="relative py-2 px-4 rounded-full bg-red-600 text-white text-2xl hover:text-3xl transition-all duration-500">
                Daftar Sekarang!
              </button>
            </form>
            {{-- <a class="relative py-2 px-4 rounded-full bg-red-600 text-white text-2xl hover:text-3xl transition-all duration-500" href="#">
              Daftar Sekarang!
            </a> --}}
          </div>
        </div>
      </div>
    </div>
    <div class="container px-4 md:px-16">
      <div class="my-4">
        <h2 class="text-white text-lg md:text-3xl text-center font-bold font-Futura tracking-wider italic">BACK IN SHAPE CHALLENGE</h2>
        <h2 class="text-white text-lg md:text-3xl text-center font-bold font-Futura tracking-wider italic">APA ITU BACK IN SHAPE CHALLENGE?</h2>
      </div>
      {{-- <div class="flex justify-center items-center mb-8 px-16"> --}}
      <div class="flex justify-center items-center">
        <p class="text-white text-base text-center font-extralight">
          Back in Shape adalah program untuk menurunkan lemak tubuh , yang berfokus membentuk otot punggung serta menguatkan core yang diadakan oleh Urban Athletes Surabaya
        </p>
      </div>
      <div class="bg-white border-t-2 border-white mt-4"></div>
      <div class="my-8">
        <h2 class="text-white text-lg lg:text-2xl text-center font-bold font-Futura italic">Mengapa otot punggung ?</h2>
      </div>
      <div class="max-w-xl text-white mx-auto">
        <ul class="list-decimal space-y-4">
          <li>
            Melatih otot punggung berarti memperkuat otot bagian punggung dan dapat membantu memperbaiki postur tubuh lebih ideal
          </li>
          <li>
            Melatih otot punggung juga bermanfaat untuk menguatkan core
          </li>
          <li>
            Dilihat dari sisi kesehatan, rutin melatih otot punggung dapat menurunkan resiko sakit punggung
          </li>
        </ul>
      </div>
      {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
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
      </div> --}}
    </div>
    <div class="my-8 w-full aspect-auto bg-[url('/image/content/heading_bg.png')] bg-cover">
      <div class="flex items-center justify-center py-8 relative">
        <span class="animate-ping py-2 px-4 absolute rounded-full bg-red-600 text-red-600 text-sm">
          Daftar Sekarang!
        </span>
        <a class="relative py-2 px-4 rounded-full bg-red-600 text-white text-2xl hover:text-3xl transition-all duration-500" href="#">
          Daftar Sekarang!
        </a>
      </div>
    </div>
    <div class="container content-center items-center lg:px-16 py-4">
      <div class="mx-auto max-w-3xl">
        <p class="text-white text-center text-2xl md:text-3xl leading-relaxed font-Futura">
          Ayo Ikuti Back in Shape Challenge
          Mulai Fitness goals mu dengan Program Latihan dan dapatkan bimbingan langsung dari Trainer Profesional kami
          Dapatkan juga support langsung dari group motivation kami
        </p>
        <div class="my-8">
          <img class="w-full" src="{{ url('/image/promo/back-in-shape/Poster-Back-In-Shape_A4.jpg')}}" alt="Poster">
        </div>
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

    {{-- <script>
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
    /></noscript> --}}
    <!-- End Meta Pixel Code -->
    
  @stack('script')
  @endpush
  
</x-main>