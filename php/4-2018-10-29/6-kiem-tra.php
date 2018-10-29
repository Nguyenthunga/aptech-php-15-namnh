<?php
// require 'helper.php';
// $conn = connectDatabase();

$servername = "localhost";
$username = "root";
$password = "";
$database = "aptech_php_15_ss4";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die('Ket noi that bai ' . mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "dang nhap thanh cong";
} else {
    echo "dang nhap that bai, khong tim thay";
}
