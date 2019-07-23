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
if ($a < $b) {
   	$c =  '$a is kleiner dan $b';
	} 
elseif ($a == $b) {
	$c =  '$a is gelijk aan $b';
	} 
else {
  	$c =  "$a is groter dan $b";
	}
echo $c;
?>
</p>
</body>
</html>
