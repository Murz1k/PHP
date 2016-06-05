<!DOCTYPE html>
<html>
<head>
<title>Task43</title>
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
   	font-size: 500%;
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
echo "<h1>Введите A,B,C<br>
<div class='inputText'>
A: <input class='inputArea' type='text' name='a'>
B: <input class='inputArea' type='text' name='b'> 
C: <input class='inputArea' type='text' name='c'> 
</h1>
";
$a=isset($_GET['a']) ? $_GET['a'] : 3;
$b=isset($_GET['b']) ? $_GET['b'] : 4;
$c=isset($_GET['c']) ? $_GET['c'] : 5;
  if ($a>=0)
  {
    $a*=$a;
  }
  if ($b>=0)
  {
    $b*=$b;
  }
  if ($c>=0)
  {
    $c*=$c;
  }
    echo "  
    <br>
    <input class='button' type='submit'></div>
    <br>
    <div class='outputText'>
    <h1>A=$a B=$b C=$c</h1>
    </div>
    ";
?>
</form>
</body>
</html>

