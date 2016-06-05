<!DOCTYPE html>
<html>
<head>
<title>Task60c</title>
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
$x=isset($_GET['x']) ? $_GET['x'] : 3;
$y=isset($_GET['y']) ? $_GET['y'] : 4;
if($y<=1-pow($x,2) && y>=(sqrt(1-pow($x,2))-1))
{
  $u = $x-$y;
}
else
{
  $u = $x*$y+7;
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

