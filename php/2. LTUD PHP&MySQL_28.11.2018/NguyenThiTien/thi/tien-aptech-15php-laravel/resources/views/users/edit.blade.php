<h1>hello</h1>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

        
     <form action="{{route('users.update', $user->id)}}" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT" />
            Name: <input type="text" id="name" placeholder="Name" name="name" value="{{$user->name}}">

            Email: <input type="email" id="email" placeholder="Email" name="email" value="{{$user->email}}">

            Password: <input type="password" id="password" placeholder="Password" name="password" value="{{$user->password}}">
            <button type="submit"> SAVE </button>
                    
    </form>
      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

