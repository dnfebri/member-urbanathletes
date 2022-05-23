<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ url('/css/app.css')}}">
  <link rel="stylesheet" href="{{ url('/css/style.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('/fontawesome/css/all.min.css') }}">
  
  @stack('style')
  {{-- <script src="https://cdn.tailwindcss.com"></script>  --}}
  {{-- Seharusnya ini tidak di pakai--}}
  {{-- <script src="https://unpkg.com/alpinejs@3.7.1/dist/cdn.min.js" defer></script> --}}
  <script src="{{ asset('js/app.js') }}" defer></script>

  <title>Urban Athletes {{ $title ?? '' }}</title>
</head>
<body class="font-AmpleSoft">
  <div class="flex justify-start">
    {{-- @dd($specialPage) --}}
    
    <div class="relative w-full">

      <div class="flex justify-start">
        @include('components.admin_sidebar')
        <div class="block w-full">
          <nav class="bg-green-ua">
            @include('components.admin_navbar')
            {{-- <div class="py-7"></div> --}}
          </nav>
          
          {{-- <header>Header</header> --}}
          <main id="app">
            {{ $slot }}
          </main>
        </div>
      </div>
    </div>
  </div>
  @empty($specialPage)
  <script src="{{ url('/js/script_sidebar.js') }}"></script>
  @endempty
  @stack('script')
  <script src="{{ url('/js/script.js') }}"></script>
  {{-- <footer>
    @include('components.admin_footer')
  </footer> --}}
  {{-- <script src="{{ url('/js/script_nav.js') }}"></script> --}}
</body>
</html>