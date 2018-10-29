<?php
// echo "dung roi, get.php<br>";
// var_dump($_GET);
// echo $_GET['email'];
if ($_GET['email'] === 'a@gmail.com' & $_GET['password'] === '123456') {
    echo 'dang nhap thanh cong';
} else {
    header('Location: ./form.php');
}
