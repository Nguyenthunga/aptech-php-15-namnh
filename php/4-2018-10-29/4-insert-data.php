<?php
$server_name = 'localhost';
$user_name = 'root';
$password = '';
$db = 'aptech_php_15_ss4';

$connect = mysqli_connect($server_name, $user_name, $password, $db);
if (!$connect) {
    die('connect failed' . mysqli_connect_error());
}

$sql = "INSERT INTO users (name, email,password)
VALUE
('nam','namnh.developer@gmail.com','123'),
('nu','nu@gmail.com','123'),
('namcoi','admin@namcoi.com','123')";

if (mysqli_query($connect, $sql)) {
    echo $sql . ' successfully';
} else {
    echo 'some thing went wrong ' . mysqli_error($connect);
}
