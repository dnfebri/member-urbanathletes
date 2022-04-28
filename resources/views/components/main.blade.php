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

  <title>Urban Athletes {{ $title ?? '' }}</title>
</head>
<body class="font-AmpleSoft">
  {{-- @dd($specialPage) --}}
  @empty($specialPage)
    @include('components.navbar')
    <div class="py-7"></div>
  @endempty
  
  {{-- <header>Header</header> --}}
  <main>
    {{ $slot }}
  </main>

  @empty($specialPage)
  <footer>
    @include('components.footer')
  </footer>
  <script src="{{ url('/js/script_nav.js') }}"></script>
  @endempty

  @stack('script')
  <script src="{{ url('/js/script.js') }}"></script>
</body>
</html>