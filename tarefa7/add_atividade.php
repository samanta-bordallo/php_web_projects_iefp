<?php
require 'verificarLogin.php';
?>
<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <title>Adicionar Nova Atividade</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header mb-4">
                    <h2>Adicionar Nova Atividade</h2>
                </div>
                <form action="add_atividade_process.php" method="post">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <textarea name="descricao" class="form-control" required=""></textarea>
                    </div>
                    <div class="form-group">
                        <label>Data</label>
                        <input type="date" name="data" class="form-control" required="">
                    </div>
                    <input type="submit" class="btn btn-primary" name="submit" value="Guardar">
                    <a href="index.php" class="btn btn-secondary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>