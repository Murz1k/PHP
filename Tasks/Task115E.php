<!DOCTYPE html>
<html>
<head>
<title>Task115e</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=uft-8">
<style>
   .inputText /*����� ��� ������ �����*/
   {
    padding: 20px;/*�������*/
   }
   .outputText /*����� ��� ������ ����������*/
   {
    padding: 20px;/*�������*/
   }
   h1/*����� ��� ������*/
   {
   	font-size: 500%;/*������ ������*/
   	font-family: Geneva, Arial, Helvetica, sans-serif;/*�����*/
   }
   .inputArea/*����� ��� ���������� ����*/
   {
   	width: 200px;/*������*/
   	font-size: 100px;/*������ ������*/
   }
   .button/*����� ��� ������*/
   {
   	width: 220px;/*������*/
   	font-size: 40px;/*������ ������*/
   }
  </style>
</head>

<body style="text-align: center"><!--������������ ������ �� ������-->
<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
<?php
echo "<h1>������� N<br>
<div class='inputText'>
N: <input class='inputArea' type='text' name='n'> 
</h1>
";/*���������� ����� 'inputText' � 'inputArea'. ���������� ���� ��� ����� ��������.*/
$n=isset($_GET['n']) ? $_GET['n'] : 3;/*������ �������� � ���������*/
$suma = 0;
function Factorial($n)//������� ���������
{
  $s = 1;
for($i = 1;$i<=$n;$i++)
{
$s *= $i;
}
return $s;
}
for($k = 0;$k<=$n;$k++)
{
    $suma += pow(-1,$k)*($k + 1) / Factorial($k);
}
echo "  
<br>
<input class='button' type='submit'></div>
<br>
<div class='outputText'>
<h1>$suma</h1>
</div>
";/*���������� ����� 'button' � 'outputText'. ������� ���������.*/
?>
</form>
</body>
</html>

