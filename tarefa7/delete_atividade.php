<?php
include "database_conn.php";
require 'verificarLogin.php';

$id = $_GET["id"];

// Excluir inscrições relacionadas a esta atividade
$query_delete_inscricoes = "DELETE FROM inscricoes WHERE id_atividade='$id'";

if (mysqli_query($db_connect, $query_delete_inscricoes)) {
    // Agora podemos excluir a atividade
    $query_delete_atividade = "DELETE FROM atividades WHERE id='$id'";

    if (mysqli_query($db_connect, $query_delete_atividade)) {
        $message = 3; // Atividade excluída com sucesso
    } else {
        $message = 4; // Erro ao tentar excluir a atividade
    }
} else {
    $message = 4; // Erro ao tentar excluir as inscrições
}

header("Location: index.php?message=" . $message);
?>