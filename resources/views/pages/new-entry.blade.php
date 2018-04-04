@extends ('layouts/main')
@section('content')
<div class="container">
    <div class="col-md-5">
        <div class="form-area">

            <form role="form" method="post" action="/savepost">
                {{csrf_field()}}
                <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">Naujas skelbimas</h3>

                <div class="form-group">

                    <input type="text" class="form-control" name="title" for="title" id="title" placeholder="title" required>

                </div>
				<select class="form-control form-control-sm">
				@foreach($data as $cats)
  <option>         
							   <h3>{{\App\category::find($cats->cat_id)->name}}</h3>

            @endforeach</option>
</select>
<br>
                <div class="form-group">

                    <textarea class="form-control" type="textarea" name="body" id="body" placeholder="Message" maxlength="140" rows="7"></textarea>
                    <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
                </div>

                <input type="submit" name="submit" value="Siųsti"></input>
            </form>
        </div>
		@foreach ($data as $info)
<div class="col-md-4">
    <h2>{{$info->title}}</h2>
	   <h3>{{\App\User::find($info->user_id)->name}}</h3>
	<h3>{{$info->name}}</h3>
    <p>{{$info->body}}</p>
    <p><a class="btn btn-default" href="/viewpost/{{$info->id}}" role="button">View details &raquo;</a></p>
</div>
@endforeach
    </div>
</div>

@endsection