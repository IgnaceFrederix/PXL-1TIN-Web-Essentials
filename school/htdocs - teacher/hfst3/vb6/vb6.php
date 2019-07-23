<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title> vb6.php</title>
</head>
<body>
<p>
<?php

$a = 'abc'; 			// inhoud: 	[abc]
$b = 'de$a f';			// inhoud: 	[de$a f]
$c = 'a\'b';			// inhoud: 	[a'b]
$d = '(\\)';			// inhoud: 	[(\)]
$e = 'a\nb';			// inhoud: 	[a\nb]
$f = 'a
b
c';
echo $a.'<br/>'.$b.'<br/>'.$c.'<br/>'.$d.'<br/>'.$e.'<br/>'.$f.'<br/>';

?>
</p>
</body>
</html>
