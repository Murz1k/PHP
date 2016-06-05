<!DOCTYPE html>
<html>
<head>
<title>Task196</title>
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
for($i=0;$i<50;$i++)
{
  $a[$i]= rand(1,20);//Заполняем массив
  echo"$a[$i] ";
  if($a[$i]%2!=0)//Если число нечетное
  {
    $b[$i]=$a[$i]*2;
  }
  else
  {
    $b[$i]=$a[$i];
  }
}
echo "<br>";
for($i=0;$i<50;$i++)//Выводим измененный массив
{
  echo"$b[$i] ";
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