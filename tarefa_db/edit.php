<?php

include 'database_conn.php';

$query = "SELECT * FROM clientes WHERE id='" . $_GET["id"] . "'"; // procura dados da tabela clientes usando id
$result = mysqli_query($db_connect, $query);
$cliente = mysqli_fetch_assoc($result); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Editar cliente - CRUD com PHP, MySQL e Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <div class="page-header mb-4">
            <h2>Editar cliente</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="edit_process.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" class="form-control" required="">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Primeiro Nome</label>
                        <input type="text" name="primeironome" class="form-control"
                            value="<?php echo $cliente['primeironome']; ?>" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ultimo Nome</label>
                        <input type="text" name="ultimonome" class="form-control"
                            value="<?php echo $cliente['ultimonome']; ?>" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $cliente['email']; ?>"
                            required="">
                    </div>
                    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>