<?php
$cold= array("São Luis","São Paulo","Porto Alegre","Teresina","Acaraju","Manaus","Itaquatiara","Rio de Janeiro","Rio Branco","Salvador");
$diferenciado= array_reverse($cold);
for ($i=0; $i < sizeof($diferenciado) ; $i++) { 
	echo "<br><br>$diferenciado[$i]<br>";
}
?>