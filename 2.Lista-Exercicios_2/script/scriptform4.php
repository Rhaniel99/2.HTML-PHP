<?php 

$inicia=63;
$termina=999;
$cont=0;
while ($inicia<=$termina) {
	if ($inicia%2==0) {
		$cont=$cont+$inicia;
		echo "$inicia<br>";
		echo "<hr>";
		echo "$cont<br>";
	}
	$inicia++;
}


?>