<!DOCTYPE html>
<html>
<head>
<title>Task287</title>
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
echo "<h1>Введите N:
<div class='inputText'>
<input class='inputArea' type='text' name='n'><br>
</div>
";
$n=isset($_GET['n']) ? $_GET['n'] : 2;
  for($i=0;$i<$n;$i++)
  {
    $a[$i] = rand(1,20);
    echo"$a[$i]  ";
  }
  $imax= 0; // ищем индекс первого максимального элемента
  for($i=0;$i<$n;$i++)
  {
    if ($a[$i] > $a[$imax])
    {
      $imax = $i;
    }
  }
  echo"<br>Индекс первого максимального imax=$imax<br>";
  for($i=0;$i<$imax;$i++)
  {
    if($i%2!= 0)
    {
      $a[$i] = $a[$i] * $a[$imax];
    }
  }
  // выводим весь массив
  echo"Преобразованный массив:<br>";
  for($i=0;$i<$n;$i++)
  {
    echo"$a[$i]  ";
  } 
echo "<br><input class='button' type='submit'></h1>
";
?>
</form>
</body>
</html>

