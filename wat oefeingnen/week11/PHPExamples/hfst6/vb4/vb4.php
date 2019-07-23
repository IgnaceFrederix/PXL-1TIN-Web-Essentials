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
$c = array(1, "a" =>2);
$c[] ="nieuw";
var_dump($c); 
?>
</p>
</body>
</html>
