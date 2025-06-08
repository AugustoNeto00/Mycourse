<?php
// This code iterates through an array of numbers, doubles each number, and prints the result on a new line.
$numeros = array (21,32,65,76);
	foreach ($numeros as $numero){
		$numero += $numero;
		echo $numero, "\n";
}
