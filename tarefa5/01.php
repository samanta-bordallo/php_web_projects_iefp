<?php
function calculate($number1, $number2, $operation)
{
    switch ($operation) {
        case 'add':
            return $number1 + $number2;
        case 'subtract':
            return $number1 - $number2;
        case 'multiply':
            return $number1 * $number2;
        case 'divide':
            if ($number2 == 0) {
                return "Erro: Divisão por zero.";
            }
            return $number1 / $number2;
        default:
            return "Operação inválida.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = (float) $_POST["number1"];
    $number2 = (float) $_POST["number2"];
    $operation = $_POST["operation"];
    $result = calculate($number1, $number2, $operation);

    $operationSymbols = [
        'add' => '+',
        'subtract' => '-',
        'multiply' => '*',
        'divide' => '/'
    ];
    $operationSymbol = $operationSymbols[$operation];

    echo "<h1>Resultado da Calculadora</h1>";
    echo "<p>Resultado de $number1 $operationSymbol $number2 = $result</p>";
} else {
    echo "Formulário não foi enviado corretamente.";
}
?>