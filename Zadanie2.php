<?php

function hex($oct): string {
    $dec = octdec($oct);

    return dechex($dec);
}

echo "Ile miejsc powinna miec tabela? ";
$arrLength = fgets(STDIN);

$input = array();

echo "Podaj liczby w systemie osemkowym do tablicy: ";
for ($i = 0; $i < $arrLength; $i++) {
    $input[$i] = fgets(STDIN);
}

foreach ($input as $oct) {
    echo "Octal: " . $oct . " => Hexadecimal" . hex($oct) . "\n";
}