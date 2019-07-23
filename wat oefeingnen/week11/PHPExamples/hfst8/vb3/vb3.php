<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="./css/opmaak.css" />
	<title><?php echo basename(__FILE__);?></title>
</head>
<body>
<p>
<?php 
error_reporting(E_ALL); 
?>

<?php 
if(isset($_POST['btnOk'])){
	$anaam = $_POST['anaam'];
	$vnaam = $_POST['vnaam'];
	echo "Ingevoerd: voornaam '$vnaam' en achternaam '$anaam'.<br/>";
	}
else{
?>
<form action="vb3.php" method="post">
	<div class="tabel">
		<div class="rij">
			<div class="titel">Voornaam:</div>
			<div class="invoer"><input type="text" name="vnaam" /></div>
		</div>
		<div class="rij">
			<div class="titel">Achternaam:</div>
			<div class="invoer"><input type="text" name="anaam" /></div>
		</div>
	</div>
<input type="submit" name="btnOk" value="Ok"/>
    <?php
    if(isset($_POST['btnOk'])){
        echo "$anaam";
    }

    ?>
</form>
<?php  } ?>
</p>
</body>
</html>
