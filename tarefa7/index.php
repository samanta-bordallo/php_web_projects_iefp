<?php
session_start();
include 'database_conn.php';

// Mensagens de feedback
$messages = [
    1 => "Dados adicionados com sucesso",
    2 => "Dados atualizados com sucesso",
    3 => "Dados excluídos com sucesso",
    4 => "Erro na base de dados MySQL, verifique a consulta inserida",
];

// Verifica se há mensagem para exibir
$message_id = isset($_GET["message"]) ? (int) $_GET["message"] : 0;
$message = isset($messages[$message_id]) ? $messages[$message_id] : '';

// Consulta para obter todas as atividades
$query_atividades = "SELECT * FROM atividades";
$result_atividades = mysqli_query($db_connect, $query_atividades);

// Consulta para obter todos os sócios
$query_socios = "SELECT id, primeironome, ultimonome, email, datainscricao FROM socios";
$result_socios = mysqli_query($db_connect, $query_socios);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>CRUD com PHP, MySQL e Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilos adicionais */
        .btn-rounded {
            border-radius: 20px;
            /* Raio do botão */
            padding: 10px 20px;
            /* Espaçamento interno */
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <!-- Mensagem de feedback -->
        <?php if (!empty($message)): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo $message; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-md-12">
                <div class="float-right mb-4">
                    <?php if (!isset($_SESSION['username'])): ?>
                        <a href="login.php" class="btn btn-primary">Login</a>
                    <?php else: ?>
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                    <?php endif; ?>
                </div>

                <div class="float mb-4 text-center d-flex justify-content-center align-items-center">
                    <h1>
                        Clube desportivo da Sasá
                        <img src="img2.jpg" class="img-fluid">
                    </h1>
                </div>

                <!-- Botões para adicionar novas atividades e sócios -->
                <div class="row justify-content-end">
                    <div class="col-md-3">
                        <a href="add_atividade.php" class="btn btn-success btn-rounded mb-2 btn-block">Adicionar nova
                            atividade</a>
                    </div>
                    <div class="col-md-3">
                        <a href="add.php" class="btn btn-success btn-rounded mb-2 btn-block">Adicionar novo sócio</a>
                    </div>
                </div>

                <!-- Tabela de Atividades -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="float-left mb-4">
                            <h2>Lista de Atividades</h2>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Sócios Inscritos</th>
                                    <th scope="col">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($atividade = mysqli_fetch_assoc($result_atividades)): ?>
                                    <tr>
                                        <td><?php echo $atividade['nome']; ?></td>
                                        <td><?php echo $atividade['descricao']; ?></td>
                                        <td>
                                            <?php
                                            // Consulta para obter os sócios inscritos nesta atividade
                                            $query_socios_inscritos = "SELECT * FROM inscricoes WHERE id_atividade = " . $atividade['id'];
                                            $result_socios_inscritos = mysqli_query($db_connect, $query_socios_inscritos);

                                            // Exibe os nomes dos sócios inscritos
                                            if (mysqli_num_rows($result_socios_inscritos) > 0) {
                                                while ($inscricao = mysqli_fetch_assoc($result_socios_inscritos)) {
                                                    // Obtém os dados do sócio
                                                    $query_socio = "SELECT * FROM socios WHERE id = " . $inscricao['id_socio'];
                                                    $result_socio = mysqli_query($db_connect, $query_socio);
                                                    $socio = mysqli_fetch_assoc($result_socio);
                                                    echo $socio['primeironome'] . " " . $socio['ultimonome'] . "<br>";
                                                }
                                            } else {
                                                echo "Nenhum sócio inscrito";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php if (isset($_SESSION['username'])): ?>
                                                <a href="edit_atividade.php?id=<?php echo $atividade['id']; ?>"
                                                    class="btn btn-primary">Editar</a>
                                                <a href="delete_atividade.php?id=<?php echo $atividade['id']; ?>"
                                                    class="btn btn-danger">Apagar</a>
                                            <?php else: ?>
                                                <a href="login.php" class="btn btn-primary">Editar</a>
                                                <a href="login.php" class="btn btn-danger">Apagar</a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Lista de Sócios -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="float-left mb-4">
                            <h2>Lista de Sócios</h2>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Primeiro Nome</th>
                                    <th scope="col">Ultimo Nome</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Inscrição</th>
                                    <th scope="col">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (mysqli_num_rows($result_socios) > 0): ?>
                                    <?php while ($dados = mysqli_fetch_assoc($result_socios)): ?>
                                        <tr>
                                            <th scope="row"><?php echo $dados['id']; ?></th>
                                            <td><?php echo $dados['primeironome']; ?></td>
                                            <td><?php echo $dados['ultimonome']; ?></td>
                                            <td><?php echo $dados['email']; ?></td>
                                            <td>
                                                <?php
                                                // Verifica se a chave 'datainscricao' existe no array $dados
                                                if (array_key_exists('datainscricao', $dados) && $dados['datainscricao'] !== null) {
                                                    $new_date = new DateTime($dados['datainscricao']);
                                                    echo $new_date->format('Y-m-d');
                                                } else {
                                                    echo 'Data de inscrição não disponível';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php if (isset($_SESSION['username'])): ?>
                                                    <a href="edit.php?id=<?php echo $dados['id']; ?>"
                                                        class="btn btn-primary">Editar</a>
                                                    <a href="delete.php?id=<?php echo $dados['id']; ?>"
                                                        class="btn btn-danger">Apagar</a>
                                                <?php else: ?>
                                                    <a href="login.php" class="btn btn-primary">Editar</a>
                                                    <a href="login.php" class="btn btn-danger">Apagar</a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="6" rowspan="1" headers="">Não foram encontrados dados!</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>