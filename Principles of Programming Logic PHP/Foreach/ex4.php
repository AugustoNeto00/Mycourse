<?php
// This code calculates the average of an array of numbers and prints the average after each addition.
$nota = array(9,3,7,7);
$valor = 0;
	foreach($nota as $notas){
		$valor += $notas;
		$media = $valor/count($nota);
		echo "\n", $media;
}