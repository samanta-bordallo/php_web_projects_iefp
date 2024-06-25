<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>CRUD com PHP, MySQL e Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header mb-4">
                    <h2>Adicionar novo cliente</h2>
                </div>
                <form action="add_process.php" method="post">
                    <div class="form-group">
                        <label>Primeiro Nome</label>
                        <input type="text" name="primeironome" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Ultimo Nome</label>
                        <input type="text" name="ultimonome" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required="">
                    </div>
                    <input type="submit" class="btn btn-primary" name="submit" value="Guardar">
                </form>
            </div>
        </div>
    </div>
</body>

</html>