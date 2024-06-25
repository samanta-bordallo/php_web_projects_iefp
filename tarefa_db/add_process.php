<?php

include "database_conn.php";

if (count($_POST) > 0) {
    $primeironome = $_POST["primeironome"];
    $ultimonome = $_POST["ultimonome"];
    $email = $_POST["email"];
    $dataregisto = date("Y-m-d");

    $query = "INSERT INTO clientes (primeironome, ultimonome, email, dataregisto) VALUES ('$primeironome', '$ultimonome', '$email', '$dataregisto')";

    if (mysqli_query($db_connect, $query)) {
        $message = 1;
    } else {
        $message = 4;
    }
}

header("Location: index.php?message=" . $message . "");
?>