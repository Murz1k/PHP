<!DOCTYPE html>
<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<title>Создание галереи</title>
</head>
<body>
<?php
$dirName = "pics";//путь к каталогу с изображениями
$dp = opendir($dirName);
chdir($dirName);
//все файлы каталога - в массив
$currentFile = "";
while($currentFile!==false){
	$currentFile=readdir($dp);
	$theFiles[] = $currentFile;
}//end while

//извлечь все gif и jpg
$imageFiles = preg_grep("/jpg$|gif$|png$/",$theFiles);

$output = <<<HERE
<!DOCTYPE html>
<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<title>Галерея</title>
</head>
<body>

<div>
HERE;

foreach($imageFiles as $currentFile){
	$output .= <<<HERE
	<a href = "$currentFile">
	<img src = "$currentFile"
	height = "50"
	width = "50"
	alt = "$currentFile"></a>
HERE;
}

$output .=<<<HERE
</div>
</body>
</html>
HERE;

//сохранение списка в файл
$fp = fopen("imageIndex.html","w");// имя файла - imageIndex.html
fputs ($fp,$output);
fclose($fp);

print<<<HERE
<p>Галерея
<a href="$dirName/imageIndex.html">здесь</a>
</p>

HERE;
?>
</body>
</html>