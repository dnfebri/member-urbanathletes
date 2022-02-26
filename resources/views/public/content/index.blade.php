@extends('layouts.main', [
  'specialPage' => true
])

@section('content')
<h1>Landing Page</h1>
<div class="mb-4 w-full flex aspect-[6/3.3333] bg-[url('/image/benner/bg_content.png')] bg-cover">
  {{-- <img class="w-full aspect-[4/2] object-cover object-top" src="{{ url('/image/benner/bg_content.png') }}" alt="Urban Athletes Benner"> --}}
  <div class="flex-none w-1/5 my-16 mx-4">
    <img class="" src="{{ url('/image/Logo_Urban-2.png') }}" alt="Urban Athletes">
  </div>
  <div>
    <h3 class="text-white text-9xl font-black mx-8 my-8 font-sans">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h3>
  </div>
</div>
@endsection
