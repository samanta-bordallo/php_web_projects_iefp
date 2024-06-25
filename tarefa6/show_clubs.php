<?php
$file = 'clubes.txt';

if (file_exists($file)) {
    $clubs = file($file, FILE_IGNORE_NEW_LINES);

    foreach ($clubs as $club) {
        list($nome, $morada, $pais, $numSocios, $logotipo) = explode('|', $club);
        echo "<div class='result'>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Morada:</strong> $morada</p>";
        echo "<p><strong>País:</strong> $pais</p>";
        echo "<p><strong>Número de Sócios:</strong> $numSocios</p>";
        echo "<p><strong>Logotipo:</strong> <img src='uploads/$logotipo' alt='Logotipo' style='max-width:100px;'></p>";
        echo "</div>";
    }
} else {
    echo "Ainda não há clubes registrados.";
}
?>