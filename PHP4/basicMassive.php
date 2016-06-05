<!DOCTYPE html>
<html>
<head>
<META HTTP_EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<title>Массивы</title>
</head>

<body>
<div>

<?php
for ($i = 0; $i <10; $i++){
	$a[$i] = rand(-200,200);
	echo "$i: $a[$i]<br>";
}
?>

</div>
</body>
</html>