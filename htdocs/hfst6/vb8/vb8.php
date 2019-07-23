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
$a = array(1 => "ma", 2 => "di", 3 => "wo", 4 => "ma");

foreach ($a as $v) {
    	$v = -1;
		}
var_dump ($a); echo '<br/>';

foreach ($a as &$v) {
    $v = -1;
}
var_dump ($a); echo '<br/>';
?>
</p>
</body>
</html>
