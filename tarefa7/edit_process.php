<?php

include "database_conn.php";
require 'verificarLogin.php';

if (count($_POST) > 0) {

    $id = $_POST["id"];
    $primeironome = $_POST["primeironome"];
    $ultimonome = $_POST["ultimonome"];
    $email = $_POST["email"];

    $query = "UPDATE socios SET primeironome='$primeironome', ultimonome='$ultimonome', email='$email' WHERE id='$id'";

    if (mysqli_query($db_connect, $query)) {
        $message = 2;
    } else {
        $message = 4;
    }
}
header("Location: index.php?message=" . $message);
?>