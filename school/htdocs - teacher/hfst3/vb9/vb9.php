<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title> vb9.php</title>
</head>
<body>
<p>
<?php

$a = 'abc'; 			
$eerste = $a[0];
$laatste = $a[strlen($a)-1];
echo "$a heeft lengte " . strlen($a). "<br/>";
echo "<br/>het eerste symbool is $eerste<br/>";
echo "\$eerste is van het type ". gettype($eerste) . "<br/>";
echo "<br/>het laatste symbool is $laatste<br/>";
echo "\$laatste is van het type ". gettype($laatste) . "<br/>";

?>

</p>
</body>
</html>
