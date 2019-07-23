<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo basename(__FILE__);?></title>
</head>
<body>
<?php 
 error_reporting(E_ALL); 
?>
<p>
<?php 
echo '<h3>$_GET</h3>';
echo "<table>\n";
foreach ($_GET as $k => $v){
	echo "<tr><td>$k:</td><td>$v</td></tr>\n";
	}
echo "</table>\n";
$vnaam = $_GET['vnaam'];
$anaam = $_GET['anaam'];
echo "$anaam  " . "$vnaam";

echo '<h3>$_POST</h3>';
echo "<table>\n";
foreach ($_POST as $k => $v){
	echo "<tr><td>$k:</td><td>$v</td></tr>\n";
	}
echo "</table>\n";


echo '<h3>$_REQUEST</h3>';
echo "<table>\n";
foreach ($_REQUEST as $k => $v){
	echo "<tr><td>$k:</td><td>$v</td></tr>\n";
	}
echo "</table>\n";

echo '<h3>$_SERVER</h3>';
echo "<table>\n";
foreach ($_SERVER as $k => $v){
	echo "<tr><td>$k:</td><td>". htmlentities($v, ENT_QUOTES , 'ISO-8859-1') . "</td></tr>\n";
	}
echo "</table>\n";

?>

</p>
</body>
</html>
