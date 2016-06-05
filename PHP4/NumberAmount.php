<?php 
if ($_POST['calculate'])
{
$number = $_POST[number];
while ($number > 0){
	$amount = $amount + 1;
	$number = floor($number / 10);
}
echo "Количество цифр: $amount";

}
?>