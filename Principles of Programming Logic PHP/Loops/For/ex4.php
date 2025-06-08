<?php
// This code calculates the sum of numbers from 1 to 100 using a for loop.
$soma = 0;
for ($i = 1; $i <= 100; $i++) {
    $soma += $i;
}
echo "A soma dos números de 1 a 100 é: " . $soma;