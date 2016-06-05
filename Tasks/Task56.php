<!DOCTYPE html>
<html>
<head>
<title>Task56</title>
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
function min3($a, $b,$c){//���������� ������� �� ���� �����
     if ($a<=$b&&$a<=$c)  return $a;
     if ($b<=$c&&$b<=$a)  return $b;
     return $c;
}
function mid3($a, $b,$c){//���������� ������� �� ���� �����
     if ($a>=$b&&$a<=$c||$a<=$b&&$a>=$c)  return $a;
     if ($b>=$c&&$b<=$a||$b<=$c&&$b>=$a)  return $b;
     return c;
}
function min2($a,$b){//���������� ������� �� ���� �����
    return $a<$b ? $a:$b;
}
function max2($a,$b){//���������� �������� �� ���� �����
    return $a>$b ? $a:$b;
}
echo "
<h1>
X: <input class='inputArea' type='text' name='x'>
Y: <input class='inputArea' type='text' name='y'>
A: <input class='inputArea' type='text' name='a'>
B: <input class='inputArea' type='text' name='b'>
C: <input class='inputArea' type='text' name='c'>
";//���� �������� � ����
$x=isset($_GET['x']) ? $_GET['x'] : 3;//���������� �������� ����������
$y=isset($_GET['y']) ? $_GET['y'] : 3;
$a=isset($_GET['a']) ? $_GET['a'] : 3;
$b=isset($_GET['b']) ? $_GET['b'] : 3;
$c=isset($_GET['c']) ? $_GET['c'] : 3;
//��������, ���� ����������� � ������� ������� �������
//������ ������������ � ������������� �������� ���������� �������������.
if (min3($a,$b,$c)<=min2($x,$y)&&mid3($a,$b,$c)<=max2($x,$y)) {
    $s="��������";
}
else {
    $s="�� ��������";
}
echo "  
    <br>
    <br>
    <input class='button' type='submit'></div>
    <div class='outputText'>$s</h1>
    </div>
    ";//������ ��������� ���������� php.
?>
</form>
</body>
</html>