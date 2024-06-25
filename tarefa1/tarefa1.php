<?php
// Exercício 1
$frase = "Programação em php";
$msg = strtoupper($frase);
$msg2 = strtolower($frase);

echo "<h3>Exercício 1</h3>";
echo $msg . "<br>";
echo $msg2 . "<br><br>";

// Exercício 2
$nome = "Samanta";
$nome_inverso = strrev($nome);

echo "<h3>Exercício 2</h3>";
echo $nome_inverso . "<br><br>";

// Exercício 3
$frase2 = "Já estudei java antes";
$nova_frase2 = str_replace("java antes", "java e php antes", $frase2);

echo "<h3>Exercício 3</h3>";
echo $nova_frase2 . "<br><br>";

// Exercício 4
$nomes = "João,Maria,José,Paulo,Ana";
$nomes_array = explode(",", $nomes);

echo "<h3>Exercício 4</h3>";
foreach ($nomes_array as $nome) {
    echo $nome . "<br>";
}
echo "<br>";

// Exercício 5
$frase3 = "O PHP foi criado em noventa e cinco";
$nova_frase3 = str_replace(['O', 'A', 'i'], ['0', '4', '1'], $frase3);

echo "<h3>Exercício 5</h3>";
echo $nova_frase3 . "<br><br>";

// Exercício 6
$nomes_array_sorted = $nomes_array;
sort($nomes_array_sorted);

echo "<h3>Exercício 6</h3>";
foreach ($nomes_array_sorted as $nome) {
    echo $nome . "<br>";
}
echo "<br>";

// Exercício 7
$frase4 = "América Latina pode perder 2,4 milhões de empregos";
$tamanho_frase4 = strlen($frase4);
$palavras = explode(" ", $frase4);
$numero_palavras = count($palavras);

echo "<h3>Exercício 7</h3>";
echo "Tamanho da frase: " . $tamanho_frase4 . "<br>";
echo "Número de palavras: " . $numero_palavras . "<br>";
echo "Tamanho de cada palavra: <br>";
foreach ($palavras as $palavra) {
    echo $palavra . ": " . strlen($palavra) . "<br>";
}
echo "<br>";

// Exercício 8
$nome_completo = "Joaquim José da Silva Xavier";
$nomes_completo = explode(" ", $nome_completo);
$primeiro_nome = $nomes_completo[0];
$ultimo_nome = end($nomes_completo);

echo "<h3>Exercício 8</h3>";
echo $primeiro_nome . " " . $ultimo_nome . "<br>";
?>