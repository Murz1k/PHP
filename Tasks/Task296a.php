<!DOCTYPE html>
<html>
<head>
<title>Task296a</title>
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
echo "<h1>";
$min = 1000000;//Начальное минимальное значение
$max = 0;//Начальное максимальное значение
for($i=0;$i<20;$i++)//Заполняем массив и узнаем максимальные значения, минимальные и их индексы
{
  $a[$i]= 20-$i;
  if($a[$i]>$max)
  {
    $max = $a[$i];
    $imax = $i;
  }
  if($a[$i]<$min)
  {
    $min = $a[$i];
    $imin = $i;
  }
  echo"$a[$i] ";
}
//Меняем местами максимальное и минимальное значение
$buf = $a[$imin];
$a[$imin] = $a[$imax];
$a[$imax] = $buf;
echo "<br><br>";
for($i=0;$i<50;$i++)//Выводим измененный массив
{
  echo"$a[$i] ";
}
echo "  
    <br>
    <br>
    <input class='button' type='submit'></div></h1>
    </div>
    ";//Кнопка запускает вычисление php.
?>
</form>
</body>
</html>