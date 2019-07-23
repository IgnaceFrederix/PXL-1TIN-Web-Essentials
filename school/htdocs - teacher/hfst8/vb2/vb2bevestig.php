<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo basename(__FILE__);?></title>
</head>
<body>
<p>
<?php 
error_reporting(E_ALL);
?>

<?php
$anaam = $_POST['anaam'];
$vnaam = $_POST['vnaam'];
echo "<br/>voornaam = '$vnaam' en achternaam = '$anaam'.";
?>

<form action="vb2verwerking.php" method = "post">
	<input type="submit" value="Bevestig"/>
	<input type = "hidden" name = "anaam" value = "<?php echo $anaam; ?>"/>
	<input type = "hidden" name = "vnaam" value = "<?php echo $vnaam; ?>"/>
</form>
<br />
<form action="vb2.html" method = "post">
	<input type="submit" value="Terug"/>
</form>
</p>
</body>
</html>
