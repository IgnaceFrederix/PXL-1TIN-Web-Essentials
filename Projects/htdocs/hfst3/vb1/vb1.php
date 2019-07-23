<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title> vb1.php</title>
</head>
<body>
<?php 
// zet alle error reporting af
error_reporting(0);
?>
<p>
<?php
  
print ("a heeft waarde " . $a . " en type " . gettype($a) . "<br/>\n");
$a = 1;
print ("a heeft waarde " . $a . " en type " . gettype($a) . "<br/>\n");
$a = 3.1415;
print ("a heeft waarde " . $a . " en type " . gettype($a) . "<br/>\n");
$a = "tekst";
print ("a heeft waarde " . $a . " en type " . gettype($a) . "<br/>\n");
$a = TRUE;
print ("a heeft waarde " . $a . " en type " . gettype($a) . "<br/>\n");
unset($a);
print ("a heeft waarde " . $a . " en type " . gettype($a) . "<br/>\n");
$a=null;
print ("a heeft waarde " . $a . " en type " . gettype($a) . "<br/>\n");

?>
</p>
</body>
</html>
