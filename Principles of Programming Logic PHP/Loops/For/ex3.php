<?php
// This code prints the multiplication table of a number provided by the user using a for loop.
$numero = 5; // Número fornecido pelo usuário
for ($i = 1; $i <= 10; $i++) {
    echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
}