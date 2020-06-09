<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Layout HOME</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
  </head>
  <body>
    <div class="home">
      <div class="container">
        <div class="row">
        @include('header')
        </div>
        <div class="row">
        @yield('content')
        </div>
        <div class="row">
        @include('footer')
        </div>
      </div>
    </div>
  </body>
</html>
