<?php 
$num=$_POST['v1'];

if ($num>=1) {
	echo "O Número é Positivo";
}elseif ($num<=-1) {
	echo "O Número é Negativo";
}else{
	echo "O número é zero";
}

 ?>