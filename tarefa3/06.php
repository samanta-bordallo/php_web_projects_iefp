<?php
function somaAlgarismos($numero)
{
    $soma = 0;
    $numOriginal = $numero;
    while ($numero != 0) {
        $soma += $numero % 10;
        $numero = intval($numero / 10);
    }
    echo "Número: $numOriginal - Soma dos algarismos: $soma\n";
    return $soma;
}

somaAlgarismos(123);
?>