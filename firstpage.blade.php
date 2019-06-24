@extends ('layouts.app')

@section ('content')
<html lang="{{ app()->getLocale() }}">
<body >
  <div class='text-center bg-light' >
    <br>
  <h1>{{__('home.what_is')}}</h1>
  <p>
    {{__('home.description')}}
  </p>
    <h2>{{__('home.individuals')}}</h2>
<p>{{__('home.individuals2')}}</p>
<h2>{{__('home.organisations')}}</h2>
<p>{{__('home.organisation2')}}</p>
  <div class="jumbotron text-center links">
    <h2> {{__('home.read')}} </h2>
    <a href="https://ec.europa.eu/programmes/erasmus-plus/node_en/">Main Webpage</a>
    <a href="http://www.erasmusplus.lv/lat/">Latvian programme</a>
  </div>
</body>
</div>
</html>
@endsection
