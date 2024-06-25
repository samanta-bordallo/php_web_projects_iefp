<?php
function calculateFinalGrade($grade1, $grade2, $grade3)
{
    $average = ($grade1 + $grade2 + $grade3) / 3;

    if ($average >= 9.5) {
        $status = "Aprovado";
    } else {
        $status = "Reprovado";
    }

    return [
        'average' => $average,
        'status' => $status
    ];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $grade1 = (float) $_POST["grade1"];
    $grade2 = (float) $_POST["grade2"];
    $grade3 = (float) $_POST["grade3"];

    $result = calculateFinalGrade($grade1, $grade2, $grade3);

    echo "<h1>Resultado Final</h1>";
    echo "<p>Nota 1: $grade1</p>";
    echo "<p>Nota 2: $grade2</p>";
    echo "<p>Nota 3: $grade3</p>";
    echo "<p>Média Final: " . number_format($result['average'], 2) . "</p>";
    echo "<p>Status: {$result['status']}</p>";
} else {
    echo "Formulário não foi enviado corretamente.";
}
?>