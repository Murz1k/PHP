<!DOCTYPE html>
<html>
<head>
<title>Task56</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=uft-8">
<style>/*стили для тегов*/
   .inputText {/*стиль класса inputText*/
    padding: 20px; /* Поля вокруг текста */
   }
   .outputText {/*стиль класса outputText*/
    padding: 20px; /* Поля вокруг текста */
   }
   h1 /*стиль для заголовка h1*/
   {
    font-size: 150%; /*Размер шрифта*/
    font-family: Geneva, Arial, Helvetica, sans-serif; /*Шрифт*/
   }
   .inputArea /*стиль класса inputArea*/
   {
    width: 200px; /*ширина элемента*/
    font-size: 100px; /*размер шрифта*/
   }
   .button /*стиль класса button*/
   {
    width: 220px; /* ширина элемента*/
    font-size: 40px; /*размер шрифта*/
   }
  </style>
</head>

<body style="text-align: center "><!--Выравнивание по центру-->
<form name="Form" method="GET" action="<?=$_SERVER['PHP_SELF']?>"><!--Форма вызывает php внутри себя-->
<?php
function min3($a, $b,$c){//возвращает минимум из трех чисел
     if ($a<=$b&&$a<=$c)  return $a;
     if ($b<=$c&&$b<=$a)  return $b;
     return $c;
}
function mid3($a, $b,$c){//возвращает среднее из трех чисел
     if ($a>=$b&&$a<=$c||$a<=$b&&$a>=$c)  return $a;
     if ($b>=$c&&$b<=$a||$b<=$c&&$b>=$a)  return $b;
     return c;
}
function min2($a,$b){//возвращает минимум из двух чисел
    return $a<$b ? $a:$b;
}
function max2($a,$b){//возвращает максимум из двух чисел
    return $a>$b ? $a:$b;
}
echo "
<h1>
X: <input class='inputArea' type='text' name='x'>
Y: <input class='inputArea' type='text' name='y'>
A: <input class='inputArea' type='text' name='a'>
B: <input class='inputArea' type='text' name='b'>
C: <input class='inputArea' type='text' name='c'>
";//Ввод значений в поля
$x=isset($_GET['x']) ? $_GET['x'] : 3;//Присваение значения переменной
$y=isset($_GET['y']) ? $_GET['y'] : 3;
$a=isset($_GET['a']) ? $_GET['a'] : 3;
$b=isset($_GET['b']) ? $_GET['b'] : 3;
$c=isset($_GET['c']) ? $_GET['c'] : 3;
//проходит, если минимальный и средний габарит кирпича
//меньше минимального и максимального габарита отверствия соотвественно.
if (min3($a,$b,$c)<=min2($x,$y)&&mid3($a,$b,$c)<=max2($x,$y)) {
    $s="Проходит";
}
else {
    $s="Не проходит";
}
echo "  
    <br>
    <br>
    <input class='button' type='submit'></div>
    <div class='outputText'>$s</h1>
    </div>
    ";//Кнопка запускает вычисление php.
?>
</form>
</body>
</html>