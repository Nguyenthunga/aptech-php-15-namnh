<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="Header container-fluid text-center">
<div class="row">
<div class="col-3 mt-2">
    <button type="button" class="bg-success">Home</button>
    </div>
    <h1> LARAVEL CRUD USERS DEMO </h1>
    </div>
</div>
</div>
<div class="align-items-center">
<form action="{{asset('users/'. $user->id.'/updated')}}" method="post">
    <input type="hidden" name="_method" value="put" /> 
    <div class="form-group ">
    Name: <input type="text" name="name" placeholder="input name" value="{{$user->name}}"><br>
    </div>
    <div class="form-group ">
    Email: <input type="Email" name="email" placeholder="input email" value="{{$user->email}}"><br>
    </div>
    <div class="form-group ">
    <button type="submit">Save</button>
    {{ csrf_field() }}
    </div>
</form>
</div>
</body>
</html>