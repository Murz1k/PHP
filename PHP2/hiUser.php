<!DOCTYPE html>
<html>
<head>
<title>Привет, посетитель!</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html"; charset=utf-8">
</head>

<body>
<h1>Привет, посетитель!</h1>

<?php
if (filter_has_var (INPUT_GET, "userName"))
{
	$userName = $_GET ['userName'];
	echo "Привет, $userName!";
}
else
{
	print <<< HERE
	<form method = "get" action = "">
	<fieldset>
	<p>Впишите Ваше имя:</p>
	<input type = "text" name = "userName" value = ""><br>
	<br><input type = "submit">
	</fieldset>
	</form>
HERE;
}
?>

</body>
</html>