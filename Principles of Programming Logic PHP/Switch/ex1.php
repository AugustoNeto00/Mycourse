<?php
// This code checks if a number is even or odd using a switch statement.
$num = 53;
 switch($num % 2){
 	case 1:
 		echo "Esse número é par.";
 		 break;
 	case 0:
 		echo "esse número é impar.";
 		break;
 	default:
 		echo "Inválido.";
 }