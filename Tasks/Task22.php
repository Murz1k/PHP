<!DOCTYPE html>
<html>
<head>
<title>Task22</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=uft-8">
</head>

<body>
<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
<?php 
echo "Введите основания трапеции a>b <br>";
echo "a:<input type='text' name='a'>";
echo "b:<input type='text' name='b'>";
$a=isset($_GET['a']) ? $_GET['a'] : 2;
$b=isset($_GET['b']) ? $_GET['b'] : 1;
echo "<br>Введите острый угол <br>";
echo "u:<input type='text' name='u'>";
$u=isset($_GET['u']) ? $_GET['u'] : 45;
$x;
if($b!=0 && $a!=0 && $u!=0)
{
$u=$u*M_PI/180;
$s=(pow($a,2)-pow($b,2))/2*tan($u);

echo "<br><input type='submit'><br>";
echo "S=";
echo $s;
}
else{
echo "Решения нет";
}
?>
</form>
</body>
</html>