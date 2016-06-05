<!DOCTYPE html>
<html>
<head>
<title>Task25B</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=uft-8">
<style>
   .Text {
    padding: 3px; /* Поля вокруг текста */
   }
   h1
   {
   	font-size: 300%;
   	font-family: Geneva, Arial, Helvetica, sans-serif;
   }
   .inputArea
   {
   	width: 200px;
   	font-size: 50px;
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
echo "
<h1><div class='Text'>Введите координаты вершин треугольника:<br></div>
<div class='Text'>x1: <input class='inputArea' type='text' name='x1'>
y1: <input class='inputArea' type='text' name='y1'></div><br>";
$x1=isset($_GET['x1']) ? $_GET['x1'] : 0;
$y1=isset($_GET['y1']) ? $_GET['y1'] : 0;
echo "<div class='Text'>x2: <input class='inputArea' type='text' name='x2'> 
y2: <input class='inputArea' type='text' name='y2'></div><br>";
$x2=isset($_GET['x2']) ? $_GET['x2'] : 0;
$y2=isset($_GET['y2']) ? $_GET['y2'] : 1;
echo "<div class='Text'>x3: <input class='inputArea' type='text' name='x3'>
y3: <input class='inputArea' type='text' name='y3'></div></h1>";
$x3=isset($_GET['x3']) ? $_GET['x3'] : 1;
$y3=isset($_GET['y3']) ? $_GET['y3'] : 1;
$s=0.5*abs(($x2-$x1)*($y3-$y1)-($x3-$x1)*($y2-$y1));
echo "  
    <br>
    <input class='button' type='submit'></div>
    <br>
    <div class='Text'>
    <h1>S=$s</h1>
    </div>
    ";
?>
</form>
</body>
</html>