<?php
// This code defines a function that calculates the age based on two years and returns a message indicating if the person is an adult or a minor.
function idade($ano1, $ano2) {
	$conta = $ano1 - $ano2;
	echo $conta, "\n";
	if ($conta >= 18) {
		return "você é de maior";
	} else {
		return "Você é de menor";
	}
}

echo idade(2024, 2006);