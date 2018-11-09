<form action="{{route('users.update',$user->id)}}" method="POST">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="PUT">
  <div>
    Name :
    <input type="text" name="name" value="{{$user->name}}">
  </div>
  <div>
    Email : <input type="text " name="email" value="{{$user->email}}">
  </div>
  <div>
    Password : <input type="text " name="password" value="{{$user->password}}">
  </div>
  <div><button type="submit ">Sua nguoi dung</button></div>
</form>
