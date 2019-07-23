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
// zet alle error reporting af
error_reporting(0);
?>


<?php

$a = 'aa';		
$b = 'bb';
$c = 12;
$d = true;

$e = $a.$b; 	//	$e = 'aabb'
$f = $a.$c;  	//   	$f = 'aa12'
		// 	(string) 12 = '12'
$g = $a.$q;  	// 	$g = 'aa'
 		// 	(string) NULL = ''	
$h = $a.$d; 	//	$h = 'aa1' 
		//	(string) true = '1'	

echo $e . '<br/>';
echo $f . '<br/>';
echo $g . '<br/>';
echo $h . '<br/>';
?>
</p>
</body>
</html>
