@extends ('layouts/main')
@section('content')
    @foreach ($data as $info)
      <table>
          <th>
            <h2>{{$info->title}}</h2>

          </th>
          <tr>
              <td>
                  <p>{{$info->body}}</p>
              </td>
              <td>
                  @auth
                      <a href="/editpost/{{$info->id}}/edit">Redaguoti</a>
                      <a href="/deletepost/{{$info->id}}/delete">Salinti</a>
                  @endauth
              </td>
          </tr>
      </table>
    @endforeach




@endsection