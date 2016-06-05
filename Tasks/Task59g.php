<!DOCTYPE html>
<html>
<head>
<title>Task59</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=uft-8">
<style>
   .inputText {
    padding: 20px;
   }
   .outputText {
    padding: 20px;
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
X: <input class='inputArea' type='text' name='x'> 
Y: <input class='inputArea' type='text' name='y'>";
$x=isset($_GET['x']) ? $_GET['x'] : 3;
$y=isset($_GET['y']) ? $_GET['y'] : 4;
if(($x>= -1) && ( -abs($x * 2) + 2 - $y >= 0 ) )
{
    $res = "Yes";
  }
  else
  {
    $res = "No";
  }
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