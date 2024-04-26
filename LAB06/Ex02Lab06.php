<?php

echo "<table>";
echo "<tr><th>a</th><th>b</th><th>pow(a, b)</th></tr>";


$b = 2;
for ($a = 1; $a <= 10; $a++) {

    $result = pow($a, $b);
    echo "<tr><td>$a</td><td>$b</td><td>$result</td></tr>";
    $b++;
}

    echo "</table>";
