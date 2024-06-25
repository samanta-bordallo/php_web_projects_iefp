<?php
function ehPrimo($num)
{
    if ($num <= 1)
        return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0)
            return false;
    }
    return true;
}

function contaPrimos($a, $b)
{
    $count = 0;
    for ($i = min($a, $b); $i <= max($a, $b); $i++) {
        if (ehPrimo($i)) {
            $count++;
        }
    }
    echo "Valores: $a, $b - Número de primos: $count\n";
    return $count;
}

contaPrimos(3, 10);
?>