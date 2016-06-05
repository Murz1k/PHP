<!DOCTYPE html>
<html>
<head>
<title>Task452g</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html"; charset="utf-8">
</head>

<body>

<?php
$xPos = 2; //Стартовый X
$yPos = 0;//Стартовый Y
$Angle = 90; //Стартовый угол (повернут направо)
$Pen = 0; //Ручка опущена
$Number = 1; //Начнем с первого шага
echo "Запуск программы:";

function Output()//Вывод данных
{
	global $Number, $xPos, $yPos, $Angle, $Pen;//Глобальные переменные
	echo "<br><br>Шаг №$Number:";
	echo "<br>Позиция X = $xPos";
	echo "<br>Позиция Y = $yPos";
	echo "<br>Угол = $Angle";
	if ($Pen == 0){
		echo "<br>Перо опущено";
	}
	else{
		echo "<br>Перо поднято";
	}
	$Number = $Number + 1;//Увеличиваем номер шага.
}

function Forward($lenght)//Движение вперед на определенную длину
	global $xPos, $yPos, $Angle;
	switch ($Angle){
		case 0:
			$xPos+=$lenght;//Увеличиваем X на длину
		break;
		case 45:
			$xPos++;//Увеличиваем X на 1
			$yPos++;//Увеличиваем Y на 1
		break;
		case 90:
			$yPos+=$lenght;//Увеличиваем X на длину
		break;
		case 135:
			$xPos++;//Увеличиваем X на 1
			$yPos--;//Уменьшаем Y на 1
		break;
	    case 180:
			$xPos-=$lenght;//Уменьшаем X на длину
		break;
		case 225:
			$xPos--;//Уменьшаем X на 1
			$yPos--;//Уменьшаем Y на 1
		break;
		case 270:
			$yPos-=$lenght;//Уменьшаем Y на длину
		break;
		case 315:
			$xPos--;//Уменьшаем X на 1
			$yPos++;//Увеличиваем Y на 1
		break;
	}
Output();
}

function Left($degree)//Поворот налево на количество градусов
{
	global $Angle;
	$Angle = $Angle - $degree;
	if ($Angle == -$degree){
		$Angle = 360-$degree;
	}
	Output();
}

function Right($degree)//Поворот направо на количество градусов
{
	global $Angle;
	$Angle = $Angle + $degree;
	if ($Angle == 360){
		$Angle = 0;
	}
	Output();
}

function PenUp()//Ручка опускается
{
	global $Pen;
	if ($Pen == 0)
	{
		$Pen = 1;
	}
	Output();
}

function PenDown()//Ручка поднимается
{
	global $Pen;
	if ($Pen == 1)
	{
		$Pen = 0;
	}
	Output();
}

echo"<h1>Рисуем 2</h1>";
Output();
Forward(1);
Right(90);
Forward(1);
Right(45);
Forward(sqrt(2));
Left(135);
Forward(1);
echo"<h1>Переходим к следующей цифре</h1>";
PenUp();
Forward(1);
PenDown();
echo"<h1>Рисуем 0</h1>";
Forward(1);
Left(90);
Forward(2);
Left(90);
Forward(1);
Left(90);
Forward(2);
Left(90);
echo"<h1>Переходим к следующей цифре</h1>";
PenUp();
Forward(3);
PenDown();
echo"<h1>Рисуем 1</h1>";
Left(90);
Forward(2);
Left(135);
Forward(sqrt(2));
echo"<h1>Переходим к следующей цифре</h1>";
PenUp();
Left(135);
Forward(2);
PenDown();
echo"<h1>Рисуем 6</h1>";
Forward(1);
Right(90);
Forward(1);
Right(90);
Forward(1);
Right(90);
Forward(1);
Right(45);
Forward(sqrt(2));
echo"<h1>Рисование окончено.</h1>";
?>

</body>
</html>