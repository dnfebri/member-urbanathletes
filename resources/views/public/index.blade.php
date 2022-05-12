<x-main>
  @push('style')
    {{-- Swiper JS --}}
    {{-- <link rel="stylesheet" href="{{ url('swiper/js/swiper-bundle.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ url('https://unpkg.com/swiper@8/swiper-bundle.min.css')}}"/>
    @stack('style')
  @endpush
  <div class="">
    <!-- Slider main container -->
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <img class="w-full" src="{{ url('/image/benner/Benner.jpg') }}" alt="Urban Athletes Benner">
        </div>
        <div class="swiper-slide">
          <img class="w-full" src="{{ url('/image/benner/Benner-1.jpg') }}" alt="Urban Athletes Benner 1">
        </div>
        <div class="swiper-slide">
          <img class="w-full" src="{{ url('/image/benner/Benner-2.jpg') }}" alt="Urban Athletes Benner 2">
        </div>
        <div class="swiper-slide">
          <img class="w-full" src="{{ url('/image/benner/Benner-3.jpg') }}" alt="Urban Athletes Benner 3">
        </div>
        <div class="swiper-slide">
          <img class="w-full" src="{{ url('/image/benner/Benner-4.jpg') }}" alt="Urban Athletes Benner 4">
        </div>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>
  
      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  
    <div class="container">
      <div class="px-8 md:px-0">
        <h1 class="text-5xl text-center font-extrabold text-green-ua my-4">WHAT'S ON</h1>
        <img class="w-full" src="{{ url('/image/benner/LayerSlider2.jpg') }}" alt="Urban Athletes Benner">
        <!-- Swiper -->
        {{-- <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">

            </div>
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/benner/LayerSlider2.jpg') }}" alt="Urban Athletes Benner">
            </div>
          </div>
          <div class="swiper-button-next2"></div>
          <div class="swiper-button-prev2"></div>
        </div> --}}
        {{-- <x-card_slider>
          <img src="{{url('/image/benner/LayerSlider1.jpg')}}" alt="Clas Urban" class="card object-cover object-center">
          <img src="{{url('/image/benner/LayerSlider2.jpg')}}" alt="Clas Urban" class="card object-cover object-center">
        </x-card_slider> --}}
      </div>
      <img class="w-full mt-10" src="{{ url('/image/benner/LayerSlider2.jpg') }}" alt="Urban Athletes Benner">
      <!-- Swiper -->
      {{-- <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">

          </div>
          <div class="swiper-slide">
            <img class="w-full" src="{{ url('/image/benner/LayerSlider2.jpg') }}" alt="Urban Athletes Benner">
          </div>
        </div>
        <div class="swiper-button-next2"></div>
        <div class="swiper-button-prev2"></div>
      </div> --}}
      
    </div>
  </div>

  <div>
    <h4 class="text-center text-5xl font-extrabold mt-10 mb-5">REVEAL YOUR INNER ATHLETES!</h3>
    <h4 class="text-center text-xl font-bold">Jadilah pemenang, menangkan kompetisi dalam diri.<br>
      Jadilah athletes bersama kami.<br>
      Dengan pengalaman lebih dari 14 tahun, Urban Athletes hadir menjadi bagian<br>
      dari awal komitmen sehat Anda mulai hari ini.</p>
  </div>
  <div class="container grid md:grid-cols-2 lg:grid-cols-2 mt-12 mb-8">
    <div>
        <p class="mt-14 mb-5 text-center">
          Untuk Menjaga kebugaran selama ISOMAN<br>
          Yuk ikuti Class Online kami</p>
          <div class="mt-10 mb-10 text-center">
            {{-- <a href="#" class="btn btn-primary">Read more</a> --}}
            <a class="bg-green-ua px-4 py-3 rounded-md border-separate text-white" href="/online-schedule" >Cari tahu</a>
          </div>
    </div>
    <div>
      <img class="scale-with-grid" src="{{ url('/image/program/onlineSchedule/online-schedule.jpg') }}" alt="hm1">
    </div>

    <div class="mt-10">
      <img src="{{ url('/image/program/group-exercise.jpg') }}" alt="hm2">
    </div>

    <div>
      <p class="mt-14 mb-5 text-center">
        Berikan yang terbaik untuk mencapai tubuh ideal Anda!<br>
        Didukung dengan 500+ kelas dan fasilitas favorit<br>
        berstandar internasional, rutinitas berolahraga Anda akan terasa<br>
        lebih nyaman dan maksimal bersama kami.</p>
        <div class="mt-10 text-center">
          {{-- <a href="#" class="btn btn-primary">Read more</a> --}}
          <a class="bg-green-ua px-4 py-3 rounded-md border-separate text-white" href="/group-exercise" >Cari tahu</a>
        </div>
    </div>

    <div class="mt-10">
      <p class="mt-10 mb-5 text-center">
        Personal Trainer kami yang telah tersertifikasi siap<br>
        untuk membantu Anda dalam mencapai target<br>
        yang Anda inginkan.<br>
        Jangan ragu untuk mendaftar dan mencoba<br>
        fasilitas Personal Training kami<br>
        untuk hasil yang lebih maksimal!</p>
        <div class="mt-10 text-center">
          {{-- <a href="#" class="btn btn-primary">Read more</a> --}}
          <a class="bg-green-ua px-4 py-3 rounded-md border-separate text-white" href="/personal-training" >Cari tahu</a>
        </div>
    </div>
    <div class="mt-10">
      <img src="{{ url('/image/program/personal-training.jpg') }}" alt="hm3">
    </div>
</div>

<div class="w-full py-16" style="background-image: url('/image/banner-background.jpg')">
  <div>
    <h1 class="text-6xl text-white text-center">Our Impression</h1>
  </div>
  <div class="grid md:grid-cols-4 lg:grid-cols-4 mx-20 mt-12">
    <div class="justify-center place-items-center">
      <div class="flex justify-center place-items-center">
        <img src="{{ url('/image/icon/home_gym_1.png') }}" alt="icon1">
      </div>
      <h1 class="mt-5 text-center text-5xl text-white">6528</h1>
      <p class="mt-3 text-center text-white">Happy Gym Users</p>
    </div>
    <div class="flex justify-center place-items-center">
      <img src="{{ url('/image/icon/home_gym_2.png') }}" alt="icon2">
    </div>
    <div class="flex justify-center place-items-center">
      <img src="{{ url('/image/icon/home_gym_3.png') }}" alt="icon3">
    </div>
    <div class="flex justify-center place-items-center">
      <img src="{{ url('/image/icon/home_gym_4.png') }}" alt="icon4">
    </div>
  </div>
  <div class="grid md:grid-cols-4 lg:grid-cols-4 mx-20 mt-4">
    <div>
      <div class="flex justify-center place-items-center">
        <img src="{{ url('/image/icon/home_gym_1.png') }}" alt="icon1">
      </div>
      <div>
        <h1 class="mt-5 text-center text-5xl text-white">6528</h1>
        <p class="mt-3 text-center text-white">Happy Gym Users</p>
      </div>
    </div>

    <div>
      <div class="flex justify-center place-items-center">
        <img src="{{ url('/image/icon/home_gym_2.png') }}" alt="icon2">
      </div>
      <div>
        <h1 class="mt-5 text-center text-5xl text-white">47</h1>
        <p class="mt-3 text-center text-white">Trainers and Instructors</p>
      </div>
    </div>

    <div>
      <div class="flex justify-center place-items-center">
        <img src="{{ url('/image/icon/home_gym_3.png') }}" alt="icon3">
      </div>
      <div>
        <h1 class="mt-5 text-center text-5xl text-white">5</h1>
        <p class="mt-3 text-center text-white">Biggest Gym Units</p>
      </div>
    </div>

    <div>
      <div class="flex justify-center place-items-center">
        <img src="{{ url('/image/icon/home_gym_4.png') }}" alt="icon4">
      </div>
      <div>
        <h1 class="mt-5 text-center text-5xl text-white">7</h1>
        <p class="mt-3 text-center text-white">Days a Week</p>
      </div>
    </div>
  </div>
 
</div>


  
  @push('script')
    {{-- Swiper JS --}}
    {{-- <script src="{{ url('swiper/js/swiper-bundle.min.js') }}"></script> --}}
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper('.swiper', {
        spaceBetween: 300,
        // centeredSlides: true,
        effect: "fade",
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

      // var swiper2 = new Swiper(".mySwiper", {
      //   navigation: {
      //     nextEl: ".swiper-button-next2",
      //     prevEl: ".swiper-button-prev2"
      //   }
      // });
    </script>
    @stack('script')
  @endpush
</x-main>
{{-- @extends('layouts.main')

@section('content')

@endsection --}}
