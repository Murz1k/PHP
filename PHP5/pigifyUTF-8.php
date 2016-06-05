<!DOCTYPE html>
<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset = utf-8">
<title>Игра слов</title>
</head>
<body>
<h1>Игра слов</h1>
<?php

if(!filter_has_var(INPUT_POST,"inputString"))
{
	//форма ввода значения
	print <<<HERE
	<form action="" method = "POST">
	<fieldset>
	<textarea name ="inputString"
	rows ="20"
	cols = "40"></textarea>
	<input type = "submit"
	value = "Отправить"/>
	</fieldset>
	</form>
HERE;
}
else
{
//обрабатываем введённое значение:
	$inputString = filter_input(INPUT_POST,"inputString");
	$newPhrase = "";
	//Заносим слова в массив
	$words = explode(" ",$inputString);
	foreach($words as $theWord){
		$theWord = rtrim($theWord);
		$firstLetter = mb_substr($theWord,0,1,'UTF-8');
		if(mb_strstr("аеёиоуыэюяАЕЁИОУЫЭЮЯ",$firstLetter)){
			$newWord = $theWord."вай";
		}//end if
		else{
			//первая буква - согласная
			$restOfWord = mb_substr($theWord, 1,mb_strlen($theWord,'UTF-8')-1,'UTF-8');
			$newWord = $restOfWord.$firstLetter."ай";
		}//end if
		$newPhrase = $newPhrase.$newWord." ";
	}//end foreach
	print "<p>$newPhrase</p> \n";
}//end if
?>
</body>
</html>