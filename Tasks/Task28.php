<!DOCTYPE html>
<html>
<head>
<title>Task28</title>
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
echo "
<h1>
X: <input class='inputArea' type='text' name='x'>";//Вводим X
$x=isset($_GET['x']) ? $_GET['x'] : 3;//Присваиваем X
$s=6+$x*(-5+$x*(4+$x*(-3+2*$x)));//Находим результат
echo "  
    <br>
    <br>
    <input class='button' type='submit'></div>
    <div class='outputText'>$s</h1>
    </div>
    ";//Выводим результат
?>
</form>
</body>
</html>