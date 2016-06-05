<!DOCTYPE html>
<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<title>Сонет 90</title>
<style type = "text/css">
body{
	background-color:darkred;
	color:white;
	font-family: 'Brush Scritp MT', script;
	font-size: 1.5em;
	text-align: center;
}
</style>
</head>
<body>
<?php
$fp = fopen("sonnet90.txt","r");
if($fp!=false)
{
//первая строка - заголовок
$line = fgets($fp);
print "<h1>$line</h1><hr>";

//сам сонет
while (!feof($fp))
{
	$line = fgets($fp);
	print "$line <br>";
}//end while

fclose($fp);
}
?>
</body>
</html>