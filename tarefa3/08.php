<?php
function ehPrimo($num)
{
    if ($num <= 1) {
        echo "Número: $num - É primo: false\n";
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            echo "Número: $num - É primo: false\n";
            return false;
        }
    }
    echo "Número: $num - É primo: true\n";
    return true;
}

ehPrimo(7);
ehPrimo(10);
?>