<!DOCTYPE html>
<html>
<head>
<META HTTP_EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<title>Массивы</title>
</head>

<body>
<h1>Примеры с массивами</h1>
<div>

<?php
$camelPop[1] = "Сомали";
$camelPop[2] = "Судан";
$camelPop[3] = "Мавритания";
$camelPop[4] = "Пакистан";
$camelPop[5] = "Индия";

echo "<h3>Страны мира с наибольшим поголовьем верблюдов:</h3>";
echo "<p>";
for ($i = 1; $i <= 5; $i++){
	echo "$i: $camelPop[$i]<br>";
}
echo "</p>";

$binary = array("000", "001", "010", "011");

echo "<h3>Двоичные числа:</h3>";
echo "<p>";
for ($i = 0; $i < count($binary); $i++){
	echo "$i: $binary[$i]<br>";
}
echo "</p>";
?>

</div>
</body>
</html>