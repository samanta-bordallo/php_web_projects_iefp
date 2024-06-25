<?
echo "<table border='1' cellspacing='0' cellpadding='5'>";
for ($i = 1; $i <= 10; $i++) {
    $color = ($i % 2 == 0) ? '#D3D3D3' : '#FFFFFF';
    echo "<tr style='background-color: $color;'><td>Samanta $i</td></tr>" . PHP_EOL;
}
echo "</table><br>" . PHP_EOL;
?>