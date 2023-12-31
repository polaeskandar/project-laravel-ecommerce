<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Store</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0fff1d5488.js" crossorigin="anonymous" defer></script>
    @vite('resources/css/app.css')
  </head>
  <body class="bg-gray-300">
    <x-navbar.navbar></x-navbar.navbar>
    @yield('content')
  </body>
</html>
