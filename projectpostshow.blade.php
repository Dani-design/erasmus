@extends ('layouts.app')

@section ('content')
<div class="card card-body bg-light">

<div id="button">
<a href='/projectposts' class ="btn btn-dark">Go back </a>
</div>

  <h1>{{$post->title}}</h1>
    <div class="row">
    <div class="col-md-4 col-sm-4">
  <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
</div>
<div class="col-md-4 col-sm-8">
  {!!$post->description!!}

  <small>Written on {{$post->created_at}}by {{$post->user->name}}</small>
</div>
</div>
  <hr>
  <div id="button">
      <div id="button-Right">
  @if(!Auth::guest())
  @if(Auth::user()->id==$post->user_id )
  <a href="/projectposts/{{$post->id}}/edit" class ="btn btn-dark">{{__('home.edit')}}</a>
</div>
</div>
<br><br>
  <div id="button-Right">
{!!Form::open(['action'=>['ProjectPostController@destroy',$post->id],'method'=>'POST'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}

@endif
@endif
<br>
</div>
@endsection
