<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title> vb5.php</title>
</head>
<body>
<pre>
<?php

$a = 1.223;					// double
echo "<br/><br/>$a<br/>\n";
var_dump($a);

$a = -1.23E122;					// double
echo "<br/><br/>$a<br/>\n";
var_dump($a);

$a = 2147483647 ;				// integer 
echo "<br/><br/>$a<br/>\n";
var_dump($a);

$a = 2147483648 ;				// double
echo "<br/><br/>$a<br/>\n";
var_dump($a);

$a = 1.22e310 ;					// double, oneindig
echo "<br/><br/>$a<br/>\n";
var_dump($a);

?>
</pre>
</body>
</html>
