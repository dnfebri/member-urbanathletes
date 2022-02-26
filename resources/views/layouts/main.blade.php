<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/app.css">
  <link rel="stylesheet" href="./css/style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css') }}">
  
  {{-- Swiper JS --}}
  {{-- <link rel="stylesheet" href="{{ url('swiper/js/swiper-bundle.min.css') }}"> --}}
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
  {{-- <style>
    .swiper {
      /* width: 600px; */
      /* height: 300px; */
    }
  </style> --}}

  <title>Urban Athletes</title>
</head>
<body>
  <nav class="bg-green-ua">
    @include('layouts.navbar')
  </nav>
  {{-- <header>Header</header> --}}
  <main>
    @yield('content')
  </main>
  <footer>
    @include('layouts.footer')
  </footer>
  <script src="{{ url('js/script.js') }}"></script>
</body>
</html>