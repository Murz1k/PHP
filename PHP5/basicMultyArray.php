<!DOCTYPE html>
<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset = utf-8">
<title>Distance Calculator</title>
</head>
<body>
<h1>Рассчет расстояния (в милях)</h1>
<?php
$cityName = array("Индианаполис","Нью-Йорк","Токио","Лондон");

$distance = array(
array(0,648,6476,4000),
array(648,0,6760,3470),
array(6476,6760,0,5956),
array(4000,3470,5956,0));

$cityA = filter_input(INPUT_POST,"cityA");
$cityB = filter_input(INPUT_POST,"cityB");

$fromCity = $cityName[$cityA];
$toCity = $cityName[$cityB];

$result = $distance[$cityA][$cityB];

print "<h2>Расстояние между городами $fromCity и $toCity составляет $result миль.</h2>";
?>
</body>
</html>