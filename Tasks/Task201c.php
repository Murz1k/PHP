<!DOCTYPE html>
<html>
<head>
<title>Task201c</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=uft-8">
<style>
   .inputText {
    padding: 20px; /* ���� ������ ������ */
   }
   .outputText {
    padding: 20px; /* ���� ������ ������ */
   }
   h1
   {
   	font-size: 300%;
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
echo "<h1>������� N<br>
<div class='inputText'>
N: <input class='inputArea' type='text' name='n'><br>
";
$n=isset($_GET['n']) ? $_GET['n'] : 3;
$max = 0;
for($i=0;$i<$n;$i++)
{
	$num = rand(1,20);
	if($max<$num && ($i%2!=0))
	{
		$max=$num;
	}
	echo"$num ";
}
echo "  
    <br>
    <br>
    <input class='button' type='submit'></div>
    <div class='outputText'>
    ��������: $max</h1>
    </div>
    ";
?>
</form>
</body>
</html>