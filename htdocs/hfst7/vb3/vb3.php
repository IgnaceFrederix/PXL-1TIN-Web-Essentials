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
function som ($a, $b, $c = 0){
		return $a + $b + $c;
		}

$a = 1;
$b = som($a,2);
$c = som(1,2,3);
echo "$b<br/>$c";
?>
</p>
</body>
</html>
