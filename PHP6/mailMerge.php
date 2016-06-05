<!DOCTYPE html>
<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<title>Список рассылки</title>
</head>
<body>
<?php
//проверьте наличие файла maillist.dat со списком рассылки
//разделитель - символ табуляции
$theData = file("maillist.dat");
foreach($theData as $line){
	$line = rtrim($line);
	print "<h3>$line</h3>";
	list($name,$email)= explode("\t",$line);
	print"<p>Name: $name</p>";
	$message = <<<HERE
TO: $email:

Уважаемый $name!
Спасибо, что Вы - часть нашей команды. Вы просили уведомлять о новых событиях.
Узнайте новости проекта первыми на нашем сайте!

С уважением,
Большой Брат,
всегда наблюдает за нами.

HERE;
print "<pre>$message</pre>";
}// foreach
?>
</body>
</html>