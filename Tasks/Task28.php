<!DOCTYPE html>
<html>
<head>
<title>Task28</title>
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
echo "
<h1>
X: <input class='inputArea' type='text' name='x'>";//������ X
$x=isset($_GET['x']) ? $_GET['x'] : 3;//����������� X
$s=6+$x*(-5+$x*(4+$x*(-3+2*$x)));//������� ���������
echo "  
    <br>
    <br>
    <input class='button' type='submit'></div>
    <div class='outputText'>$s</h1>
    </div>
    ";//������� ���������
?>
</form>
</body>
</html>