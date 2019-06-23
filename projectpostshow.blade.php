@extends ('layouts.app')

@section ('content')
<a href='/projectposts' class ="btn btn-dark">Go back </a>
  <h1>{{$post->title}}</h1>
  <small>Written on {{$post->created_at}}by {{$post->user->name}}</small>
  <div>
    {!!$post->description!!}
  </div>
  <hr>
  @if(!Auth::guest())
  @if(Auth::user()->id==$post->user_id)
  <a href="/projectposts/{{$post->id}}/edit" class ="btn btn-dark">Edit Post</a>
<p></p>
{!!Form::open(['action'=>['ProjectPostController@destroy',$post->id],'method'=>'POST'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
@endif
@endif
@endsection
