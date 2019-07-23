<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title> vb3.php</title>
</head>
<body>
<p>
<?php  

$a = true;   // ook toegelaten: TRUE, True, TrUe, trUe, ... 
if ($a)  	
	echo "\$a is waar<br/>\n"; 
else 	
	echo "\$a is niet waar<br/>\n"; 

$b = 1;   
$c = $b < 10;
if ($c)  	
	echo "\$c is waar<br/>\n"; 
else 	
	echo "\$c is niet waar<br/>\n"; 
	
?>
</p>
</body>
</html>
