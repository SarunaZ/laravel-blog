@extends ('layouts/main')
@section('content')
   <h2>{{$data->title}}</h2>
   <h3>{{\App\User::find($data->user_id)->name}}</h3>
   <h3>{{\App\category::find($data->cat_id)->name}}</h3>
   <p>{{$data->body}}</p>
   <div class="comments">
      <h2>Comments</h2>
      <ul class="list-group">
         @foreach($data->comments as $comment)
		 <h3>{{\App\User::find($data->user_id)->name}}</h3>
            <li>{{$comment->body}}</li>
            @endforeach

      </ul>
   </div>
   <hr>
   <div class="card">
      <div class="card-block">
         <form method="POST" action="/post/{{$data->id}}/comment">
            {{csrf_field()}}
            <div class="form-group">
               <textarea name="body" placeholder="Jūsų komentaras" class="form-control">

                  </textarea>
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary">Siųsti</button>
            </div>
         </form>
      </div>
   </div>
   @auth
   <a href="/editpost/{{$data->id}}/edit">Redaguoti</a>
   <a href="/deletepost/{{$data->id}}/delete">Salinti</a>
   @endauth

@endsection