<!DOCTYPE html>
<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<title>Task515</title>
</head>
<body>
<form action = "Task515.php" method ="post">
<?php

	echo"<select name ='Good'>";
$fp = fopen("Goods.txt","r");
if($fp!=false)
{
for($i=0;!feof($fp);$i++)
{
	$file[$i] = fgets($fp);
	$goods[$i] = mb_split('\|',$file[$i]);
	$thisgood[$i] = $goods[$i][3];
}//end while
//$thisgood=array_unique($thisgood);
for($i=0;$i<count($thisgood);$i++)
{
	if($thisgood[$i]!="")
	echo"<option value ='$thisgood[$i]'>$thisgood[$i]</option>";
}//end while
fclose($fp);
}
echo"</select><input type='submit' value='Рассчитать'/><br>";
$good = filter_input(INPUT_POST,"Good");
$good = preg_replace ('/\s/', '', $good);
echo" Товар $good экспортируется в страны: ";
for($i=0;$i<sizeof($file);$i++)
{
	$array = mb_split('\|',$file[$i]);
	$array[3] = preg_replace ('/\s/', '', $array[3]);
	if($array[3]==$good)
	{
		echo"$array[1] ";
		$value += $array[2];
	}
}//end while
echo"<br>Общий объем товара $good: $value штук.";

?>
	</form>
</body>
</html>