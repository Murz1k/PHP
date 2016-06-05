<!DOCTYPE html>
<html>
<head>
<title>Task276</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=uft-8">
</head>

<body style="text-align: center"><!--Выравнивание текста по центру-->
<?php
$n=30;
echo "Последовательность A <br>";
for($i=1;$i<=$n;$i++)
{
  if($i<3)
  {
    $a[$i]=1;
    echo " $a[$i]<br>";/*Выводим каждый элемент в массиве*/
  }
  else 
  {
    $a[$i]=$a[floor($i/2)]+$a[$i-2];
    echo " $a[$i]<br>";/*Выводим каждый элемент в массиве*/
  }
}
?>
</body>
</html>

