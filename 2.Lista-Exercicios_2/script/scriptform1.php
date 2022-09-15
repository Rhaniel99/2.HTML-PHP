<?php
$valor1=$_GET['v1'];
$valor2=$_GET['v2'];

if ($valor1<$valor2) {
while ( $valor1 <= $valor2) {
	echo "$valor2<br>";
	$valor2--;}
}elseif($valor2<$valor1) {
while ( $valor1 >= $valor2) {
	echo "$valor1<br>";
	$valor1--;
}
}
?>


