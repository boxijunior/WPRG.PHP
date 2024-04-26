<?php

function ArrayROZEPCHNIETA($input, $where) {
    if ($where < 0 || $where > count($input)) {
        echo "blad!";
    }

    foreach ($input as $element) {
        echo $element . " ";
    }
}

echo "Ile liczb ma zawierac tabela?";
$arrayLength = fgets(STDIN);

$input = arr();

echo "Podaj $arrayLength liczb: ";
for ($i = 0; $i < $arrayLength; $i++) {
    $input[$i] = fgets(STDIN);
}

echo "Podaj pozycje: ";
$where = fgets(STDIN);

ArrayROZEPCHNIETA($input, $where);
