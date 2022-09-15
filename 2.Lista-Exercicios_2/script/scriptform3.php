<?php 
$p1=$_POST['v1'];
$p2=$_POST['v2'];
$cont =0;
$cont1 =0;
if ($p1<$p2) {
	while ($p1<=$p2) {
		if ($p1%2==1) {
			$cont=$cont+$p1;
			echo "$p1<br>";
			echo "<hr>";
			echo "$cont<br>";
		}
		$p1++;
	}
	}else{
		while ($p1>$p2) {
			if ($p2%2==1) {
				$cont1=$cont1+$p2;
				echo "$p2<br>";
				echo "<hr>";
				echo "$cont1<br>";
			}
			$p2++;
		}
	}

?>