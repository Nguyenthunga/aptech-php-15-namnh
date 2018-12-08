<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <h1 class="text-center"> LARAVEL </h1>
        <table class="table table-hover table-bordered">
            <thead class="text-center">
                <tr class="">
                    <th> # </th>
                    <th> Name </th>
                    <th> Email </th>
                    <th> Password </th>
                    <th> Action </th>
                </tr>
            </thead>
            <tbody >
                @foreach($users as $user)
                <tr class="">
                    <td> {{$user->id}} </td>
                    <td> {{$user->name}} </td>
                    <td> {{$user->email}} </td>
                    <td> {{$user->password}} </td>
                    <td class="d-flex flex-row justify-content-center align-items-center">
                    <form action="{{route('index/' . $user->id)}}" method="GET">
                            <button class='btn btn-info'> SHOW </button>
                        </form>
                        <form action="{{route('user.edit', $user->id)}}" method="GET">
                            <button class='btn btn-danger '> EDIT </button>
                        </form>
                        <form action="{{route('user.destroy',$user->id)}}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                            <button type='submit' class='btn btn-warning'> DELETE </button></form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </body>
</html>