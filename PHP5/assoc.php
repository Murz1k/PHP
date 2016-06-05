<!DOCTYPE html>
<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset = utf-8">
<title>Примеры ассоциативных массивов</title>
<link rel = "stylesheet"
type = "text/css"
href = "assoc.css">
</head>
<body>
<h1>Примеры ассоциативных массивов</h1>
<?php
$stateCap["Свердловская область"]= "Екатеринбург";
$stateCap["Республика Алтай"]= "Горно-Алтайск";
$stateCap["Вологодская область"]= "Вологда";
$cap = $stateCap["Вологодская область"];

print <<<HERE
<h2>Административный центр региона России:</h2>
<h4>(Вывод значения одного элемента массива)</h4>
<dl>
<dt>Вологодская область</dt>
<dd>$cap</dd>
</dl>
HERE;

$worldCap = array("Румыния"=>"Будапешт","Мексика"=>"Мехико","Великобритания"=>"Лондон");
$cap = $worldCap["Мексика"];

print <<<HERE
<h2>Столица государства:</h2>
<h4>(Вывод значения одного элемента массива)</h4>
<dl>
<dt>Мексика</dt>
<dd>$cap</dd>
</dl>

HERE;

print "<h2>Столицы государств: </h2>";
print "<h4>(Вывод значений всех элементов массива)</h4>";
print "<dl>";

foreach($worldCap as $country =>$capital)
{
	print <<<HERE
	<dt>$country</dt>
	<dd>$capital</dd>

HERE;
}//end foreach

print "</dl";
?>
</body>
</html>