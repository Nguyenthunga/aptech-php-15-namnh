<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="Header container-fuild text-center">
<div class="row">
<div class="col-3 mt-2">
    <button type="button" class="bg-success">Home</button>
    </div>
    <h1> LARAVEL CRUD USERS DEMO </h1>
    </div>
</div>
</div>
<div class="align-items-center">
<form action="{{asset('users')}}" method="POST">
{{csrf_field()}}
    <div class="form-group ">
    Name: <input type="text" name="name" placeholder="input name"><br>
    </div>
    <div class="form-group ">
    Email: <input type="Email" name="email" placeholder="input email"><br>
    </div>
    <div class="form-group ">
    PassWord: <input type="Password" name="password"><br>
    </div>
    <div class="form-group ">
    <button type="submit">Confirm</button>
    </div>
</form>
</div>
</body>
</html>