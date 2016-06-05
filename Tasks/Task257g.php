<!DOCTYPE html>
<html>
<head>
<title>Task257g</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=uft-8">
<style>
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
echo "<h1>Введите строку:<br>
<input class='inputArea' type='text' name='s'><br>
";
$s=isset($_GET['s']) ? $_GET['s'] : 0;
$s = mb_strstr($s,'!',true);
echo"$s<br>";
if(mb_stristr($s,"он",false)!=false)
{
  echo"Пара 'он' имеется.<br>";
}
if(mb_stristr($s,"но",false)!=false)
{
  echo"Пара 'но' имеется.<br>";
}
echo "  
    <br>
    <input class='button' type='submit'></h1>
    </div>
    ";
?>
</body>
</html>