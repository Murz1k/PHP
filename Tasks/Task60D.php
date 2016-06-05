<!DOCTYPE html>
<html>
<head>
<title>Task60D</title>
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
//основная программма
echo "<h1>Введите X,Y<br>
<div class='inputText'>
X: <input class='inputArea' type='text' name='x'> 
Y: <input class='inputArea' type='text' name='y'> 
</h1>
";
$x=isset($_GET['x']) ? $_GET['x'] : 1;
$y=isset($_GET['y']) ? $_GET['y'] : 1;
if($y>=-$x&&y<=$x)
{
  $u = sqrt(abs(pow($x,2)-1));
}
else
{
  $u = $x+$y;
}
echo "  
    <br>
    <input class='button' type='submit'></div>
    <br>
    <div class='outputText'>
    <h1>$u</h1>
    </div>
    ";
?>
</form>
</body>
</html>

