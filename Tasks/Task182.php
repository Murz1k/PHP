<!DOCTYPE html>
<html>
<head>
<title>Task182</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=uft-8">
</head>

<body style="text-align: center"><!--Выравнивание текста по центру-->
<form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
<?php
echo "<h1>Введите N:
<div class='inputText'>
<input class='inputArea' type='text' name='n'><br>
</div>
";
$n=isset($_GET['n']) ? $_GET['n'] : 2;
  $count = 0;
  $sum = 0;
  for($i=0;$i<$n;$i++)
  {
    $a=rand(1,20);
    echo"$a  ";
    if($a%5==0 & $a%7!=0)
    {
      $sum+=$a;
      $count++;
    }
  }
    echo "
    <br><input class='button' type='submit'>
    <br>
    <div class='outputText'>
    Сумма: $sum<br> Кол-во: $count</h1>
    </div>";
?>
</form>
</body>
</html>

