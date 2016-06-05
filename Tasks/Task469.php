<!DOCTYPE html>
<html>
<head>
<title>Task469</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=uft-8">
<style>
   .inputText {
    padding: 20px; /* Поля вокруг текста */
   }
   .outputText {
    padding: 20px; /* Поля вокруг текста */
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
<div class='inputText'>Введите длину строки:  
<input class='inputLen' type='text' name='maxLen'><br>
Введите строку:<br>
<input class='inputArea' type='text' name='s'><br>
";
$maxLen=isset($_GET['maxLen']) ? $_GET['maxLen'] : 0;
$s=isset($_GET['s']) ? $_GET['s'] : 0;

if($maxLen!=0)
{
$s = preg_replace('/ {2,}/',' ',$s); //удаляю лишние пробелы в тексте 
$s = ltrim($s," "); //удаляю пробел в начале строки 
$s = rtrim($s," "); //удаляю пробел в конце строки 

echo"Строка: $s<br>";
$len = mb_strlen($s);
 $otstupi = $maxLen-$len;//15
echo"Нужно символов: $maxLen<br>";
echo"Символов сейчас: $len <br>";
$array = mb_split(" ",$s); //считаю количество слов разделенных пробелами 
echo "Количество пробелов в строке = " ,sizeof($array)-1 ;
echo"<br>";

$countOtstupi = 0;
if((sizeof($array)-1)!=0)
{
$countOtstupi = floor($otstupi/(sizeof($array)-1));
}
echo"Нужно добавить пробелов между словами: $countOtstupi";

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
echo"Символов сейчас: $len <br>";

$lastotstupi = $maxLen-$len;//15
echo"Добавить пробелов перед последним словом: $lastotstupi <br>";

$str="";
for($i = 0;$i<$lastotstupi;$i++)
{
	$array[sizeof($array)-1] = ' '.$array[sizeof($array)-1]; 
}
for($i = 0;$i<sizeof($array);$i++)
{
	$str.=$array[$i]; 
}

echo"Конечная строка <pre>$str</pre>";
$len = mb_strlen($str);
echo"Символов сейчас: $len";

}
echo "  
    <br>
    <input class='button' type='submit'></h1>
    </div>
    ";
?>
</body>
</html>