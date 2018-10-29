<?php
$server_name = 'localhost';
$user_name = 'root';
$password = '';

$test_connect = mysqli_connect($server_name, $user_name, $password);

$sql = 'select * from users';

$data = mysqli_query($test_connect, $sql);
var_dump($data);
