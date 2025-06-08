<?php
// This code iterates through an array of numbers, finds the maximum value, and prints it at the end.
$num = array(9,4,6,3,7);
$maior = 0;
	foreach ($num as $val){
		echo "Valores: ", $val, "\n";
		if($val > $maior){
			$maior = $val;
		}
}
echo "O maior valor é: ", $maior;