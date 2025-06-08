<?php
// This code defines a function to calculate the type of triangle based on its base and height.
// It returns "equilátero" if the base and height are equal, "isóceles" if the base is less than the height, and "escaleno" if the base is greater than the height.
function triangle($b,$h){
	$type = $b * $h / 2;
	if($b == $h){
		return "equilátero";
	}elseif($b < $h){
		return "isóceles";
	}else{
		return "escaleno";
	}
}
echo triangle(32,7);