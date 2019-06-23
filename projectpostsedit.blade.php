@extends ('layouts.app')

@section ('content')
  <h1>Edit Project</h1>
  {!!Form::open(['action'=>['ProjectPostController@update', $post->id],'method' => 'POST']) !!}
  <div class ="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title',$post->title,['class'=>'form-control', 'placeholder'=>'Title'])}}
  </div>
  <div class ="form-group">
    {{Form::label('description','Description')}}
    {{Form::textarea('description',$post->description,['id'=>'article-ckeditor','class'=>'form-control', 'placeholder'=>'Description of project'])}}
  </div>
  {{Form::hidden('_method','PUT')}}
  {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
  {!!Form::close()!!}
@endsection
