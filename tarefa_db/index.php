<?php
// ligação à base de dados
include 'database_conn.php';

$query = "select * from clientes limit 200";
$result = mysqli_query($db_connect, $query);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> CRUD com PHP, MySQL e Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?php include 'message.php'; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
            </div>
            <div class="col-md-12">
                <div class="float-left mb-4">
                    <h2>Lista de clientes</h2>
                </div>
                <div class="float-right">
                    <a href="add.php" class="btn btn-success">Adicionar novo cliente</a>
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
                        <!-- procurar dados do cliente com array associativa -->
                        <?php if ($result->num_rows > 0): ?>
                            <?php while ($dados = mysqli_fetch_assoc($result)): ?>
                                <tr>
                                    <th scope="row"><?php echo $dados['id']; ?></th>
                                    <td><?php echo $dados['primeironome']; ?></td>
                                    <td><?php echo $dados['ultimonome']; ?></td>
                                    <td><?php echo $dados['email']; ?></td>
                                    <td><?php $new_date = new DateTime($dados['dataregisto']);
                                    echo $new_date->format('Y-m-d'); ?>
                                    </td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $dados['id']; ?>" class="btn btn-primary">Editar</a>
                                        <a href="delete.php?id=<?php echo $dados['id']; ?>" class="btn btn-danger">Apagar</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="3" rowspan="1" headers="">Não foram encontrados dados!</td>
                            </tr>
                        <?php endif; ?>
                        <?php mysqli_free_result($result); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>