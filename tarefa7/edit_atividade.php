<?php
include 'database_conn.php';
require 'verificarLogin.php'; // Verifica se o usuário está logado

// Verifica se o ID da atividade foi passado via GET
if (!isset($_GET['id'])) {
    header("Location: index.php"); // Redireciona se o ID não estiver presente
    exit();
}

// Obtém dados da atividade
$query_atividade = "SELECT * FROM atividades WHERE id='" . $_GET["id"] . "'";
$result_atividade = mysqli_query($db_connect, $query_atividade);
$atividade = mysqli_fetch_assoc($result_atividade);

// Obtém todos os sócios para preencher a lista de inscrição
$query_socios = "SELECT * FROM socios";
$result_socios = mysqli_query($db_connect, $query_socios);

// Obtém os sócios inscritos nesta atividade
$query_inscritos = "SELECT socios.id, socios.primeironome, socios.ultimonome FROM inscricoes JOIN socios ON inscricoes.id_socio = socios.id WHERE inscricoes.id_atividade = '" . $_GET["id"] . "'";
$result_inscritos = mysqli_query($db_connect, $query_inscritos);
$inscritos = mysqli_fetch_all($result_inscritos, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Editar Atividade</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <div class="page-header mb-4">
            <h2>Editar Atividade</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="edit_atividade_process.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" class="form-control" required="">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control" value="<?php echo $atividade['nome']; ?>"
                            required="">
                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <textarea name="descricao" class="form-control"
                            required=""><?php echo $atividade['descricao']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Data</label>
                        <input type="date" name="data" class="form-control" value="<?php echo $atividade['data']; ?>"
                            required="">
                    </div>
                    <div class="form-group">
                        <label>Sócios Inscritos</label>
                        <select name="socios[]" class="form-control" multiple>
                            <?php while ($socio = mysqli_fetch_assoc($result_socios)): ?>
                                <option value="<?php echo $socio['id']; ?>" <?php echo in_array($socio['id'], array_column($inscritos, 'id')) ? 'selected' : ''; ?>>
                                    <?php echo $socio['primeironome'] . ' ' . $socio['ultimonome']; ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                    <a href="index.php" class="btn btn-secondary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>