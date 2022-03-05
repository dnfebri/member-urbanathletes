@extends('layouts.main', [
  'specialPage' => true
])

@section('content')
<div class="bg-content-bg">
  <div class="relative">
    <div class="grid grid-cols-3 items-center">
      <div class="ml-8 py-2">
        <img class="h-9" src="{{ url('/image/Logo_Urban-2.png') }}" alt="Urban Athletes">
      </div>
      <div class="text-white">
        <p class="text-center text-sm md:text-base italic">Building a Better You</p>
      </div>
      <div></div>
    </div>
    <div class="pb-4 w-full flex aspect-auto bg-[url('/image/benner/bg_content.png')] bg-cover">
      <div class="absolute bottom-0 right-0 lg:mr-32">
        <img class="w-40" src="/image/benner/Mis_UN.png" alt="Mis UN">
      </div>
      <div class="mx-8 lg:pl-32 z-10">
        <h3 class="text-white text-4xl font-black font-sans my-4">
          <span class="text-black font-black font-sans">NGE-GYM GAK <br>
          TAKUT MAHAL</span> <br>
          GAK WORRY COVID
        </h3>
        <a class="py-2 px-4 rounded-full bg-red-600 text-white text-2xl" href="https://wa.link/9tenk0" target="_blank">
          Daftar Sekarang!
        </a>
      </div>
    </div>
  </div>
  <div class="container px-4 md:px-16">
    <div class="flex justify-center items-center my-4">
      <h2 class="text-white text-xl text-center font-bold italic">ANDA MASIH TAKUT OLAHRAGA DI GYM?</h2>
      {{-- <div class="py-4">
        <a href="#">
          <p class="py-4 px-8 rounded-full bg-yellow-400 text-red-600 text-5xl font-sans font-black">Sing Up Now</p>
        </a>
      </div> --}}
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
      <h2 class="text-white text-xl text-center font-bold italic">MUNGKINKAH ALASAN ANDA SALAH SATU DI BAWAH INI?</h2>
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
        <img class="w-16 mx-4" src="{{ url('/image/icon/card_icon.jpg') }}" alt="">
        <p class="text-white">Pembayaran yang Ribet</p>
      </div>
      <div class="border-[3px] border-gray-200 p-2 flex items-center">
        <img class="w-16 mx-4" src="{{ url('/image/icon/mask_icon.png') }}" alt="">
        <p class="text-white">GYM tidak memiliki STANDAR Protokol Kesehatan</p>
      </div>
    </div>
  </div>
  <div class="my-8 w-full aspect-auto bg-[url('/image/content/heading_bg.png')] bg-cover">
    <h2 class="text-black text-xl md:text-3xl text-center font-black py-4">
      JIKA JAWABAN ANDA ADALAH "IYA" <br>
      MAKA KAMI PUNYA SOLUSINYA!
    </h2>
  </div>
  <div class="container content-center items-center px-16 py-4">
    <iframe class="aspect-video w-full" src="https://www.youtube.com/embed/5Lkfik0qtsk?autoplay=1&mute=1">
    </iframe>
  </div>
  <div class="flex justify-center px-4 my-8">
    <img class="" src="{{ url('/image/content/price.png') }}" alt="price urban">
  </div>
  <div class="text-white text-base px-6 my-8 md:px-20">
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
  </div>
  <div class="max-h-60 w-full aspect-auto bg-[url('/image/content/footer_bg.png')] bg-cover mt-20">
    <div class="flex flex-row">
      <div class="basis-4/12 md:basis-1/5 relative">
        <div class="absolute bottom-0 left-0">
          <img class="h-40" src="/image/content/on_mask_treadmill.png" alt="rban Athletes">
        </div>
      </div>
      <div class="basis-8/12 px-4 py-4">
        <div class="text-center uppercase font-bold text-base">
          <p class="italic">
            Urban Athletes adalah Gym dengan Protokol
            Covid-19 pertama dan terjamin di Surabaya
          </p>
          <p class="italic mb-4">#buildingabetteryou</p>
          <a class="py-2 px-2 rounded-full bg-red-600 text-white text-xl" href="https://wa.link/9tenk0" target="_blank">
            Daftar sekarang
          </a>
        </div>
      </div>
    </div>
  </div>

</div>

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
  'https://connect.facebook.net/en_US/fbevents.js%27');
  fbq('init', '381650533339615');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=381650533339615&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
@endsection
