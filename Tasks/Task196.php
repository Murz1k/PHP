<!DOCTYPE html>
<html>
<head>
<title>Task196</title>
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
for($i=0;$i<50;$i++)
{
  $a[$i]= rand(1,20);//��������� ������
  echo"$a[$i] ";
  if($a[$i]%2!=0)//���� ����� ��������
  {
    $b[$i]=$a[$i]*2;
  }
  else
  {
    $b[$i]=$a[$i];
  }
}
echo "<br>";
for($i=0;$i<50;$i++)//������� ���������� ������
{
  echo"$b[$i] ";
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