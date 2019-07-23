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
$d = array(1, "a" =>2, "b");
unset($d["a"]);
var_dump($d); echo '<br/>';
?>
</p>
</body>
</html>
