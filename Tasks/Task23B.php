<!DOCTYPE html>
<html>
<head>
<title>Task23B</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=uft-8">
</head>

<body>
<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
<?php 
echo "A: <input type='text' name='A'>";
echo "B: <input type='text' name='B'>";
echo "C: <input type='text' name='C'>";
$a=isset($_GET['A']) ? $_GET['A'] : 3;
$b=isset($_GET['B']) ? $_GET['B'] : 2;
$c=isset($_GET['C']) ? $_GET['C'] : 1;
echo "<br><input type='submit'><br>Длины высот<br>";
$A1 = VysA($a,$b,$c);
echo "AA1= ",$A1, "\n";
$B1 = VysA($b,$c,$a);
echo "AB1= ",$B1, "\n";
$C1 = VysA($c,$b,$a);
echo "AC1= ",$C1, "\n";
function Plosh($a,$b,$c)//площадь треугольника
{
$p=($a+$b+$c)/2;
return sqrt($p*($p-$a)*($p-$b)*($p-$c));
}
 
function VysA($a,$b,$c)//высота на сторону А
{
	if($a!=0)
	{
return 2*Plosh($a,$b,$c)/$a;
	}
}
?>
</form>
</body>
</html>