<!DOCTYPE html>
<html>
<head>
<title>Task443</title>
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
   	font-size: 30px;
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
echo "<h1>Введите 1&lt;a&lt;3, 0.5&lt;b&lt;4.5, c+d&gt;2.5<br>
<div class='inputText'>
A: <input class='inputArea' type='text' name='a'> 
B: <input class='inputArea' type='text' name='b'> 
<div>
C: <input class='inputArea' type='text' name='c'>
D: <input class='inputArea' type='text' name='d'> 
</h1>
<p><img src='bords.gif'  alt='Пятиугольник' height=250
width=300>></p>
";
$a=isset($_GET['a']) ? $_GET['a'] : 2;
$b=isset($_GET['b']) ? $_GET['b'] : 2;
$c=isset($_GET['c']) ? $_GET['c'] : 2;
$d=isset($_GET['d']) ? $_GET['d'] : 2;
  function plosha($x,$y,$z)
  {
    $p= ($x + $y + $z)/2;
    return sqrt($p * ($p - $x) * ($p - $y) * ($p - $z));
  }
  if(($a>1) && ($a<3) && ($b>0.5) && ($b<4.5) && ($c+$d>2.5) && (2.5+$c>$d) && (2.5+$d>$c))
  {
  $s1= plosha(1,2,$a);
  $s2= plosha(2,2.5,$b);
  $s3= plosha(2.5,$c,$d);
  $s= $s1 + $s2 + $s3;
  }
  else
  {
    $s="Введите правильные значения!";
  }

    echo "  
    <br>
    <input class='button' type='submit'></div>
    <br>
    <div class='outputText'>
    <h1>S=$s</h1>
    </div>
    ";
?>
</form>
</body>
</html>

