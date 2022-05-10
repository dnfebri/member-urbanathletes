<x-main>
    <div class="container">
        @push('style')
    {{-- Swiper JS --}}
    {{-- <link rel="stylesheet" href="{{ url('swiper/js/swiper-bundle.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ url('https://unpkg.com/swiper@8/swiper-bundle.min.css')}}"/>
  @endpush
  <div class="">
    <!-- Slider main container -->
    <div class="swiper mt-3">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide flex justify-center items-center">
          <img class="w-3/5" src="{{ url('/image/articles/blog/banner-blog1.jpg') }}" alt="Benner Blog 1">
        </div>
        <div class="swiper-slide flex justify-center items-center">
          <img class="w-3/5" src="{{ url('/image/articles/blog/banner-blog2.jpg') }}" alt="Benner Blog 2">
        </div>
        <div class="swiper-slide flex justify-center items-center">
          <img class="w-3/5" src="{{ url('/image/articles/blog/banner-blog3.jpg') }}" alt="Benner blog 2">
        </div>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>
  
      <!-- If we need navigation buttons -->
      {{-- <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div> --}}
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

    </script>
  @endpush
    
        {{-- <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="{{ url('/image/articles/blog/banner-blog1.jpg') }}" alt="banner1">
                </div>
        </div> --}}
        <div class="grid md:grid-cols-3 lg:grid-cols-3 gap-7 mx-16 my-16">
            <div>
                <img class="mb-5" src="{{ url('/image/articles/blog/foto-blog1.jpg') }}" alt="blog1">
                <p class="text-3xl mb-5">Healthy Food #6: Walnuts</p>
                <p>Why They’re Healthy: — Contain the most omega-3 fatty acids, which may help reduce cholesterol, of all nuts. — Omega-3s have been shown to improve mood […]</p>
            </div>
            <div>
                <img class="mb-5" src="{{ url('/image/articles/blog/foto-blog2.jpg') }}" alt="blog2">
                <p class="text-3xl mb-5">Healthy Food #5: Salmon</p>
                <p>Why It’s Healthy: — A great source of omega-3 fatty acids, which have been linked to a reduced risk of depression, heart disease, and cancer. — […]</p>
            </div>
            <div>
                <img class="mb-5" src="{{ url('/image/articles/blog/foto-blog3.jpg') }}" alt="blog3">
                <p class="text-3xl mb-5">Healthy Food #4: Potatoes</p>
                <p>Why They’re Healthy: — One red potato contains 66 micrograms of cell-building folate — about the same amount found in one cup of spinach or broccoli. […]
                </p>
            </div>
        </div>

        <div class="grid md:grid-cols-3 lg:grid-cols-3 gap-7 mx-16 my-16">
            <div>
                <img class="mb-5" src="{{ url('/image/articles/blog/foto-blog4.jpg') }}" alt="blog4">
                <p class="text-3xl mb-5">Healthy Food #3: Dark Chocolate</p>
                <p>Why It’s Healthy: — Just one-fourth of an ounce daily can reduce blood pressure in otherwise healthy individuals. — Cocoa powder is rich in flavonoids, antioxidants […]</p>
            </div>
            <div>
                <img class="mb-5" src="{{ url('/image/articles/blog/foto-blog5.jpg') }}" alt="blog5">
                <p class="text-3xl mb-5">Healthy Food #2: Broccoli</p>
                <p>Why It’s Healthy: — One medium stalk of broccoli contains more than 100 percent of your daily vitamin K requirement and almost 200 percent of your […]
                </p>
            </div>
            <div>
                <img class="mb-5" src="{{ url('/image/articles/blog/foto-blog6.jpg') }}" alt="blog6">
                <p class="text-3xl mb-5">Healthy Food #1: Lemons</p>
                <p>Why They’re Healthy: — Just one lemon has more than 100 percent of your daily intake of vitamin C, which may help increase “good” HDL cholesterol […]</p>
            </div>
        </div>
    </div>
</x-main>

{{-- @extends('layouts.main')

@section('content')

@endsection --}}