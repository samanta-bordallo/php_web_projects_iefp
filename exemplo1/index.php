<html>

<head>
    <meta charset="UTF-8">
    <title>Registro de utilizador</title>
</head>

<body>
    <h2>Registo de utilizador</h2>
    <form action="save_user.php" method="post">
        <label for="username">Nome de utilizador:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <input type="submit" value="Registrar">
    </form>

    <h2>Dados Registrados</h2>
    <div id="registeredUsers">
        <?php include 'show_users.php'; ?>
    </div>
</body>

</html>