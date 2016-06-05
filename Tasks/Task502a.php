<!DOCTYPE html>
<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<title>Task502a</title>
</head>
<body>
<?php
$fp = fopen("Text.txt","r");//Читаем файл
if($fp!=false)
{
for($i=0;!feof($fp);$i++)
{
	$s .= fgets($fp);//Извлекаем построчно
}//end while
fclose($fp);
}
$s = preg_replace('/[^\w\s]/u', ' ', $s);//удаляем знаки препинания
$s= preg_replace("/[0-9]{1}/", "", $s); //удаляем все цифры
$s = mb_strtolower($s,'UTF-8');//ставим низкий регистр
$s = mb_convert_encoding($s, 'HTML-ENTITIES', 'UTF-8');//удаляем невидимые символы
$s = preg_replace("/(&nbsp;)|(\s)|( )/", ' ', $s);
$s = preg_replace('/ {2,}/',' ',$s); //удаляем лишние пробелы в тексте 
$s = ltrim($s," "); //удаляем пробел в начале строки 
$s = rtrim($s," "); //удаляем пробел в конце строки 
$words = mb_split(' ',$s);//Делим строку на слова
$words = array_splice($words,0,5000);//Обрезаем массив до 5000 слов
$words = array_count_values($words);//Оставляем уникальные слова с их повторениями
arsort($words);//сортируем массив
$words = array_splice($words,0,100);//Обрезаем словарь до 100 слов
print_r($words);//Выводим слова и количество повторов
?>
</body>
</html>