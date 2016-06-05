<!DOCTYPE html>
<html>
<head>
<title>Task23A</title>
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
echo "<h1>Введите A,B,C<br>
<div class='inputText'>
A: <input class='inputArea' type='text' name='a'> 
B: <input class='inputArea' type='text' name='b'> 
C: <input class='inputArea' type='text' name='c'> 
</h1>
";
$a=isset($_GET['a']) ? $_GET['a'] : 3;
$b=isset($_GET['b']) ? $_GET['b'] : 4;
$c=isset($_GET['c']) ? $_GET['c'] : 5;
function Plosh($a,$b,$c)//площадь треугольника
{
$p=($a+$b+$c)/2;
return sqrt($p*($p-$a)*($p-$b)*($p-$c));
}
function VysA($a,$b,$c)//высота на сторону А
{
	if($a!=0)
	{
return 2*Plosh($a,$b,$c)/$a;
	}
}
$A1 = VysA($a,$b,$c);
$B1 = VysA($b,$c,$a);
$C1 = VysA($c,$b,$a);
echo "  
    <br>
    <input class='button' type='submit'></div>
    <br>
    <div class='outputText'>
    <h1>Длины высот: AA1=$A1 AB1=$B1 AC1=$C1</h1>
    </div>
    ";
?>
</form>
</body>
</html>