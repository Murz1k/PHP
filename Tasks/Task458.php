<!DOCTYPE html>
<html>
<head>
<title>Task458</title>
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
echo "<h1>Введите N,M<br>
<div class='inputText'>
N: <input class='inputArea' type='text' name='n'> 
M: <input class='inputArea' type='text' name='m'> 
</h1>
";
$n=isset($_GET['n']) ? $_GET['n'] : 2;
$m=isset($_GET['m']) ? $_GET['m'] : 2;
    
$s=A($n,$m);
    echo "  
    <br>
    <input class='button' type='submit'></div>
    <br>
    <div class='outputText'>
    <h1>A($n,$m)=$s</h1>
    </div>
    ";
    function A($n, $m)
	{
		if($n==0)
        return $m + 1;
    if($n!=0 && $m==0)
        return A($n - 1, 1);
    if($n > 0 && $m > 0)
    {
        $m = A($n, $m - 1);
        return A($n - 1, $m);
    }
    return 0;
}
?>
</form>
</body>
</html>

