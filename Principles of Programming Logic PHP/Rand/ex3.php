<?php
// This code simulates flipping a coin by generating a random number between 1 and 2 and prints "cara" (heads) for 1 and "coroa" (tails) for 2
$moeda = rand(1,2);
	if($moeda == 1){
		echo "cara";
	}else {
		echo "coroa";
	}