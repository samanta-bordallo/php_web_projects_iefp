<?php
function maiorValor($a, $b, $c)
{
    $maior = max($a, $b, $c);
    echo "Valores: $a, $b, $c - Maior valor: $maior\n";
    return $maior;
}

maiorValor(1.5, 3.2, 2.8);