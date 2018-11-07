<form action="{{route('users.store')}}" method="POST">
  {{csrf_field()}} Name : <input type="text" name="name">

  <br> Password : <input type="text " name="password">
  <br> Email : <input type="text" name="email">
  <br>
  <button type="submit ">Tao moi nguoi dung</button>
</form>
