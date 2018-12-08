<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="text-center"> <h1> CREATE PAGE </h1> </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <form action="{{route('users.store')}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="POST" />
                    <div>
                        Name: <input type="text" id="name" placeholder="Name" name="name">
                    </div>
                        Email: <input type="email" id="email" placeholder="Email" name="email">
                    <div>
                        Password: <input type="password" id="password" placeholder="Password" name="password">
                    </div>
                    <div>
                        <button type="submit"> CREATE
                    </button>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
    <div class="container mt-3 mb-3">
            <form action="{{route('users.create')}}">
                <button class="btn btn-danger"> CREATE AN USERS </button>
            </form>
        </div>
</body>
</html>