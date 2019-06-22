@extends ('layouts.app')

@section ('content')
  <h1>Create Project</h1>
  {!!Form::open(['action'=>'ProjectPostController@store','method' => 'POST']) !!}
  <div class ="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title','',['class'=>'form-control', 'placeholder'=>'Title'])}}
  </div>
  <div class ="form-group">
    {{Form::label('description','Description')}}
    {{Form::textarea('description','',['class'=>'form-control', 'placeholder'=>'Description of project'])}}
  </div>
  {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
  {!!Form::close()!!}
@endsection
