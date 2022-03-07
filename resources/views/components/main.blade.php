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
  
  @stack('styles')

  <title>Urban Athletes</title>
</head>
<body>
  {{-- @dd($specialPage) --}}
  @empty($specialPage)
  <nav class="bg-green-ua">
    @include('components.navbar')
  </nav>
  @endempty
  
  {{-- <header>Header</header> --}}
  <main>
    {{ $slot }}
  </main>

  @empty($specialPage)
  <footer>
    @include('components.footer')
  </footer>
  @endempty

  @stack('scripts')
  <script src="{{ url('/js/script.js') }}"></script>
</body>
</html>