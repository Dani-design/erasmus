@extends('layouts.app')

@section ('content')
<div class="text-center card card-body bg-light">
<h1> {{$user->name}}  </h1>
<br><Br>

<img class="rounded mx-auto d-block" style="width:50%" src="/storage/cover_images/{{$user->cover_image}}">
<h2>{{__('home.description3')}}</h2>
{!!$user->description!!}
<h2> Contact me </h2>
{{$user->email}}
@if (count($posts)>0)
<table class="table">
  <tr>
    <th>Title</th>
    <th></th>
    <th></th>
  </tr>
  @foreach($posts as $post)
  <tr>
    <td>{{$post->title}}</td>
    @if(!Auth::guest())
    @if(Auth::user()->id==$user->id)
    <td><a href="/projectposts/{{$post->id}}/edit" class="btn btn-default">{{__('home.edit')}}</a> </td>@endif @endif
<td></td>
  </tr>
  @endforeach
</table>
@else
<p>You have no posts </p>
@endif
<br>
@if(!Auth::guest())
@if(Auth::user()->id==$user->id)
<div class ="col-md-4" >
<br>
  <p></p>
    <a href="/userprofile/{{$user->id}}/edit" class ="btn btn-dark">{{__('home.edit')}}</a>
</div>
@endif
@endif
        </div>




@endsection
