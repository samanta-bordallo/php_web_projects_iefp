<?php
include "database_conn.php";
require 'verificarLogin.php'; // Verifica se o usuário está logado

// Verifica se o método de requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados enviados pelo formulário
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $data = $_POST["data"];
    $socios = $_POST["socios"];

    // Atualiza a atividade no banco de dados
    $query_update = "UPDATE atividades SET nome='$nome', descricao='$descricao', data='$data' WHERE id='$id'";
    if (mysqli_query($db_connect, $query_update)) {
        // Remove todas as inscrições existentes para esta atividade
        $query_delete_inscricoes = "DELETE FROM inscricoes WHERE id_atividade='$id'";
        mysqli_query($db_connect, $query_delete_inscricoes);

        // Insere as novas inscrições
        foreach ($socios as $id_socio) {
            $query_insert_inscricao = "INSERT INTO inscricoes (id_atividade, id_socio) VALUES ('$id', '$id_socio')";
            mysqli_query($db_connect, $query_insert_inscricao);
        }

        $message = 2; // Dados atualizados com sucesso
    } else {
        $message = 4; // Erro na base de dados MySQL
    }

    // Redireciona para a página principal com a mensagem
    header("Location: index.php?message=" . $message);
    exit();
} else {
    // Se não for método POST, redireciona para a página principal
    header("Location: index.php");
    exit();
}
?>