

<?php
echo "<table border='1px' border-collapse= 'collapse'>";
for ($i = 0; $i < 4; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 4; $j++) {
        echo "<td>" . $i * 4 + $j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
