<?php
function verificaOrdem($a, $b, $c)
{
    $resultado = $a > $b && $b > $c;
    echo "Valores: $a, $b, $c - Condição a > b > c: " . ($resultado ? "true" : "false") . "\n";
    return $resultado;
}

verificaOrdem(5, 3, 1);
verificaOrdem(5, 3, 3);
?>