<?php
// This code defines a function that performs a mathematical operation on two numbers and checks if the result matches any of the basic arithmetic operations on those numbers.
// It returns "true" if the result matches any operation, otherwise it returns "false".
function math($num1, $num2) {
	$conta = $num1 - $num2; // Example operation, can be changed to any operation like +, -, *, /

	if ($conta == $num1 + $num2 || $conta == $num1 - $num2 || $conta == $num1 / $num2 || $conta == $num1 * $num2) {
		return "true";
	} else {
		return "false";
	}
	return $conta;
}
echo math(1, 2);