<?php
include "database_conn.php";
require 'verificarLogin.php';

$id = $_GET["id"];

$query = "DELETE FROM socios WHERE id='$id'";

if (mysqli_query($db_connect, $query)) {
    $message = 3;
} else {
    $message = 4;
}

header("Location: index.php?message=" . $message);
?>