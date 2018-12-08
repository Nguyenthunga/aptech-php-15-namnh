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
            <form action="{{asset('./users')}}">
            <button class="btn btn-info">Home</button></form>
            <h1 class="text-center text-uppercase">aptech php laravel crud users demo</h1>
            </div>
            <h3 class="text-uppercase text-muted">create page</h3>
            <form action="{{route('users.store')}}" method="POST">
            {{csrf_field()}} 
    <div class="form-group">
    <label >Name </label>
    <input type="text" class="form-control" placeholder="Enter name" Name="name">
  </div>
     <div class="form-group">
    <label >Email </label>
    <input type="email" class="form-control"aria-describedby="emailHelp" placeholder="Enter email" Name="email">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Password" Name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
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