<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="./css/opmaak.css" />
	<title><?php echo basename(__FILE__);?></title>
</head>
<body><p>
<?php

$a = 1.1;			// stap 1
$b = $a; 			// stap 2
$b = 22;			// stap 3
echo "\$a = $a,  \$b = $b ";	// resultaat: $a = 1.1, $b = 22

?>
</p>
</body>
</html>
