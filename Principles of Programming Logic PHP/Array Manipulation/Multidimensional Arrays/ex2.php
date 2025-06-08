<?php
// This code performs various arithmetic operations on elements of two-dimensional arrays and prints the results.
echo "Adições:";
$numeros = array(array(10, 21, 54),array(12, 65, 43));
$numeros2 = array(array(34,73,84),array(96,3,8));
$adicao1 = $numeros[0][0] + $numeros2[1][0];
$adicao2 = $numeros[0][1] + $numeros2[1][1];
$adicao3 = $numeros[0][2] + $numeros2[1][2];
$adicao4 = $numeros[1][0] + $numeros2[0][0];

echo "\n", $adicao1;
echo "\n", $adicao2;
echo "\n", $adicao3;
echo "\n", $adicao4;
