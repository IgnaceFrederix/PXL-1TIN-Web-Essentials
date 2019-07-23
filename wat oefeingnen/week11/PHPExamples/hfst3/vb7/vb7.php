<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title> vb7.php</title>
</head>
<body>
<p>
<?php 
// zet alle error reporting af
error_reporting(0);
?>

<?php

$a = "abc"; 			// inhoud: 	[abc]
$b = "de$a f";			// inhoud: 	[deabc f]
$c = "de${a}f";			// inhoud: 	[deabcf]
$d = "de$af";			// inhoud: 	[de]

echo "$a<br/>$b<br/>$c<br/>";

?>
</p>
</body>
</html>
