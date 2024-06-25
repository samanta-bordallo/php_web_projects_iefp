<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $morada = $_POST['morada'];
    $pais = $_POST['pais'];
    $numSocios = $_POST['numSocios'];

    // Processamento do upload do logotipo
    $logotipo = $_FILES['logotipo'];
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($logotipo['name'], PATHINFO_EXTENSION));

    if ($imageFileType != "jpg") {
        echo "<p>Desculpe, apenas arquivos JPG são permitidos.</p>";
        $uploadOk = 0;
    }

    if ($logotipo['size'] > 500000) {
        echo "<p>Desculpe, o arquivo é muito grande. Máximo 500KB.</p>";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "<p>Desculpe, seu arquivo não foi enviado.</p>";
    } else {
        $logotipoName = strtolower(str_replace(' ', '_', pathinfo($logotipo['name'], PATHINFO_FILENAME))) . '_' . time() . '.jpg';
        $target_dir = "uploads/";
        $target_file = $target_dir . $logotipoName;

        if (move_uploaded_file($logotipo['tmp_name'], $target_file)) {
            $clubeData = "$nome|$morada|$pais|$numSocios|$logotipoName\n";
            file_put_contents('clubes.txt', $clubeData, FILE_APPEND | LOCK_EX);
            header("Location: index.php");
        } else {
            echo "<p>Desculpe, houve um erro ao enviar seu arquivo.</p>";
        }
    }
}
?>