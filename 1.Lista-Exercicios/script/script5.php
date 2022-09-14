<?php
$valor1=$_POST['v1'];
$valor2=$_POST['v2'];


if ($valor1>$valor2) {
	echo "O maior número é $valor1.";

}elseif ($valor1==$valor2) {
	echo "Erro 404";
}else{
	echo "O maior número é $valor2.";
	}
  ?>
