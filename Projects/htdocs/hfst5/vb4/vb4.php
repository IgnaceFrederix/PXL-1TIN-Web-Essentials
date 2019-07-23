<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="./css/opmaak.css" />
	<title><?php echo basename(__FILE__);?></title>
</head>
<body><p>
<?php
$a = 1;
$b = 2;
$c = ($a<$b) ? "$a is kleiner dan $b" : "$a is groter dan $b";
echo $c. '<br/>';
?>
</p>
</body>
</html>
