<!DOCTYPE html>
<html>
<head>
<title>Task316g</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=uft-8">
<style>/*����� ��� �����*/
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
<form name="form" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
<?php
echo "<h1>������� N:<br>
<input class='inputArea' type='text' name='n'><br>
";//������ N
$n=isset($_GET['n']) ? $_GET['n'] : 0;//������ N
echo "<h1>������� ������:<br>
<input class='inputArea' type='text' name='s'><br>
";//������ ������
$s=isset($_GET['s']) ? $_GET['s'] : 0;//������ ������
$s = mb_strimwidth($s,0,$n);//��������� ������ �� ����� N
$array = mb_split(' ',$s);//����� ������ �� �����
for($i=0;$i<sizeof($array);$i++)
{
  if(mb_strlen($array[$i])<15)//���� ����� ����� ������ 15
  {
    $word = $array[$i];

      if(mb_strlen($word)>2)//���� � ����� ������ 2 ����
      {
    $firstletter = $word[0];//������ ����� �����
    $secondletter = $word[1];//������ ����� �����
    if($firstletter!=$secondletter)//���� ������ � ������ ����� �� �����
    {
      for($j = 2;$j<mb_strlen($word);$j++)
      {
        if($word[$j]!=$firstletter && $word[$j]!=$secondletter)//���� ��������� ����� �� ����� ������ � ������
        {
          $laststring.=$word.' ';//����� ��������, ���������
          break;
        }
      }
    }
      }
  }
}
echo "  
    <br>
    <input class='button' type='submit'></h1>
    <div class='outputText'>$laststring</h1>
    </div>
    ";//�����
?>
</body>
</html>