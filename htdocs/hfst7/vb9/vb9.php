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
function druk ($a){
		static $tel =0;
		$tel++;
		echo "\$a = $a, \$tel = $tel<br/>\n"; 
	}

$tel = 0;
druk("abc");
druk("test");	
druk(12);
?>

<?php
echo "$tel\n";
?>
</p>
</body>
</html>
