<?php
session_start();
include 'database_conn.php';

$username = $_POST['username'];
$password = sha1($_POST['password']);

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($db_connect, $query);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username;
    header("Location: index.php");
} else {
    header("Location: login.php?error=1");
}
exit;
?>