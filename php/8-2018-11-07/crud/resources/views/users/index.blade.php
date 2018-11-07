@foreach($users as $user) {{$user->id}} - {{$user->name}} - <a href="/users/{{$user->id}}">xem chi tiet</a> -
<form action="{{asset('users/' . $user->id)}}" method="POST">
  {{csrf_field()}}
  <input type="hidden" value="DELETE" name="_method">
  <button type="submit">Xoa</button>
</form>
</a><br>@endforeach
