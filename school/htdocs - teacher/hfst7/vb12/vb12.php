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
include(__DIR__ . "/functies.php");
$o = omtrek(12);
echo $o;
?>
</p>
</body>
</html>
