<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title class="text-uppercase">aptech php laravel crud users demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class= "d-flex ml-3 justify-content-around align-items-center border-bottom">
            <form action="./">
            <button class="btn btn-info">Home</button></form>
            <h1 class="text-center text-uppercase">aptech php laravel crud users demo</h1>
            </div>
            <h3 class="text-uppercase text-muted">index page</h3>
            
            <table class="table table-hover mt-3 table-bordered border-bottom">
            <thead>
            <tr class="text-center">
      <th scope="col">Id</th>
      <th scope="col" >Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Active</th>
    </tr>
            </thead>
            <tbody class="text-center">
            @foreach ($users as $user)
            <tr>
            <td style="width:10%">{{$user->id}}</td>
            <td style="width:20%">{{$user->name}}</td>
            <td style="width:20%">{{$user->email}}</td>
            <td style="width:20%">{{$user->password}}</td>
            <td class="d-flex justify-content-between">
            <form action="/users/{{$user->id}}" method="get">
            {{csrf_field()}}
      <input type="hidden" value="get" name="_method">
      <button type='submit' class='btn btn-success'>Show</button></form>
      <form action="{{ route('users.edit',$user->id) }}" method="get">
      {{csrf_field()}}
      <input type="hidden" value="get" name="_method">
      <button type='submit' class='btn btn-warning'>Edit</button>
      </form>
      <form action="{{ route('users.destroy',$user->id) }}" method="POST">
      {{csrf_field()}}
      <input type="hidden" value="DELETE" name="_method">
      <button type='submit' class='btn btn-danger'>Delete</button></form>
      </td>
            </tr>
            @endforeach
            </tbody>
            </table>
            <div  class="d-flex  align-items-center justify-content-around">
            <p class="text-uppercase text-muted">aptech php laravel crud users demo</p>
            <form action="/create"  method="get"  >
            {{csrf_field()}}
            <input type="hidden" value="get" name="_method">
            <button type='submit' class='btn btn-info text-uppercase'>create new an user</button></form>
           
            </div>
            </div>
        </div>
    </div>
    
</body>
</html>