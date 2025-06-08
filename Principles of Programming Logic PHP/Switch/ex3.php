<?php
// This code checks what month it is using a switch statement.
$month =array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
echo "Que mês é hoje?";
switch($month [3]){
	case $month[0]:
		echo "\n", "Hoje é: Janeiro.";
		break;
	case $month[1]:
		echo "\n", "Hoje é: Fevereiro.";
		break;
	case $month[2]:
		echo "\n", "Hoje é: março.";
		break;
	case $month[3]:
		echo "\n", "Hoje é: abril.";
		break;
	case $month[4]:
		echo "\n", "Hoje é: maio.";
		break;
	case $month[5]:
		echo "\n", "Hoje é: junho.";
		break;
	case $month[6]:
		echo "\n", "Hoje é: Julho.";
		break;
	case $month[7]:
		echo "\n", "Hoje é: Agosto.";
		break;
	case $month[8]:
		echo "\n", "Hoje é: Setembro.";
		break;
	case $month[9]:
		echo "\n", "Hoje é: Outubro.";
		break;
	case $month[10]:
		echo "\n", "Hoje é: Novembro.";
		break;
	case $month[11]:
		echo "\n", "Hoje é: Dezembro.";
	default: 
		echo "\n", "Inválido.";
}