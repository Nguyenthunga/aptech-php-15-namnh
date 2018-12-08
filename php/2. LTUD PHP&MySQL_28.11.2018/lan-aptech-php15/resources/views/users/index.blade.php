
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


<div class="text-center mb-3"> <h1> INDEX PAGE </h1> </div>

<div class="container">
    <table class="table table-hover table-bordered text-center">
        <thead>
            <tr>
                <th> ID </th>
                <th> Name </th>
                <th> Email </th>
                <th> Password </th>
                <th> Created_at </th>
                <th> Updated_at </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
                @foreach($users as $user)
                    <tr>
                        <td> {{$user->id}} </td>
                        <td> {{$user->name}} </td>
                        <td> {{$user->email}} </td>
                        <td> {{$user->password}} </td>
                        <td> {{$user->created_at}} </td>
                        <td> {{$user->updated_at}} </td>
                        <td class="d-flex flex-row justify-content-center">
                            <form action="{{route('users.show', $user->id)}}" method="GET">
                                <button class='btn btn-danger ml-2'> SHOW </button>
                            </form>
                            
                            <form action="{{route('users.edit', $user->id)}}" method="GET">
                                <button class='btn btn-success ml-2'> EDIT </button> 
                            </form>
                            
                            <form action="{{route('users.destroy', $user->id)}}" method="POST">
                                {{csrf_field()}}
                                <input type='hidden' value='DELETE' name='_method'>
                                <button type='submit' class='btn btn-warning ml-2'> DELETE </button>
                            </form>
                                
                    </td>
                    </tr>
                    
                @endforeach
          
        </tbody>
    </table>
</div>
<div class="container mt-3 mb-3">
        <form action="{{route('users.create')}}">
            <button class="btn btn-danger"> CREATE AN USERS </button>
        </form>
</div>

</body>
</html>