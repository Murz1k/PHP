<!DOCTYPE html>
<html>
<head>
<title>Task296a</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=uft-8">
<style>/*����� ��� �����*/
   .inputText {/*����� ������ inputText*/
    padding: 20px; /* ���� ������ ������ */
   }
   .outputText {/*����� ������ outputText*/
    padding: 20px; /* ���� ������ ������ */
   }
   h1 /*����� ��� ��������� h1*/
   {
   	font-size: 150%; /*������ ������*/
   	font-family: Geneva, Arial, Helvetica, sans-serif; /*�����*/
   }
   .inputArea /*����� ������ inputArea*/
   {
   	width: 200px; /*������ ��������*/
   	font-size: 100px; /*������ ������*/
   }
   .button /*����� ������ button*/
   {
   	width: 220px; /* ������ ��������*/
   	font-size: 40px; /*������ ������*/
   }
  </style>
</head>

<body style="text-align: center "><!--������������ �� ������-->
<form name="Form" method="GET" action="<?=$_SERVER['PHP_SELF']?>"><!--����� �������� php ������ ����-->
<?php
echo "<h1>";
$min = 1000000;//��������� ����������� ��������
$max = 0;//��������� ������������ ��������
for($i=0;$i<20;$i++)//��������� ������ � ������ ������������ ��������, ����������� � �� �������
{
  $a[$i]= 20-$i;
  if($a[$i]>$max)
  {
    $max = $a[$i];
    $imax = $i;
  }
  if($a[$i]<$min)
  {
    $min = $a[$i];
    $imin = $i;
  }
  echo"$a[$i] ";
}
//������ ������� ������������ � ����������� ��������
$buf = $a[$imin];
$a[$imin] = $a[$imax];
$a[$imax] = $buf;
echo "<br><br>";
for($i=0;$i<50;$i++)//������� ���������� ������
{
  echo"$a[$i] ";
}
echo "  
    <br>
    <br>
    <input class='button' type='submit'></div></h1>
    </div>
    ";//������ ��������� ���������� php.
?>
</form>
</body>
</html>