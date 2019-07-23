<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="./css/opmaak.css" />
	<title><?php echo basename(__FILE__);?></title>
</head>
<body>
<p>
<?php

$a = 'abc'; 
$eersteSymbool = $a[0];

$tweedeSymbool = $a[1];
$laatsteSymbool = $a[strlen($a)-1];

var_dump($eersteSymbool);
?>
</p>
</body>
</html>
