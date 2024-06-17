<!doctype html>
<html>

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }}</title>
   
    <!-- Stylesheet -->
    @vite('resources/css/app.css')
    @livewireStyles
    </head>

    <body>
      @livewire('header')

      {{ $slot }}
      @vite('resources/js/app.js') 
    </body>

</html>