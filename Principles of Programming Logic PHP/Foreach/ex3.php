<?php
// This code iterates through an array of names, counts the number of names, and prints each name on a new line. 
$nomes = array ("pedro","luiz","antonio");
$quantidade_de_nomes = count($nomes);
echo "quantidade de nomes na array: ", $quantidade_de_nomes, "\n";
	foreach($nomes as $nome){
		echo $nome, "\n";
}