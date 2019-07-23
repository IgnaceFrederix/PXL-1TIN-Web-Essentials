<?php
session_start();	//zorgt ervoor dat je met $_SESSION['variabelenaam'] kan werken;

$_SESSION['aantal'] = $_GET['tekstvak']; //maakt een $_SESSION variabele aan met de naam 'aantal'
$aantal = $_SESSION['aantal'];
print '<form method="get" action="verwerk.php">';
for($i=0; $i < $aantal; $i++) {
	print '<label>getal ' . $i . '</label>' . " " . '<input type="text" name="getal'.$i.'"/>' . '<br />';
}
print '<button type="submit" name="knop">OK</button>';
print '</form>';

?>