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
function printDirectory($dir){
	$dir = realpath($dir);
	$handle = opendir($dir);
	$f = readdir($handle);
	while ($f !== false) {
	if ($f !== "." && $f !== ".."){
		$f = $dir. "/" .$f;
		echo htmlentities($f, ENT_QUOTES,'ISO-8859-1')."<br/>\n";
		if(is_dir($f)){
			printDirectory($f);
			}
		}
	$f = readdir($handle);
    	}
}

printDirectory('..');
?>
</p>
</body>
</html>
