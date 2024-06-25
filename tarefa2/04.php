<?
$notas_aluno = [10, 9, 12];
$media = array_sum($notas_aluno) / count($notas_aluno);
foreach ($notas_aluno as $nota) {
    if ($nota < 8) {
        echo "Nota $nota: Reprovado<br>" . PHP_EOL;
    } elseif ($nota < 10) {
        echo "Nota $nota: Vai a oral<br>" . PHP_EOL;
    } else {
        echo "Nota $nota: Aprovado<br>" . PHP_EOL;
    }
}
if ($media > 12) {
    echo "Média $media: Aprovado<br>" . PHP_EOL;
} else {
    echo "Média $media: Não aprovado<br>" . PHP_EOL;
}
echo "<br>" . PHP_EOL;
?>