<!DOCTYPE html>
<html>
<head>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>ErasmusOppurtunities</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link rel="stylesheet" href="/css/app.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
  @include ('inc.navbar')
  <div class="container">
    @include ('inc.showcase')
    <div class="jumbotron text-center" id= "show">
      <div class="container" >
        <h1> Welcome</h1>
        <p class="lead"> hello there </p>
      </div>
    </div>
  <div class="row">
    <div class="col-md-8 col-lg-8">
      @include('inc.message')
      @yield ('content')
    </div>
    <div class="col-md-4 col-lg-4">
      @include ('inc.sidebar')

    </div>
  </div>
</div>
</body>
</html>
