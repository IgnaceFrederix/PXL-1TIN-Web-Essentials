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
$b = array(1, 2.1, true, "ja");
$c = array(1 => 12, "Juist" => true);
$d = array (2 => 1, 10);

/* onderstaande code toont de creatie en de var_dump van elke rij 
 het resultaat wordt getoond in een tabel */
echo '<table border ="1">';
echo '<tr><td>$a = array(1,2,3,4);</td><td> '; var_dump($a); 
echo '</td></tr>';
echo '<tr><td>$b = array(1,2.1,true,"ja");</td><td> '; var_dump($b); 
echo '</td></tr>';
echo '<tr><td>$c = array(1=> 12, "Juist" => true);</td><td> '; var_dump($c); 
echo '</td></tr>';
echo '<tr><td>$d = array (2 => 1, 10);</td><td> '; var_dump($d); 
echo '</td></tr>';
echo '</table>';   
?>
</p>
</body>
</html>
