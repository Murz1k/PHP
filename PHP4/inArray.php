<?php
header ("Content-Type:text/html; charset=UTF-8");
function printArray ($aArray){
	print '<pre>';
	print_r($aArray);
	print '</pre>';
	echo('<hr>');
}
$sOut = '';
$sDelimiter = ';';
if (isset($_REQUEST['Array'])){
	$sOut = $_REQUEST['Array'];
	$sOut = explode ($sDelimiter, $sOut);
	printArray($sOut);
}

?>
<form>
<input type = "text" name = "Array"><br>
<input type = "submit">
</form>
