<!doctype html>
<html>

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }}</title>
   
    <!-- Stylesheet -->
    @vite('resources/css/app.css')
    </head>

    <body>
      <x-header></x-header>

      {{ $slot }}
      @vite('resources/js/app.js') 
      <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </body>

</html>