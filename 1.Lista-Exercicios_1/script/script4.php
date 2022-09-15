<?php
$teenager=$_POST['sal'];
$realidade=$_POST['real'];

if ($realidade=="t1") {
	$rs=$teenager+($teenager*5)/100;
	$final=$rs-$teenager;
	$novoSalario=$teenager+$final;
	echo "<h4>Com o reajuste de %5 o salário fica a: $novoSalario</h4>";
}elseif ($realidade=="t2") {
	$rs=$teenager+($teenager*10)/100;
	$final=$rs-$teenager;
	$novoSalario=$teenager+$final;
	echo "<h4>Com o reajuste de %10 o salário fica a: $novoSalario</h4>";
}else{
	$rs=$teenager+($teenager*15)/100;
	$loststars=$rs-$teenager;
	$kendra=$teenager+$loststars;
	echo"<h4>Com o reajuste de %15 o salário fica a: $kendra</h4>";
}



  ?>