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
$a = array(1 => "ma", 2 => "di", 3 => "wo", 4 => "ma");
$keys = array_keys($a);
$keysMa = array_keys($a, "ma");
$vals = array_values($a);
$grootte = count($a);

print_r($a); echo '<br/>';
print_r($keys); echo '<br/>';
print_r($keysMa); echo '<br/>';
print_r($vals); echo '<br/>';
echo $grootte; echo '<br/>';

sort ($a);
print_r($a); echo '<br/>';

shuffle($a);
print_r($a); echo '<br/>';
?>

</p>
</body>
</html>
