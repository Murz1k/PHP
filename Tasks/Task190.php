<!DOCTYPE html>
<html>
<head>
<title>Task190</title>
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
echo "<h1>Введите N<br>
<div class='inputText'>
N: <input class='inputArea' type='text' name='n'> <br><br>
";
$n=isset($_GET['n']) ? $_GET['n'] : 1;
$sum=0;
$count = 0;
for($i=0;$i<$n;$i++)
{
$a[$i]=rand(-20,20);
echo"$a[$i] ";
if($a[$i]>=0)
{
$sum+=$a[$i];
}
else
{
$count++;
}
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

