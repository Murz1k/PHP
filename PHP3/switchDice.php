<!DOCTYPE html>
<html>
<head>
<title>Команда Switch</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html"; charset=utf-8">
</head>

<body>
<h1>Команда Switch</h1>
<h3>Демонстрация множественного ветвления</h3>

<?php
$roll = rand(1,6);

switch ($roll){
	case 1:
	$romValue = "I";
	break;
	case 2:
	$romValue = "II";
	break;
	case 3:
	$romValue = "III";
	break;
	case 4:
	$romValue = "IV";
	break;
	case 5:
	$romValue = "V";
	break;
	case 6:
	$romValue = "VI";
	break;
	defaul:
	print "Некорректные данные!";
}

print <<< HERE
<p>У Вас выпало $roll.</p>
<p>
<img src="die$roll.jpg" alt="die^ $roll" />
</p>
<p>В римской записи это $romValue.</p>
HERE;
?>

<p>Нажмите F5, чтобы бросить еще раз!</p>
</body>
</html>