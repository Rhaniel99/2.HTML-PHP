<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../sweet.css">
	<title>Daddy Issues</title>
</head>
<body>
	<table align="center">
	<tr>
		<th>Linguagens</th>
	</tr>

<?php
$rs= array("Java","C","C++","Python","C#","JavaScript","PHP","Ruby");
$rz=0;
while ($rz<sizeof($rs)) {
	echo "
	<tr>
	<td>$rs[$rz]</td>
	</tr>
	";
	$rz++;
}?>
</table>

</body>
</html>