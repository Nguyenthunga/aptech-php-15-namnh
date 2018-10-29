<?php

function connectDatabase()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "aptech_php_15_ss4";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die('Ket noi that bai ' . mysqli_connect_error());
    }
    return $conn;
}
