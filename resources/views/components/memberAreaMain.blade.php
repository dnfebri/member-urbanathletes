<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('style')
    @stack('script')
</head>
<body>
    @empty($specialPage)
        @include('components.navbar')
        <div class="py-7"></div>
    @endempty
    {{ $slot }}
    @empty($specialPage)
    <footer>
        @include('components.footer')
    </footer>
    <script src="{{ url('/js/script_nav.js') }}"></script>
    @endempty
</body>
</html>