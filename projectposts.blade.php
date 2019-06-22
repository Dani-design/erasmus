@extends ('layouts.app')

@section ('content')
  <h1>Projects</h1>
  @if (count ($projectpost)>0)
  @foreach ($projectpost as $ppost)
  <div class="card card-body bg-light">
    <h3>
      <a href="/projectposts/{{$ppost->id}}">
        {{$ppost->title}}
      </a>
      </h3>
    <small> Written on {{$ppost->created_at}}</small>
  </div>
  @endforeach
  @else
  <p> No posts found </p>
  @endif
@endsection

@section('sidebar')
<p>This is appened to sidebar</p>
@endsection
