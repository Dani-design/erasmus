<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ErasmusOppurtunities</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <script src="{{ asset('js/app.js') }}" defer></script>
 <link rel="stylesheet" href="/css/app.css">
 <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      <div class="container">
      <div class="jumbotron text-center">
      <div class="container" >
        <h1> Welcome</h1>
        <p class="lead"> hello there </p>
      </div>
    </div>
  </div>
      @include ('inc.navbar')
      <div class="container">
     @include ('inc.message')
              @yield('content')
  <div>
              <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
 <script>
 CKEDITOR.replace('article-ckeditor');
 </script>
</div>
          </div>
        </main>
    </div>
</body>
</html>
