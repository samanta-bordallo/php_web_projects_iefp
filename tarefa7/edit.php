<?php

include 'database_conn.php';

$query = "SELECT * FROM socios WHERE id='" . $_GET["id"] . "'"; // procura dados da tabela socios usando id
$result = mysqli_query($db_connect, $query);
$socio = mysqli_fetch_assoc($result); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Editar Sócio - Gestão do Clube de Desporto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<?php
require 'verificarLogin.php';
?>

<body>
    <div class="container mt-4">
        <div class="page-header mb-4">
            <h2>Editar Sócio</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="edit_process.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" class="form-control" required="">
                    <div class="form-group">
                        <label>Primeiro Nome</label>
                        <input type="text" name="primeironome" class="form-control"
                            value="<?php echo $socio['primeironome']; ?>" required="">
                    </div>
                    <div class="form-group">
                        <label>Último Nome</label>
                        <input type="text" name="ultimonome" class="form-control"
                            value="<?php echo $socio['ultimonome']; ?>" required="">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $socio['email']; ?>"
                            required="">
                    </div>
                    <button type="submit" class="btn btn-primary" value="submit">Guardar</button>
                    <a href="index.php" class="btn btn-secondary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>