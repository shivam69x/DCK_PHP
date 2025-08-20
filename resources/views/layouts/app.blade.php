<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your App Name</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    {{-- This is where your Navbar component will go --}}
    @include('partials.navbar')

    {{-- This is where your SecNav component will go --}}
    @include('partials.secnav')

    <main>
        @yield('content')
    </main>

    {{-- This is where your Footer component will go --}}
    @include('partials.footer')
</body>
</html>
