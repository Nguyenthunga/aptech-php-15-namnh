<form action="{{route('users.store')}}" method="POST">
  {{csrf_field()}}
  <div>
    Name : <input type="text" name="name">
  </div>
  <div>
    Email : <input type="text" name="email">
  </div>
  <div>
    Password : <input type="text" name="password">
  </div>
  <div><button type="submit">Tao nguoi dung</button></div>
</form>
