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
function printBoodschap($boodschap){
		echo "$boodschap<br/>\n";
		}

function som ($a, $b){
		return $a + $b;
		}

printBoodschap ("test");
$a = 1;
$b = som($a,2);
echo $b;
?>
</p>
</body>
</html>
