<!DOCTYPE html>
<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<title>Task511a</title>
</head>
<body>
<form action = "Task511a.php" method ="post">
<?php
	echo"<select name ='Author'>
	<option value ='Стивен Кинг'>Стивен Кинг</option>
	<option value ='Джоан Роулинг'>Джоан Роулинг</option>
	<option value ='Александр Пушкин'>Александр Пушкин</option>
	</select><input type='submit' value='Рассчитать'/><br>";
$fp = fopen("Books.txt","r");
if($fp!=false)
{
for($i=0;!feof($fp);$i++)
{
	$file[$i] = fgets($fp);
}//end while
fclose($fp);
}
$author = filter_input(INPUT_POST,"Author");
$author = preg_replace ('/\s/', ' ', $author);
		$j = 0;
for($i=0;$i<sizeof($file);$i++)
{
	$arr = mb_split('\|',$file[$i]);
	$arr[0] = preg_replace ('/\s/', ' ', $arr[0]);
	echo"$file[$i]<br>";
	if($arr[0]==$author && $arr[2]>=1960)
	{
	$books[$j] = $arr[1]." ".$arr[2];
	$j++;
	}
}//end while
if(sizeof($books)>0)
{
echo"<br>Автор $author написал следующие книги после 1960 года:<br>";
for($i=0;$i<sizeof($books);$i++)
{
	echo"$books[$i]<br>";
}
}
else
{
echo"<br>Автор $author не писал книги после 1960 года<br>";
}
?>
	</form>
</body>
</html>