<!DOCTYPE html>
<html>
<head>
<title>Сплин</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html"; charset=utf-8">
</head>

<body>
<h1>"Сплин - моё сердце"</h1>
<h3>Демонстрация использования функции</h3>

<?php

date_default_timezone_set('Europe/Moscow');
function verse($stanza){
switch ($stanza)
{
	case 1:
$output = <<< HERE
<pre>
Мы не знали друг друго до этого лета
Мы болтались по свету в земле и воде
И совершенно случайно мы взяли билеты 
На соседние кресла на большой высоте
</pre>
HERE;
break;
    case 2:
$output = <<< HERE
<pre>
...
</pre>
HERE;
break;
    case 3:
$output = <<< HERE
<pre>
...
</pre>
HERE;
break;
    default:
$output = <<< HERE
<pre>
Припев: 
И мое сердце остановилось
Мое сердце замерло
Мое сердце остановилось
Мое сердце замерло
</pre>
HERE;
}

return $output;
}

print verse(1);
print verse(5);
print verse(2);
print verse(5);
print verse(3);
print verse(5);
print verse(5);

?>

</body>
</html>