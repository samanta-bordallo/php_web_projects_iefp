<?

$sexo = "masculino";
$tempo_de_servico = 35;
if (($sexo == "masculino" && $tempo_de_servico >= 35) || ($sexo == "feminino" && $tempo_de_servico >= 30)) {
    echo "Pode se aposentar<br>";
} else {
    echo "Não pode se aposentar<br>";
}
echo "<br>";

?>