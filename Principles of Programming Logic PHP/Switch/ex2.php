<?php
// This code checks what day of the week it is using a switch statement.
$day =array("segunda","terça","quarta","quinta","sexta","sábado","domingo");
echo "Que dia é hoje?";
switch($day [0]){
	case $day[0]:
		echo "\n", "hoje é segunda.";
		break;
	case $day[1]:
		echo "\n", "hoje é terça.";
		break;
	case $day[2]:
		echo "\n", "hoje é quarta.";
		break;
	case $day[3]:
		echo "\n", "hoje é quinta.";
		break;
	case $day[4]:
		echo "\n", "hoje é sexta.";
		break;
	case $day[5]:
		echo "\n", "hoje é sábado.";
		break;
	case $day[6]:
		echo "\n", "hoje é domingo.";
		break;
	default: 
		echo "Inválido.";
}