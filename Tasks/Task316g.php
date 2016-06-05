<!DOCTYPE html>
<html>
<head>
<title>Task316g</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=uft-8">
<style>/*стили для тегов*/
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
<form name="form" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
<?php
echo "<h1>Введите N:<br>
<input class='inputArea' type='text' name='n'><br>
";//Вводим N
$n=isset($_GET['n']) ? $_GET['n'] : 0;//Читаем N
echo "<h1>Введите строку:<br>
<input class='inputArea' type='text' name='s'><br>
";//Вводим строку
$s=isset($_GET['s']) ? $_GET['s'] : 0;//Читаем строку
$s = mb_strimwidth($s,0,$n);//Сокращаем строку до длины N
$array = mb_split(' ',$s);//Делем строку на слова
for($i=0;$i<sizeof($array);$i++)
{
  if(mb_strlen($array[$i])<15)//Если длина слова меньше 15
  {
    $word = $array[$i];

      if(mb_strlen($word)>2)//Если у слова больше 2 букв
      {
    $firstletter = $word[0];//Первая буква слова
    $secondletter = $word[1];//Вторая буква слова
    if($firstletter!=$secondletter)//Если первая и вторая буквы не равны
    {
      for($j = 2;$j<mb_strlen($word);$j++)
      {
        if($word[$j]!=$firstletter && $word[$j]!=$secondletter)//Если следующая буква не равна первой и второй
        {
          $laststring.=$word.' ';//Слово подходит, добавляем
          break;
        }
      }
    }
      }
  }
}
echo "  
    <br>
    <input class='button' type='submit'></h1>
    <div class='outputText'>$laststring</h1>
    </div>
    ";//Вывод
?>
</body>
</html>