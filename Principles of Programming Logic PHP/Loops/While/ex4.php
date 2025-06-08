<?php
// This code calculates the sum of numbers from 1 to 100 using a while loop.
$soma = 0;
$i = 1;
while ($i <= 100) {
    $soma += $i;
    $i++;
}
echo "A soma dos números de 1 a 100 é: " . $soma;