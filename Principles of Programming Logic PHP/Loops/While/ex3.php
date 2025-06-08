<?php
// This code prints the multiplication table of a number provided by the user using a while loop.
$numero = 5; // Número fornecido pelo usuário
$i = 1;
while ($i <= 10) {
    echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
    $i++;
}