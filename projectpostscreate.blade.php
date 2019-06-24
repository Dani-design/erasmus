@extends ('layouts.app')

@section ('content')
<div class="card card-body bg-light">
  <h1>Create Project</h1>
  {!!Form::open(['action'=>'ProjectPostController@store','method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
  <div class ="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title','',['class'=>'form-control', 'placeholder'=>'Title'])}}
    {{Form::label('description','Description')}}
    {{Form::textarea('description','',['id'=>'article-ckeditor','class'=>'form-control', 'placeholder'=>'Description of project'])}}
<div class="form-group">
  <p></p>
  {{Form::file('cover_image')}}
</div>
  </div>
  {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
  {!!Form::close()!!}
</div>
@endsection
