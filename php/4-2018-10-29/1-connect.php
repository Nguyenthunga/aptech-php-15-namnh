<?php
$server_name = 'localhost';
$user_name = 'root';
$password = '';

$connect = mysqli_connect($server_name, $user_name, $password);

if (!$connect) {
    die('connect failed' . mysqli_connect_error());
}

echo 'connect successfully';
