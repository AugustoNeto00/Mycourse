<?php
// This code defines a multidimensional array of students and prints specific details about the third and fifth students.
$alunos = array(array("Antonio Augusto", "123456", "09876823456", "Priscila", "Masculino", "(84)991674595"), array("Luiz cunha", "324566", "79508953482", "Andreia cunha", "Masculino", "(58)92369502"), array("Pedro Guilherme", "42354", "23634856870", "Fatima Gomes", "Masculino", "(14)29678463"), array("Adriel Freitas", "568225", "52899062444", "Maria Freitas", "Masculino", "(11)98438932"), array("Marcia Schziavon", "264608", "25407834685", "Luiza Maria", "Feminino", "(35)98723783"));

echo "terceiro aluno: ", $alunos[2][0], "\n", $alunos[2][1], "\n", $alunos[2][2], "\n", $alunos[2][3], "\n", $alunos[2][4], "\n", $alunos[2][5];
echo "\n", "Quinto aluno: ", $alunos[4][0], "\n", $alunos[4][1], "\n", $alunos[4][2], "\n", $alunos[4][3], "\n", $alunos[4][4], "\n", $alunos[4][5];