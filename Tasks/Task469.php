<!DOCTYPE html>
<html>
<head>
<title>Task469</title>
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
    font-size: 170%;
    font-family: Geneva, Arial, Helvetica, sans-serif;
   }
   .inputArea
   {
    width: 500px;
    font-size: 30px;
   }
   .inputLen
   {
    width: 50px;
    font-size: 30px;
   }
   .button
   {
    width: 220px;
    font-size: 30px;
   }
  </style>
</head>

<body style="text-align: center ">
<form name="form" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
<?php
echo "<h1>
<div class='inputText'>������� ����� ������:  
<input class='inputLen' type='text' name='maxLen'><br>
������� ������:<br>
<input class='inputArea' type='text' name='s'><br>
";
$maxLen=isset($_GET['maxLen']) ? $_GET['maxLen'] : 0;
$s=isset($_GET['s']) ? $_GET['s'] : 0;

if($maxLen!=0)
{
$s = preg_replace('/ {2,}/',' ',$s); //������ ������ ������� � ������ 
$s = ltrim($s," "); //������ ������ � ������ ������ 
$s = rtrim($s," "); //������ ������ � ����� ������ 

echo"������: $s<br>";
$len = mb_strlen($s);
 $otstupi = $maxLen-$len;//15
echo"����� ��������: $maxLen<br>";
echo"�������� ������: $len <br>";
$array = mb_split(" ",$s); //������ ���������� ���� ����������� ��������� 
echo "���������� �������� � ������ = " ,sizeof($array)-1 ;
echo"<br>";

$countOtstupi = 0;
if((sizeof($array)-1)!=0)
{
$countOtstupi = floor($otstupi/(sizeof($array)-1));
}
echo"����� �������� �������� ����� �������: $countOtstupi";

for($i = 0;$i<=$countOtstupi;$i++)
{
$otstup.=' ';
}
for($i = 0;$i<sizeof($array)-1;$i++)
{
	$array[$i].=$otstup;
}
for($i = 0;$i<sizeof($array);$i++)
{
	$str.=$array[$i]; 
}
echo"<pre>$str</pre>";

$len = mb_strlen($str);
echo"�������� ������: $len <br>";

$lastotstupi = $maxLen-$len;//15
echo"�������� �������� ����� ��������� ������: $lastotstupi <br>";

$str="";
for($i = 0;$i<$lastotstupi;$i++)
{
	$array[sizeof($array)-1] = ' '.$array[sizeof($array)-1]; 
}
for($i = 0;$i<sizeof($array);$i++)
{
	$str.=$array[$i]; 
}

echo"�������� ������ <pre>$str</pre>";
$len = mb_strlen($str);
echo"�������� ������: $len";

}
echo "  
    <br>
    <input class='button' type='submit'></h1>
    </div>
    ";
?>
</body>
</html>