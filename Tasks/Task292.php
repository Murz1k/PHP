<!DOCTYPE html>
<html>
<head>
<title>Task292</title>
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
echo "<h1>Исходная последовательность: <br>";
for($i=0;$i<20;$i++)
{
$a[$i]=rand(1,20);
echo"$a[$i] ";
}
echo "<h1>Преобразованная последовательность: <br>";
for($i=0;$i<10;$i++)
{
if($a[$i]<$a[$i+10])
{
  $buff = $a[$i];
  $a[$i] = $a[$i+10];
  $a[$i+10] = $buff;
}
}
for($i=0;$i<20;$i++)
{
echo"$a[$i] ";
}
echo "  
    <br>
    <br>
    <input class='button' type='submit'></div>
    <div class='outputText'>
    Сумма положительных: $sum <br> Число отрицательных: $count</h1>
    </div>
    ";
?>
</form>
</body>
</html>

