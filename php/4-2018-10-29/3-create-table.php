<?php
$server_name = 'localhost';
$user_name = 'root';
$password = '';
$db = 'aptech_php_15_ss4';

$connect = mysqli_connect($server_name, $user_name, $password, $db);
if (!$connect) {
    die('connect failed' . mysqli_connect_error());
}

$sql = 'CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255)
)';

if (mysqli_query($connect, $sql)) {
    echo $sql . ' successfully';
} else {
    echo 'something went wrong ' . mysqli_error($connect);
}
