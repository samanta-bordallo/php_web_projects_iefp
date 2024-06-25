<?php
function getMonthName($monthNumber)
{
    if ($monthNumber < 1 || $monthNumber > 12) {
        return "Número de mês inválido.";
    }

    $months = [
        1 => "Janeiro",
        2 => "Fevereiro",
        3 => "Março",
        4 => "Abril",
        5 => "Maio",
        6 => "Junho",
        7 => "Julho",
        8 => "Agosto",
        9 => "Setembro",
        10 => "Outubro",
        11 => "Novembro",
        12 => "Dezembro"
    ];
    return $months[$monthNumber];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $month = (int) $_POST["month"];

    $monthName = getMonthName($month);

    echo "<h1>Dados Recebidos</h1>";
    echo "<p>Nome: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Número do Mês: $month</p>";
    echo "<p>Nome do Mês: $monthName</p>";
} else {
    echo "Formulário não foi enviado corretamente.";
}
?>