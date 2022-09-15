<?php
$inicial=$_POST['v1'];
$final=$_POST['v2'];

if ($inicial<$final) {
	while ($inicial <= $final) {
	if ($inicial%2==0) {
		echo "$inicial<br>";
	}
	$inicial++;
}
}else {
	while ($final<= $inicial) {
		if ($final%2==0) {
			echo "$final<br>";
		}
		$final++;
	}
}

?>