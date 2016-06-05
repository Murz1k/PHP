<!DOCTYPE html>
<html>
<head>
<title>Task51</title>
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
  echo "<h1>Введите A, B, C<br>
  <div class='inputText'>
  A: <input class='inputArea' type='text' name='a'> 
  B: <input class='inputArea' type='text' name='b'> 
  C: <input class='inputArea' type='text' name='c'>
  </h1>";
  $a=isset($_GET['a']) ? $_GET['a'] : 4;
  $b=isset($_GET['b']) ? $_GET['b'] : -5;
  $c=isset($_GET['c']) ? $_GET['c'] : 1;
  $d=pow($b,2)-4*$a*$c;
  if ($d>0)
  {
    $t1=sqrt((-$b-sqrt($d))/(2*$a));
    $t2=sqrt((-$b+sqrt($d))/(2*$a));
      $s="Корни=$t1 -$t1 $t2 -$t2";
  }
  else if ($d==0)
  {
    $t=sqrt(-$b/(2*$a));
    $s="Корни=$t -$t";
  }
  else
  {
  $s="Нет корней";
  }
  echo "  
  <br>
  <input class='button' type='submit'></div>
  <br>
  <div class='outputText'>
  <h1>$s</h1>
  </div>
  ";
?>
</form>
</body>
</html>

