<?php

$hostname = 'localhost';
$database_username = 'root';
$database_password = '';
$database_name = 'clube_desporto';

$db_connect = mysqli_connect($hostname, $database_username, $database_password, $database_name);
if (!$db_connect) {
    die('Erro de ligação à Base de Dados:' . mysqli_connect_error());
}

?>