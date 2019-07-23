<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="./css/opmaak.css" />
	<title><?php echo basename(__FILE__);?></title>
</head>
<body>
<?php 
error_reporting(E_ALL); 
?>
<p>
<h3>$_COOKIE</h3>
<pre>
<?php var_dump($_COOKIE); ?>
</pre>
</p>
<p>
<a href="vb6_verwijdercookie.php">vb6_verwijdercookie.php</a>
</p>
<p>
<a href="vb6_setcookie.php">vb6_setcookie.php</a>
</p>

</body>
</html>


