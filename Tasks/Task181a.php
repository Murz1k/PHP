<!DOCTYPE html>
<html>
<head>
<title>Task181a</title>
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
echo"<h1>";
$n=50;
   for ($i = 0; $i < $n; $i++)
   {
    $a[$i]=rand(1,20);
    echo"$a[$i]  ";
   }
   echo"<br><br>Числа кратные 5: ";
   $sum = 0;
     for ($i = 0; $i < $n; $i++)
     {if($a[$i]%5==0)
      {
        echo"$a[$i]  ";
        $sum+=$a[$i];
      }
     }
    echo "  
    <br>
    <div class='outputText'>Сумма:$sum</h1>
    </div>
    ";
?>
</form>
</body>
</html>

