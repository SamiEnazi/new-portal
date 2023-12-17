<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'SDLPortal')</title>
    <link rel="icon" href="{{ asset('imgs/favicon.gif') }}" type="text/css" media="screen"> <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900&amp;display=swa">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased  font-[Mulish,Cairo_Regular,sans]  ">

    @include('components.navbar')

    @yield('content')
    @yield('scripts')

</body>

</html>
