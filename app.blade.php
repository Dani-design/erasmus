<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ErasmusOppurtunities</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
 <link rel="stylesheet" href="/css/app.css">
 <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>

    <div >
      <div class="container">
      <div class="jumbotron text-center" id= "centrs">
      <div class="container" id="virsraksts" >

        <h1><b> {{__('home.welcome')}}</b></h1>
        <p class="lead"><b> {{__('home.welcome2')}}</b></p>
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
