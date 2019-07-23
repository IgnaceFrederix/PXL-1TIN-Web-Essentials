<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="./css/opmaak.css" />
	<title><?php echo basename(__FILE__);?></title>
</head>
<body><p>
<?php

$a = "1";	// string
$b = 1;		// integer

if ($a == $b)  	echo '$a == $b   <br/>'; 
if ($a === $b) 	echo '$a === $b <br/>'; 
?>

</p>
</body>
</html>
