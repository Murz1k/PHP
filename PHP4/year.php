<?php 
if ($_POST['calculate'])
{
$firstyear = $_POST[firstyear];
$lastyear = $_POST[lastyear];
for($year=$firstyear;$year<=$lastyear;$year++)
{
if (($year % 4) == 0)
{
	echo "$year год - високосный <br>";
}
}
}
?>