@extends ('layouts.app')

@section ('content')
<a href='/projectposts' class ="btn btn-dark">Go back </a>
  <h1>{{$post->title}}</h1>
  <small>Written on {{$post->created_at}}</small>
  <div>
    {{$post->description}}
  </div>
@endsection

@section('sidebar')
<p>This is appened to sidebar</p>
@endsection
