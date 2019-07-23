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
function som (){
	$args = func_get_args();
	$s =0;
	foreach ($args as $v){
		$s += $v;
		}
	return $s;
	}

$a = 1;
$b = som($a,2);
$c = som(1,2,3);
echo "$b<br/>$c";
?></p>
</body>
</html>
