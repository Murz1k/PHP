<!DOCTYPE html>
<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset = utf-8">
<title>Для каждого</title>
</head>
<body>
<h1>Демонстрация цикла foreach</h1>
<?php
$list = array("alpha","beta","gamma","delta","epsilon");
print "<ul>";
foreach($list as $value)
{
	print " <li>$value</li>";
}//end foreach
print "</ul>";
?>
</body>
</html>