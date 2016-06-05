<!DOCTYPE html>
<html>
<head>
<title>Task17</title>
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
echo "<h1>Введите внешний радиус<br>
<div class='inputText'>
R2: <input class='inputArea' type='text' name='r2'> 
</h1>
";
$r1=20;
$r2=isset($_GET['r2']) ? $_GET['r2'] : 21;
if($r2>20)
{
$s="Площадь: " + pow($r2,2)*pi()-pow($r1,2)*pi();
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

