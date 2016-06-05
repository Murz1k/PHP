<!DOCTYPE html>
<html>
<head>
<title>Task449</title>
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
   	font-size: 200%;
   	font-family: Geneva, Arial, Helvetica, sans-serif;
   }
   .inputArea
   {
   	width: 80px;
   	font-size: 40px;
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
//лежат ли 2 точки по одну сторону от прямой
function odin($x1,$y1,$x2,$y2,$x3,$y3,$x4,$y4)
{
$a=$y2-$y1;
$b=$x1-$x2;
$c=$x1*($y1-$y2)+$y1*($x2-$x1);
//подставим координаты двух точек
//если знак одинаковый(произведние >0), по 1 сторону
return ($a*$x3+$b*$y3+$c)*($a*$x4+$b*$y4+$c)>0;
}
//определение расстояния между точками
function rasst($x1,$y1,$x2,$y2)
{
return sqrt(pow($x1-$x2,2)+pow($y1-$y2,2));
}
//определение площвди по Герону
function plsh($a,$b,$c)
{
$p=($a+$b+$c)/2;
return sqrt($p*($p-$a)*($p-$b)*($p-$c));
}
//основная программма
echo "<h1>Введите координаты вершин первого треугольника<br>
<div class='inputText'>
X1: <input class='inputArea' type='text' name='x1'> 
Y1: <input class='inputArea' type='text' name='y1'> 
X2: <input class='inputArea' type='text' name='x2'> 
Y2: <input class='inputArea' type='text' name='y2'> 
X3: <input class='inputArea' type='text' name='x3'> 
Y3: <input class='inputArea' type='text' name='y3'> 
</h1>
";
$x1=isset($_GET['x1']) ? $_GET['x1'] : 1;
$y1=isset($_GET['y1']) ? $_GET['y1'] : 1;
$x2=isset($_GET['x2']) ? $_GET['x2'] : 2;
$y2=isset($_GET['y2']) ? $_GET['y2'] : 3;
$x3=isset($_GET['x3']) ? $_GET['x3'] : 2;
$y3=isset($_GET['y3']) ? $_GET['y3'] : 1;
echo "<h1>Введите координаты вершин второго треугольника<br>
<div class='inputText'>
X4: <input class='inputArea' type='text' name='x4'> 
Y4: <input class='inputArea' type='text' name='y4'> 
X5: <input class='inputArea' type='text' name='x5'> 
Y5: <input class='inputArea' type='text' name='y5'> 
X6: <input class='inputArea' type='text' name='x6'> 
Y6: <input class='inputArea' type='text' name='y6'> 
</h1>
";
$x4=isset($_GET['x4']) ? $_GET['x4'] : 0;
$y4=isset($_GET['y4']) ? $_GET['y4'] : 0;
$x5=isset($_GET['x5']) ? $_GET['x5'] : 3;
$y5=isset($_GET['y5']) ? $_GET['y5'] : 5;
$x6=isset($_GET['x6']) ? $_GET['x6'] : 3;
$y6=isset($_GET['y6']) ? $_GET['y6'] : 0;
$f1 = odin($x4,$y4,$x5,$y5,$x1,$y1,$x2,$y2);
$f2 = odin($x5,$y5,$x6,$y6,$x2,$y2,$x3,$y3);
$f3 = odin($x6,$y6,$x4,$y4,$x3,$y3,$x1,$y1);
if($f1 && $f2 && $f3)
{
  $m = "Первый треугольник полностью принадлежит второму";
  $a=rasst($x1,$y1,$x2,$y2);
  $b=rasst($x2,$y2,$x3,$y3);
  $c=rasst($x3,$y3,$x1,$y1);
  $s1=plsh($a,$b,$c);
  $a=rasst($x4,$y4,$x5,$y5);
  $b=rasst($x5,$y5,$x6,$y6);
  $c=rasst($x6,$y6,$x4,$y4);
  $s2=plsh($a,$b,$c);
  $s=$s2-$s1;
  $m += "<br>Площадь между треугольниками="+$s;
}
else
{ 
  $m = "Первый треугольник не принадлежит второму";
}
echo "  
    <br>
    <input class='button' type='submit'></div>
    <br>
    <div class='outputText'>
    <h1>$m</h1>
    </div>
    ";
?>
</form>
</body>
</html>

