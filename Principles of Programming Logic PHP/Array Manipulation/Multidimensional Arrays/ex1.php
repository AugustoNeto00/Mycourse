<?php
// This code iterates through an array of numbers and prints each number on a new line.
echo "Multiplicações:";
$numeros = array(array(10, 21, 54),array(12, 65, 43));
$numeros2 = array(array(34,73,84),array(96,3,8));
$multi1 = $numeros[0][0] * $numeros2[1][0];
$multi2 = $numeros[0][1] * $numeros2[1][1];
$multi3 = $numeros[0][2] * $numeros2[1][2];
$multi4 = $numeros[1][0] * $numeros2[0][0];

echo "\n", $multi1;
echo "\n", $multi2;
echo "\n", $multi3;
echo "\n", $multi4;
