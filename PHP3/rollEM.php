<!DOCTYPE html>
<html>
<head>
<META HTTP_EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
</head>

<body>
<h1>Случайное число</h1>
<h3>Выпало:</h3>

<?php
$roll = rand(1,6);
print "<p>Выпало число $roll</p>";
print "<img src = die$roll.jpg>";
?>

<p>Нажмите F5, чтобы бросить еще раз!</p>
</body>
</html>