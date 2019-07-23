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
$a = array(1, 2, 3, 4);
$a[7] = 11;
var_dump($a); echo '<br/>';

$b = array("een" => 1, "twee" => 3   );
$b["drie"] = 3;
var_dump($b); echo '<br/>';
?>
</p>
</body>
</html>
