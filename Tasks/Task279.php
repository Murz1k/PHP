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
    font-size: 300%;
    font-family: Geneva, Arial, Helvetica, sans-serif;
   }
   .inputArea
   {
    width: 200px;
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
echo "<h1>
<div class='inputText'>Введите N 
<input class='inputArea' type='text' name='n'><br>
";
$n=isset($_GET['n']) ? $_GET['n'] : 3;
   for ($i = 0; $i < $n; $i++)
   {
    $a[$i]=rand(1,20);
    echo"$a[$i]  ";
   }
   echo"<br>";
     for ($i = 0; $i < $n; $i++)
     {
        $b[$i]=rand(1,20);
        echo"$b[$i]  ";
     }
   $sum = 1;
   for ($i = 0; $i < $n; $i++)
   {
      $sum *= ($a[$i]+$b[$n-$i]);
   }
    echo "  
    <br>
    <input class='button' type='submit'></div>
    <br>
    <div class='outputText'>
    $sum</h1>
    </div>
    ";
?>
</form>
</body>
</html>

