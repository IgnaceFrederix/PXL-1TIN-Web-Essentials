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
echo "$a[0]<br/>";
$a[0] = "ja";

$b = array("een" => 1, "twee" => 3   );
echo $b["een"].'<br/>';
echo "$b[een]<br/>";
$b["twee"] = 2;
?>
</p>
</body>
</html>
