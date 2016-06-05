<!DOCTYPE html>
<html>
<head>
<title>Task115e</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=uft-8">
<style>
   .inputText /*Стиль для текста ввода*/
   {
    padding: 20px;/*Отступы*/
   }
   .outputText /*Стиль для текста результата*/
   {
    padding: 20px;/*Отступы*/
   }
   h1/*Стиль для текста*/
   {
   	font-size: 500%;/*Размер шрифта*/
   	font-family: Geneva, Arial, Helvetica, sans-serif;/*Шрифт*/
   }
   .inputArea/*Стиль для текстового поля*/
   {
   	width: 200px;/*Ширина*/
   	font-size: 100px;/*Размер шрифта*/
   }
   .button/*Стиль для кнопки*/
   {
   	width: 220px;/*Ширина*/
   	font-size: 40px;/*Размер шрифта*/
   }
  </style>
</head>

<body style="text-align: center"><!--Выравнивание текста по центру-->
<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
<?php
echo "<h1>Введите N<br>
<div class='inputText'>
N: <input class='inputArea' type='text' name='n'> 
</h1>
";/*Подключаем стиль 'inputText' и 'inputArea'. Отображаем поля для ввода значения.*/
$n=isset($_GET['n']) ? $_GET['n'] : 3;/*Вводим значение в перменную*/
$suma = 0;
function Factorial($n)//Находим факториал
{
  $s = 1;
for($i = 1;$i<=$n;$i++)
{
$s *= $i;
}
return $s;
}
for($k = 0;$k<=$n;$k++)
{
    $suma += pow(-1,$k)*($k + 1) / Factorial($k);
}
echo "  
<br>
<input class='button' type='submit'></div>
<br>
<div class='outputText'>
<h1>$suma</h1>
</div>
";/*Подключаем стиль 'button' и 'outputText'. Выводим результат.*/
?>
</form>
</body>
</html>

