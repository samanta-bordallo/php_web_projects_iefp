<?php
function maiorPrimoInferior($numero)
{
    if ($numero < 2) {
        echo "Número: $numero - Maior primo inferior: 0\n";
        return 0;
    }

    for ($i = $numero - 1; $i >= 2; $i--) {
        if (ehPrimo($i)) {
            echo "Número: $numero - Maior primo inferior: $i\n";
            return $i;
        }
    }
    echo "Número: $numero - Maior primo inferior: 0\n";
    return 0;
}

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
maiorPrimoInferior(10);
maiorPrimoInferior(2);
?>