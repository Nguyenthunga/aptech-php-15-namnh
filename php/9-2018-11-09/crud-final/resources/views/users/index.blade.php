<form action="{{route('users.create')}}">
  <button>Tao Moi</button>
</form>

@foreach($users as $user)
<div style="display:flex;">
  {{$user->id}} - {{$user->name}} -
  <form action="{{route('users.show',$user->id)}}" method="GET">
    <button type="submit">Xem chi tiet</button>
  </form>
  <form action="{{route('users.destroy',$user->id)}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Xoa</button>
  </form>
  <form action="{{route('users.edit',$user->id)}}">
    <button>Edit</button>
  </form>
</div>
@endforeach
