<?php

echo "Podaj wartosc do przekonwertowania ze stop na metry:\n";

$feet = readline("Stopy (fuj): ");

$meters = 0.3048 * $feet;

echo "{$feet} stop to {$meters} metrow\n";
