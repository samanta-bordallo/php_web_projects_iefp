<?php
require 'verificarLogin.php';
include "database_conn.php";

if (count($_POST) > 0) {
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $data = $_POST["data"];

    $query = "INSERT INTO atividades (nome, descricao, data) VALUES ('$nome', '$descricao', '$data')";

    if (mysqli_query($db_connect, $query)) {
        $atividade_id = mysqli_insert_id($db_connect); // Obtém o ID da atividade recém-inserida

        // Verifica quais sócios foram marcados como inscritos
        if (!empty($_POST['socios'])) {
            foreach ($_POST['socios'] as $socio_id) {
                // Insere a inscrição na tabela intermediária
                $query_inscricao = "INSERT INTO inscricoes (id_socio, id_atividade) VALUES ('$socio_id', '$atividade_id')";
                mysqli_query($db_connect, $query_inscricao);
            }
        }

        $message = 1;
    } else {
        $message = 4;
    }
}

header("Location: index.php?message=" . $message);
?>