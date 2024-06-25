<?php
function alunoAprovado($f1, $f2)
{
    $aprovado = ($f1 >= 7 && $f2 >= 7 && ($f1 + $f2) >= 10);
    echo "Notas: F1=$f1, F2=$f2 - Aprovado: " . ($aprovado ? "true" : "false") . "\n";
    return $aprovado;
}

alunoAprovado(7, 7);
alunoAprovado(6, 7);
?>