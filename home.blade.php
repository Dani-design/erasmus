@extends ('layouts.app')

@section ('content')
<body>
  <div class='text-center'>
  <h1>Home</h1>
  <p>Text something </p>
  <p><a class="btn btn-primary btn-lg" href="/login" role="button"> Login </a>
    <a class="btn btn-success btn-lg" href="/register" role="button"> Register</a></p>
</body>
</div>
@endsection

@section('sidebar')
@parent
<p>This is appened to sidebar</p>
@endsection
