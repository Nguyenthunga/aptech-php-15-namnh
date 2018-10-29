<?php
$server_name = 'localhost';
$user_name = 'root';
$password = '';

$connect = mysqli_connect($server_name, $user_name, $password);
if (!$connect) {
    die('connect failed' . mysqli_connect_error());
}

$sql = 'CREATE DATABASE aptech_php_15_ss4';

if (mysqli_query($connect, $sql)) {
    echo $sql . ' successfully';
} else {
    echo 'some thing went wrong ' . mysqli_error($connect);
}
