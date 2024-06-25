<?php
$notas = [8, 11, 15, 4, 7];
foreach ($notas as $nota) {
    if ($nota >= 9.5) {
        echo "Nota $nota: Aprovado";
    } else {
        echo "Nota $nota: Reprovado";
    }
    echo "<br>";
}

?>