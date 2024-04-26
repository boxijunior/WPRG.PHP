<?php

$string = readline("Enter a word: ");

$c = 0;
$samogloski = ['a', 'e', 'i', 'o', 'u', 'y'];
$string = strtolower($string);
$length = strlen($string);
for ($i = 0; $i < $length; $i++) {
    if ( !in_array($string[$i], $samogloski)) {
       $c = $c + 1;
    }
}
echo $c;
