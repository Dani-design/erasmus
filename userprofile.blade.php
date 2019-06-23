@extends('layouts.app')

@section ('content')
<div class="text-center">
<h1> Hi {{$user->name}} ! </h1>

<div class ="col-md-4">


  <p></p>
    <a href="/userprofile/{{$user->id}}/edit" class ="btn btn-dark">Edit Profile</a>
</div>

<h3> Your blog posts </h3>
@if (count($posts)>0)
<table class="table table-striped">
  <tr>
    <th>Title</th>
    <th></th>
    <th></th>
  </tr>
  @foreach($posts as $post)
  <tr>
    <td>{{$post->title}}</td>
    <td><a href="/projectpostscreate/{{$post->id}}/edit" class="btn btn-default">Edit</a> </td>
</td>
  </tr>
  @endforeach
</table>
@else
<p>You have no posts </p>
@endif
        </div>
    </div>
</div>
</div>

@endsection
