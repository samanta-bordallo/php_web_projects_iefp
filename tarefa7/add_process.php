<?php

require 'verificarLogin.php';
include "database_conn.php";



if (count($_POST) > 0) {
    $primeironome = $_POST["primeironome"];
    $ultimonome = $_POST["ultimonome"];
    $email = $_POST["email"];
    $datainscricao = date("Y-m-d");

    $query = "INSERT INTO socios (primeironome, ultimonome, email, datainscricao) VALUES ('$primeironome', '$ultimonome', '$email', '$datainscricao')";

    if (mysqli_query($db_connect, $query)) {
        $message = 1;
    } else {
        $message = 4;
    }
}

header("Location: index.php?message=" . $message);
?>