<!DOCTYPE html>
<html>
<head>
<title>2+2=?</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html"; charset=utf-8">
</head>

<body>
<h1>Дважды два - ?</h1>
<h3>Работа с числовыми переменными</h3>

<?php
$x = 2;
$y = 3;

print "$x + $y = ";
print $x + $y;
print "<hr>";

print "$x - $y = ";
print $x - $y;
print "<hr>";

print "$x * $y = ";
print $x * $y;
print "<hr>";

print "$x / $y = ";
print number_format($x / $y, 3, ',', '');
print "<hr>";
?>

</body>
</html>