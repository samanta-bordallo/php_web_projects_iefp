<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha de Inscrição</title>
    <link rel="stylesheet" href="02.css">
</head>

<body>
    <h1>Ficha de Inscrição Recebida</h1>
    <h2>Dados Pessoais</h2>
    <p><strong>Nome do Aluno:</strong> <?php echo $_POST['nomeAluno']; ?></p>
    <p><strong>Data de Nascimento:</strong> <?php echo $_POST['dataNascimento']; ?></p>
    <p><strong>Nome da Mãe:</strong> <?php echo $_POST['nomeMae']; ?></p>
    <p><strong>Nome do Pai:</strong> <?php echo $_POST['nomePai']; ?></p>
    <p><strong>Telefone:</strong> <?php echo $_POST['telefone']; ?></p>
    <p><strong>Email:</strong> <?php echo $_POST['email']; ?></p>

    <h2>Informações de Matrícula</h2>
    <p><strong>Série:</strong> <?php echo $_POST['serie']; ?></p>
    <p><strong>Turno:</strong> <?php echo $_POST['turno']; ?></p>
    <p><strong>Atividades Extracurriculares:</strong>
        <?php
        if (isset($_POST['atividades'])) {
            echo implode(', ', $_POST['atividades']);
        } else {
            echo "Nenhuma selecionada";
        }
        ?>
    </p>
</body>

</html>