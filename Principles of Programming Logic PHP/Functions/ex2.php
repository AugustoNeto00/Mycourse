<?php
// This code calculates the average of four grades and determines if a student is approved, in recovery, or failed based on the average.
echo "As notas do aluno são: ", "\n";
function nota($nota1, $nota2, $nota3, $nota4) {
	$media = ($nota1+$nota2+$nota3+$nota4)/4;
		echo $nota1, "\n";
		echo $nota2, "\n";
		echo $nota3, "\n";
		echo $nota4, "\n";
	if ($media >= 7) {
		return "Você foi Aprovado".
		"\n";
		return $media;
	} elseif ($media >= 6) {
		return "Você está em recuperação".
		"\n";
		return $media;
	} else {
		return "Você foi reprovado".
		"\n";
		return $media;
	}

	return $media;
}

echo nota(10, 5, 7, 8);