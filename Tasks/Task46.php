<!DOCTYPE html>
<html>
<head>
<title>Task46</title>
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
echo "<h1>Введите X,Y<br>
<div class='inputText'>
X: <input class='inputArea' type='text' name='x'> 
Y: <input class='inputArea' type='text' name='y'> 
</h1>
";
$x=isset($_GET['x']) ? $_GET['x'] : 2;
$y=isset($_GET['y']) ? $_GET['y'] : 1;
  if (($x<0) && ($y<0))
  {
    $x=abs($x);
    $y=abs($y);
  }
  else if (($x<0) || ($y<0))
  {
    $x+=0.5;
    $y+=0.5;
}
  else if ((($x>=0) && ($y>=0)) && (($x>2) || ($x<0.5) && ($y>2)||($y<0.5)))
  {
	$x/=10;
    $y/=10;
  }
    echo "  
    <br>
    <input class='button' type='submit'></div>
    <br>
    <div class='outputText'>
    <h1>X=$x Y=$y</h1>
    </div>
    ";
?>
</form>
</body>
</html>

