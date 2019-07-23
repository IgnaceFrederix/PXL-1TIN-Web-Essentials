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
$b = 2.1;
$c = "aap";		
$d = "noot";

if ($a < $b)  	echo '$a &lt; $b <br/>'; 
if ($c < $d)  	echo '$c &lt; $d <br/>'; 
if ($a < $c)  	echo '$a &lt; $c <br/>';  // (int) "aap" = 0
?>

</p>
</body>
</html>
