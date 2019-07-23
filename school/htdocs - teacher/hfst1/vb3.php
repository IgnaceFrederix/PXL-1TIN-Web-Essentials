<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title> vb3.php</title>
</head>
<body>
<p>standard tag: 
<?php $a = 1; 
echo $a;
?> </p>
<p>short-tag: 
<? $b = 2;
echo $b;
?> </p>
<p>short-tag: 
<?= $b?> </p>
<p>script-tag: 
<script language = 'php'>
$c=3;
echo $c;
</script>
</p>
</body>
</html>
