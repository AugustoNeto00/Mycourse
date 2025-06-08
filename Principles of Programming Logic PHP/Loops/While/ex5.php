<?php
// This code prints a right-angled triangle pattern using a while loop.
$linhas = 5; // Número de linhas fornecido pelo usuário
$i = 1;
while ($i <= $linhas) {
    $j = 1;
    while ($j <= $i) {
        echo "* ";
        $j++;
    }
    echo "<br>";
    $i++;
}