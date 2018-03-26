@extends ('layouts/main')
@section('content')
   <h2>{{$data->title}}</h2>
   <p>{{$data->body}}</p>
   @auth
   <a href="/editpost/{{$data->id}}/edit">Redaguoti</a>
   <a href="/deletepost/{{$data->id}}/delete">Salinti</a>
   @endauth

@endsection