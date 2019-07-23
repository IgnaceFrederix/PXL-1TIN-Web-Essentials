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
function faculteit($a){
	if (is_numeric($a) && $a >=0){
		if ($a >1){
			return $a*faculteit($a-1);
			}
		else{
			return 1;	
			}
		}
	else{
		return "fout";
		}
	}

echo faculteit(5);
?>
</p>
</body>
</html>
