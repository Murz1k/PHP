<!DOCTYPE html>
<html>
<head>
<title>Task442</title>
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
   	width: 60px;
   	font-size: 50px;
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
X1: <input class='inputArea' type='text' name='x1'> 
X2: <input class='inputArea' type='text' name='x2'> 
X3: <input class='inputArea' type='text' name='x3'> 
X4: <input class='inputArea' type='text' name='x4'> 
X5: <input class='inputArea' type='text' name='x5'> 
X6: <input class='inputArea' type='text' name='x6'> 
X7: <input class='inputArea' type='text' name='x7'> 
X8: <input class='inputArea' type='text' name='x8'> 
X9: <input class='inputArea' type='text' name='x9'> 
X10: <input class='inputArea' type='text' name='x10'> <br>
Y1: <input class='inputArea' type='text' name='y1'>
Y2: <input class='inputArea' type='text' name='y2'>
Y3: <input class='inputArea' type='text' name='y3'>
Y4: <input class='inputArea' type='text' name='y4'>
Y5: <input class='inputArea' type='text' name='y5'>
Y6: <input class='inputArea' type='text' name='y6'>
Y7: <input class='inputArea' type='text' name='y7'>
Y8: <input class='inputArea' type='text' name='y8'>
Y9: <input class='inputArea' type='text' name='y9'>
Y10: <input class='inputArea' type='text' name='y10'> <br>
";
$x[0]=isset($_GET['x1']) ? $_GET['x1'] : 3;
$x[1]=isset($_GET['x2']) ? $_GET['x2'] : 3;
$x[2]=isset($_GET['x3']) ? $_GET['x3'] : 3;
$x[3]=isset($_GET['x4']) ? $_GET['x4'] : 3;
$x[4]=isset($_GET['x5']) ? $_GET['x5'] : 3;
$x[5]=isset($_GET['x6']) ? $_GET['x6'] : 3;
$x[6]=isset($_GET['x7']) ? $_GET['x7'] : 3;
$x[7]=isset($_GET['x8']) ? $_GET['x8'] : 3;
$x[8]=isset($_GET['x9']) ? $_GET['x9'] : 3;
$x[9]=isset($_GET['x10']) ? $_GET['x10'] : 3;
$y[0]=isset($_GET['y1']) ? $_GET['y1'] : 3;
$y[1]=isset($_GET['y2']) ? $_GET['y2'] : 3;
$y[2]=isset($_GET['y3']) ? $_GET['y3'] : 3;
$y[3]=isset($_GET['y4']) ? $_GET['y4'] : 3;
$y[4]=isset($_GET['y5']) ? $_GET['y5'] : 3;
$y[5]=isset($_GET['y6']) ? $_GET['y6'] : 3;
$y[6]=isset($_GET['y7']) ? $_GET['y7'] : 3;
$y[7]=isset($_GET['y8']) ? $_GET['y8'] : 3;
$y[8]=isset($_GET['y9']) ? $_GET['y9'] : 3;
$y[9]=isset($_GET['y10']) ? $_GET['y10'] : 3;
function s($x1,$y1,$x2,$y2)
{
    return sqrt(pow(($x2-$x1),2)+pow(($y2-$y1),2));
}
$x[10]=$x[0];
$y[10]=$y[0];
for($i=0;$i<10;$i++)
{
	$r+=s($x[$i],$y[$i],$x[$i+1],$y[$i+1]);
}
echo"
<br>
<input class='button' type='submit'></div>
<div class='outputText'>$r</h1>
</div>
";
?>
</form>
</body>
</html>