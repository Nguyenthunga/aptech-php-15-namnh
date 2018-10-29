<?php
$server_name = 'localhost';
$user_name = 'root';
$password = '';
$db = 'aptech_php_15_ss4';

$connect = mysqli_connect($server_name, $user_name, $password, $db);
if (!$connect) {
    die('connect failed' . mysqli_connect_error());
}

$sql = "SELECT id, email, password FROM users";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<thead>
    <th>Id</th>
    <th>Email</th>
    <th>Password</th>
    </thead>";
    echo "<tbody>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo
            "<tr>
        <th>" . $row["id"] . "</th>
        <td>" . $row["email"] . "</td>
        <td>" . $row["password"] . "</td>
        </tr> ";
    }
    echo "</tbody></table>";
} else {
    echo "0 results";
}
mysqli_close($connect);
