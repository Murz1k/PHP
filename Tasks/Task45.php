<!DOCTYPE html>
<html>
<head>
<title>Task45</title>
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
   	font-size: 300%;
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
echo "<h1>Введите A,B,C,D<br>
<div class='inputText'>
A: <input class='inputArea' type='text' name='a'> 
B: <input class='inputArea' type='text' name='b'> 
C: <input class='inputArea' type='text' name='c'> 
D: <input class='inputArea' type='text' name='d'> 
</h1>
";
$A=isset($_GET['a']) ? $_GET['a'] : 3;
$B=isset($_GET['b']) ? $_GET['b'] : 4;
$C=isset($_GET['c']) ? $_GET['c'] : 5;
$D=isset($_GET['d']) ? $_GET['d'] : 5;
if (($A<=$B) && ($B<=$C) && ($C<=$D))
{
	$A =$D;
   	$B =$D;
   	$C =$D;
}
else if (!(($A>$B) && ($B>$C) && ($C>$D)))
{
	$A = pow($A,2);
   	$B = pow($B,2);
   	$C = pow($C,2);
   	$D = pow($D,2);
}
echo "  
    <br>
    <input class='button' type='submit'></div>
    <br>
    <div class='outputText'>
    <h1>A=$A A=$B C=$C CD=$D</h1>
    </div>
    ";
?>
</form>
</body>
</html>