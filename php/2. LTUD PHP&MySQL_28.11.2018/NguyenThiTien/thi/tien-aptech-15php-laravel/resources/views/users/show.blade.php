<h1>HELLO EVERYBODY!!</h1>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

<table class='table table-hover table-bordered' style ='width=100%'>
<thead>
<tr>
    <th> id</th>
    <th> Name</th>
    <th> email</th>
     <th> password</th>
    <th> Action</th>
</tr>
</thead>
<tbody>
    
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td class="d-flex flex-row  ">
            
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


</tbody>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

