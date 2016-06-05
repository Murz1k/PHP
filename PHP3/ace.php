<!DOCTYPE html>
<html>
<head>
<META HTTP_EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
</head>

<body>
<h1>Ура!</h1>
<h3>Демонстрация ветвления</h3>

<?php
$roll = rand(1,6);
print "<p>Выпало число $roll</p>";

if ($roll == 1)
{
print "<h1>Ура!</h1>";
}
else
{
print "<h2>Извините, попробуйте снова!</h2>";
}

print "<img src = die$roll.jpg>";
?>

<p>Нажмите F5, чтобы бросить еще раз!</p>
</body>
</html>