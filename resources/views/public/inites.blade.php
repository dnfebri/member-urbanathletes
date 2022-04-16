<x-main specialPage=true>
    <div class="container px-8 grid gap-4 md:grid-cols-2 lg:grid-cols-4">
        <div class="my-8">
          <h2 class="text-xl">COMPANY</h2>
          <p><a class="text-sm text-green-ua" href="#">About Us</a></p>
          <p><a class="text-sm text-green-ua" href="#">Terms & Conditions</a></p>
          <p><a class="text-sm text-green-ua" href="#">Careers</a></p>
          <p><a class="text-sm text-green-ua" href="#">Careers Instruktur</a></p>
        </div>
        <div class="my-8">
          <h2>PROGRAM</h2>
          <p><a class="text-sm text-green-ua" href="#">Personal Training</a></p>
          <p><a class="text-sm text-green-ua" href="#">Group Excercise</a></p>
        </div>
        <div class="my-8">
          <h2>ADDRESS</h2>
          <div class="text-sm text-gray-300">
            <p><span class="italic">Apartemen Gunawangsa (Merr), lantai 5 </span><br>
              Jl. Kedung Baruk No 96, Surabaya <br>
              <a class="text-green-ua" href="#">031-8785-3222</a></p>
          </div>
          <div class="text-sm text-gray-300">
            <p><span class="italic">Marvel City, lantai 1 </span><br>
              Jl. Raya Ngagel No 123, Surabaya <br>
              <a class="text-green-ua" href="#">031-9900-5707</a></p>
          </div>
          <div class="text-sm text-gray-300">
            <p><a class="text-green-ua" href="#">View more...</a></p>
          </div>
    
        </div>
        <div class="my-8">
          <h2 class="mb-4">FIND US ON:</h2>
          {{-- <div class="grid grid-cols-3 gap-2 place-items-start text-black"> --}}
          <div class="flex justify-start gap-8 md:grid md:grid-cols-3 text-black">
            <a class="flex justify-center place-items-center rounded-md shadow-sm shadow-facebook bg-white w-14 h-14 text-facebook hover:text-white hover:bg-facebook transition-all duration-300"
            href="https://www.facebook.com/urbanathletesindo/" target="_blank" rel="Facebook">
              <i class="fa-brands fa-facebook-f text-5xl"></i>
            </a>
            <a class="flex justify-center place-items-center rounded-md shadow-sm shadow-instagram bg-white w-14 h-14 text-instagram hover:text-white hover:bg-instagram transition-all duration-300"
            href="https://www.instagram.com/urban.athletes/" target="_blank" rel="instagram">
              <i class="fa-brands fa-instagram text-5xl"></i>
            </a>
            <a class="flex justify-center place-items-center rounded-md shadow-sm shadow-youtube bg-white w-14 h-14 text-youtube hover:text-white hover:bg-youtube transition-all duration-300"
            href="https://www.youtube.com/channel/UCLV--bH8TFFYEf3Nz7Hv2vA" target="_blank" rel="youtube">
              <i class="fa-brands fa-youtube text-5xl"></i>
            </a>
          </div>
        </div>
      </div>
</x-main>

{{-- @extends('layouts.main')

@section('content')

@endsection --}}