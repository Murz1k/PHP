<!DOCTYPE html>
<html>
<head>
<title>Task297</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=uft-8">
<style>
   .inputText {
    padding: 20px; /* Поля вокруг текста */
   }
   .outputText {
    padding: 20px; /* Поля вокруг текста */
   }
   h1
   {
   	font-size: 150%;
   	font-family: Geneva, Arial, Helvetica, sans-serif;
   }
   .inputArea
   {
   	width: 200px;
   	font-size: 100px;
   }
   .button
   {
   	width: 220px;
   	font-size: 40px;
   }
  </style>
</head>

<body style="text-align: center ">
<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
<?php
$max = 0;
echo "<h1>Введите N<br>
<div class='inputText'>Начальная последователность:<br>";
for($i=0;$i<100;$i++)
{
	$a[$i] = rand(1,20);
	if($max<$a[$i])
	{
		$max=$a[$i];
	}
	echo"$a[$i] ";
}
echo"<br>Преобразованная последователность:<br>";
for($i=0;$i<100;$i++)
{
	if(abs($a[$i])!=$max)
	{
		$a[$i]=0;
	}
	else
	{
		$a[$i] = 1;
	}
	echo"$a[$i] ";
}
echo "  
    <br>
    <br>
    <input class='button' type='submit'></div>
    <div class='outputText'>
    Максимум: $max</h1>
    </div>
    ";
?>
</form>
</body>
</html>