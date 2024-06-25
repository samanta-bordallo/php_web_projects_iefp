<?
echo "<table border='1' cellspacing='0' cellpadding='5' style='border-collapse: collapse;'>";
for ($row = 0; $row < 8; $row++) {
    echo "<tr>" . PHP_EOL;
    for ($col = 0; $col < 8; $col++) {
        $color = (($row + $col) % 2 == 0) ? '#FFFFFF' : '#000000';
        echo "<td style='width:30px; height:30px; background-color: $color;'></td>" . PHP_EOL;
    }
    echo "</tr>" . PHP_EOL;
}
echo "</table><br>" . PHP_EOL;

?>