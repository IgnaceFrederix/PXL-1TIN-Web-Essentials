<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title> vb8.php</title>
</head>
<body>
<p>

<?php

$a = "a\'b";		// inhoud: 	[a\'b]   
					// \' is hier geen escape-char
$b = "a\"b";		// inhoud: 	[a"b]
$c = "a\tb";		// inhoud: 	[a	b]
$d = "a\$b ";		// inhoud: 	[a$b ]
echo "$a<br/>$b<br/>$c<br/>$d<br/>";

?>
</p>
</body>
</html>
