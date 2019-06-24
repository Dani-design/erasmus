@extends('layouts.app')

@section ('content')
<div class="text-center card card-body bg-light">
<h1>Edit  {{$user->name}}  </h1>
<br><Br>
    {!!Form::open(['action'=>['UserProfilecontroller@update', $user->id],'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
<img class="rounded mx-auto d-block" style="width:50%" src="/storage/cover_images/{{$user->cover_image}}">
    {{Form::file('cover_image')}}
<h2>Description</h2>
<div class ="form-group">
  {{Form::label('description','Description')}}
  {{Form::textarea('description',$user->description,['id'=>'article-ckeditor','class'=>'form-control', 'placeholder'=>'Description of profile'])}}
</div>
<br><br>

    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!!Form::close()!!}
    <br>
  </div>





@endsection
