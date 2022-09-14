<?php
$n1=$_POST['n1'];

$n2=$_POST['n2'];

$media=($n1+$n2)/2;

if ($media >= 7) {
	echo "Aluno aprovado, sua nota é: $media";
}else{
	echo "Aluno reprovado, sua nota é: $media";
}
?>