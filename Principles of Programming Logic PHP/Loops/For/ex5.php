<?php
// This code prints asterisks in a right-angled triangle pattern using nested for loops.
$asteriscos = 5; // Número de asteriscos fornecido pelo usuário
for ($i = 1; $i <= $asteriscos; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}