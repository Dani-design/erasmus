@extends ('layouts.app')

@section ('content')

  @if (count ($projectpost)>0)
  @foreach ($projectpost as $ppost)
  <div class="card card-body bg-light">
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <img style="width:100%" src="/storage/cover_images/{{$ppost->cover_image}}">
      </div>
     <div class="col-md-4 col-sm-8">
    <h3>
      <a href="/projectposts/{{$ppost->id}}">{{$ppost->title}}</a>
      </h3>
    <small> Written on {{$ppost->created_at}} by
      <a href="/userprofile/{{$ppost->user->id}}">
        {{$ppost->user->name}}</a></small>
  </div>
</div>
</div>
  @endforeach
  @else
  <p> No posts found </p>
  @endif
@endsection

@section('sidebar')
<p>This is appened to sidebar</p>
@endsection
