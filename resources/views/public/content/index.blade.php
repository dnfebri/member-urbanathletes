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
        <p class="text-center italic">Building a Better You</p>
      </div>
      <div></div>
    </div>
    <div class="pb-4 w-full flex aspect-auto bg-[url('/image/benner/bg_content.png')] bg-cover">
      <div class="absolute bottom-0 right-0 lg:mr-32">
        <img class="w-40" src="/image/benner/Mis_UN.png" alt="Mis UN">
      </div>
      <div class="mx-8 lg:pl-32">
        <h3 class="text-white text-4xl font-black font-sans my-4">
          <span class="text-black font-black font-sans">NGE-GYM GAK <br>
          TAKUT MAHAL</span> <br>
          GAK WORRY COVID
        </h3>
        <a class="py-2 px-4 rounded-full bg-red-600 text-white text-2xl" href="#">
          Daftar Sekarang!
        </a>
      </div>
    </div>
  </div>

  {{-- <div class="container content-center items-center px-16 py-8">
    <iframe class="aspect-video w-full" src="https://www.youtube.com/embed/5Lkfik0qtsk?autoplay=1&mute=1">
    </iframe>
  </div> --}}
  <div class="container px-16">
    <div class="flex justify-center items-center my-8">
      <h2 class="text-white text-3xl text-center font-bold italic">ANDA MASIH TAKUT OLAHRAGA DI GYM?</h2>
      {{-- <div class="py-4">
        <a href="#">
          <p class="py-4 px-8 rounded-full bg-yellow-400 text-red-600 text-5xl font-sans font-black">Sing Up Now</p>
        </a>
      </div> --}}
    </div>
    <div class="flex justify-center items-center mb-8 px-16">
      <p class="text-white text-xl text-center font-extralight">
        Hal itu bisa jadi disebabkan karena efek pandemi yang tidak berkesudahan. Ditambah minimnya tempat gym yang memiliki standar protokol 
        kesehatan, atau Anda mempunyai alasan lain?
      </p>
    </div>
    <div class="bg-white border-t-2 border-white"></div>
    <div class="my-8">
      <h2 class="text-white text-3xl text-center font-bold italic">MUNGKINKAH ALASAN ANDA SALAH SATU DI BAWAH INI?</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
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
    <h2 class="text-black text-4xl text-center font-black py-4">
      JIKA JAWABAN ANDA ADALAH "IYA" <br>
      MAKA KAMI PUNYA SOLUSINYA!
    </h2>
  </div>
  <div class="container content-center items-center px-16 py-4">
    <iframe class="aspect-video w-full" src="https://www.youtube.com/embed/5Lkfik0qtsk?autoplay=1&mute=1">
    </iframe>
  </div>
  <div class="flex justify-center px-32">
    <img class="" src="{{ url('/image/content/price.png') }}" alt="price urban">
  </div>


  <div class="w-full bg-gray-600 text-white text-center mb-8">
    <h3 class="text-7xl font-extrabold my-4 pt-8">TITLE HERE</h3>
    <P class="text-5xl mx-8 pb-16">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt qui in sed velit. Molestiae magnam commodi, culpa voluptas consequuntur consectetur labore temporibus. Omnis, quia.
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ratione, est dolores culpa soluta itaque! Laborum consequatur placeat facere aperiam!
    </P>
  </div>
</div>
@endsection
