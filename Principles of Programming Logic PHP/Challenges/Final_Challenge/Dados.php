<?php
// This code collects student data and calculates the average of their grades.
$nome = $_POST["N_ome"];
$cpf = $_POST["CPF"];
$nomepai = $_POST["pai"];
$nomemae = $_POST["mae"];
$endereco = $_POST["endereco"];
$escola = $_POST["nomeescola"];


$nota1 = $_POST["bimestre_1"];
$nota2 = $_POST["bimestre_2"];
$nota3 = $_POST["bimestre_3"];
$nota4 = $_POST["bimestre_4"];
$media = ($nota1 + $nota2 + $nota3 + $nota4)/4;


echo "Aluno: ". $nome. ", estudante da Instuição de Ensino: ". $escola. "\n". " Dados Pessoais: "
. "\n". "CPF: ". $cpf. " Nome da Mãe: ". $nomemae. " Nome do Pai: ". $nomepai.
" Endereço: ". $endereco. ". Notas Por Bimestre: 1º: ".
$nota1. ",". "\n". $nota2. "\n".",". $nota3.",". "\n". $nota4. " Média: ". $media;