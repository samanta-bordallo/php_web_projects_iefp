<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <title>Registro de Clube</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h2>Registo de Clube</h2>
    <form action="save_club.php" method="post" enctype="multipart/form-data">
        <label for="nome">Nome do Clube:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="morada">Morada:</label>
        <input type="text" id="morada" name="morada" required><br><br>

        <label for="pais">País:</label>
        <input type="text" id="pais" name="pais" required><br><br>

        <label for="numSocios">Número de Sócios:</label>
        <input type="number" id="numSocios" name="numSocios" required><br><br>

        <label for="logotipo">Logotipo (JPG, máx 500KB):</label>
        <input type="file" id="logotipo" name="logotipo" accept=".jpg" required><br><br>

        <input type="submit" value="Registrar Clube">
    </form>

    <h2>Dados Registrados</h2>
    <div id="registeredClubs">
        <?php include 'show_clubs.php'; ?>
    </div>
</body>

</html>