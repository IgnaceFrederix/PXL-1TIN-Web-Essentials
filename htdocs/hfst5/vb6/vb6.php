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
$i =0;
while ($i < 5){
	echo $i * $i . '<br/>';
	$i++;
	}
?>
</p>
</body>
</html>
