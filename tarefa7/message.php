<?php

$messages = [
    1 => "Dados adicionados com sucesso",
    2 => "Dados atualizados com sucesso",
    3 => "Dados excluídos com sucesso",
    4 => "Erro na base de dados MySQL, verifique a consulta inserida",
];

$messages_id = isset($_GET["message"]) ? (int) $_GET["message"] : 0;

if ($messages_id != 0 && in_array($messages_id, [1, 2, 3, 4])) {
    echo $messages[$messages_id];
} else {
    echo "UFCD 5417 - CRUD com PHP, MySQL e Bootstrap";
}
?>