<!DOCTYPE html>
<html>
<head>
<title>Task457</title>
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
   	font-size: 150%;
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
echo "
<h1>
A: <input class='inputArea' type='text' name='a'> 
C: <input class='inputArea' type='text' name='c'> 
N: <input class='inputArea' type='text' name='n'> ";
$a=isset($_GET['a']) ? $_GET['a'] : 3;
$n=isset($_GET['n']) ? $_GET['n'] : 4;
$c=isset($_GET['c']) ? $_GET['c'] : 5;
function f($n)
{
 if($n<=9 &&$n>=0)
 {
 	return $n;
 }
 else
 {
 	return ((g($n)*f($n-1-g($n)))+$n);
 }
}
function g($n)
{
return (($a*($n+$c))%10);
}
$res = f($n);
echo "  
    <br>
    <br>
    <input class='button' type='submit'></div>
    <div class='outputText'>$res</h1>
    </div>
    ";
?>
</form>
</body>
</html>