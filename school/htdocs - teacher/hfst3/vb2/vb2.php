<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title> vb2.php</title>
</head>
<body>
<p>
<?php
  
$a = "";
print ("\$a is van het type ". gettype($a));
$b = (boolean) $a;
if ($b) {
	print ("<br/>waar <br/>");
	}
else	{
	print ("<br/>niet waar <br/>");
	}
print ("\$b is van het type ". gettype($b));

?>
</p>
</body>
</html>
