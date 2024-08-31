<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - My Website</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>
<body>
    @include('partials._header')
    <main>
        @yield('content')
    </main>
    @include('partials._footer')
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
