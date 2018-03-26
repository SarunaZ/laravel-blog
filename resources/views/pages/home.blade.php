@extends ('layouts/main')

@section('content')

@foreach ($data as $info)
<div class="col-md-4">
    <h2>{{$info->title}}</h2>
    <p>{{$info->body}}</p>
    <p><a class="btn btn-default" href="/viewpost/{{$info->id}}" role="button">View details &raquo;</a></p>
</div>
@endforeach
{{ $data->links() }}
@endsection