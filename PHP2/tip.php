<!DOCTYPW html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Совет на день</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html"; charset=utf-8">
</head>

<body>
<h1>Совет на день</h1>
<?php
date_default_timezone_set('Europe/Moscow');
print "<h3>Совет:</h3>"
?>
<div style = "border-color:green; border-style:groove; border-width:2px">
<?php
readfile("tips.txt");
?>
</body>
</html>