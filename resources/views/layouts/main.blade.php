<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BLOG | {{ $title }}</title>
    <link rel="stylesheet" href="/dist/css/bootstrap.min.css">
  </head>
  <body>
    @include('layouts.navbar')
    <div class="container mt-4">
        @yield('container')
    </div>

    
    <script src="/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>