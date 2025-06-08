<?php
// This code defines a student's name and their grades for four bimesters, calculates the average, and determines the student's situation based on the average.
$nome = "Pedro";
$notas =array(9,5.5,7,8);
$media = ($notas[0]+$notas[1]+$notas[2]+$notas[3])/4;
echo "Nome do Aluno: ", $nome, "\n", "Notas Bimestrais:", "\n", "1ºBimestre:", $notas[0], "\n", "2ºBimestre:", $notas[1], "\n","3ºBimestre:", $notas[2], "\n", "4ºBimestre:", $notas[3], "\n", "sua média é de:", $media, "\n";	
if($media >= 7){
	echo "Situação do Aluno: Aprovado. ";
}elseif($media <7 && $media >3){
	echo "Situação do Aluno: Recuperação. ";
}else {
	echo "Situação do Aluno: Reprovado. ";
}
	