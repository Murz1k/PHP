<!DOCTYPE html>
<html>
<head>
<META HTTP_EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<title>Сортировка пузырьком</title>
</head>

<body>
<h1>Сортировка пузырьком</h1>
<div>

<?php
    $m = 10;
    echo "Исходный массив: <br>";
    for ($i = 1;$i<$m;$i++)
    {
        $arr[$i] = rand(0,256);
        echo "$arr[$i]<br>";
    }
 
 
    for ($i = 1;$i<$m-1;$i++)
    {
        for ($j = 1;$j<$m-$i;$j++)
        {
        	if ($arr[$j] > $arr[$j+1])
        	{
        		$k = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $k;
                }
        }
    }
 
    echo "Отсортированный массив: <br>";
    for ($i = 1;$i<$m;$i++)
    {
        echo "$arr[$i]<br>";
 }
?>

</div>
</body>
</html>