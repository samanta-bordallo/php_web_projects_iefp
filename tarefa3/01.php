<?php
function soma($a, $b)
{
    $resultado = $a + $b;
    if ($resultado < 0) {
        echo "Valores: $a, $b - Soma: 0\n";
        return 0;
    } else {
        echo "Valores: $a, $b - Soma: $resultado\n";
        return $resultado;
    }
}
soma(5, 3);
soma(-5, 3);
?>