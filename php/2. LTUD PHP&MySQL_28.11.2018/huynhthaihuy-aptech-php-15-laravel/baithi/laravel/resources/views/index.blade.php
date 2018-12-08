<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
<div>
<table class="table table-bordered table-hover"><tr><th class='text-center'>ID</th><th class='text-center'>Name</th><th class='text-center'>Email</th><th class='text-center'>Action</th></tr>

@foreach($users as $user)
    <tr class="text-center"><td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td class="d-flex align-items-center justify-content-center">
    <form action="{{asset('users/' . $user->id)}}" method="GET">

    <button type="submit" class="btn btn-primary rounded-0">Show</button>
    </form>
    <form action="{{asset('users/'. $user->id.'/edit')}}" method="GET"><button type="submit" class="btn btn-warning rounded-0 mx-5">Edit</button>
    </form>
    <form action="{{asset('users/'. $user->id)}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" value="DELETE" name="_method"><button type="submit" class="btn btn-danger rounded-0">Delete</button></form>
    </td></tr>
@endforeach
</table>
</div>
<div class="container-fluid d-none d-xl-block align-items-center mt-3">
                <div class="row">
                    <div class="col-3">
                            <h1>CREATE USER</h1>
                            
                    </div>
                    <div class="col-9 d-flex justify-content-start align-items-center">
                    <form action="{{asset('users/create')}}" method="GET">
                            <button type="submit" class="btn btn-danger rounded-0">CREATE</button>
                    </form>
                    </div>
                </div>
            </div>
</body>
</html>