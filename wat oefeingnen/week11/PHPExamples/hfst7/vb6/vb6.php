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
function maakNull (&$arg){
	$arg= null;
	}

$a =1;
maakNull($a);
var_dump($a);
?>
</p>
</body>
</html>
