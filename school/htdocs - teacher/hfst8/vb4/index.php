<!DOCTYPE html>
<html>
<head> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="css/index.css" />
	<title><?php echo basename(__FILE__);?></title>
</head>
<body>
<?php 
error_reporting(E_ALL); 

$bestanden = array('a.php', 'b.php', 'c.php' );

function geldigBestand($f){
	global $bestanden;
	return in_array($f, $bestanden) && is_file(__DIR__.'/content/'. $f)  ;
	}
?>


<nav class = "menu">
<form method = "get" action = 'index.php'>
<?php
$geselecteerdBestand=null;
if(isset($_GET['bestand']) && geldigBestand($_GET['bestand'])){
	$geselecteerdBestand = $_GET['bestand'];
	}
else{
	$geselecteerdBestand = $bestanden[0];
	}
echo "Open bestand\n";
echo "<ul>";
foreach($bestanden as $v){
	echo "<li>";
	if($v === $geselecteerdBestand){
		echo "<input type=\"radio\" name=\"bestand\" value=\"$v\" checked=\"checked\"/>$v<br/>\n ";
		}			
	else {
		echo "<input type=\"radio\" name=\"bestand\" value=\"$v\" />$v<br/>\n";	
		}
	echo "</li>";
	}
echo "</ul>";

?>
<input type="submit" value="OK"/>
</form>
</nav>

<section class = "inhoud">
<?php
include (__DIR__ .'/content/'.$geselecteerdBestand);
?>
</section>


</body>
</html>
