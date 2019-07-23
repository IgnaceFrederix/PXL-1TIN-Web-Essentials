<?php 
echo "functies.php<br/>\n";
include (__DIR__ ."/constantes.php");

function omtrek($straal){
		return 2*PI*$straal;
}

function oppervlak($straal){
		return PI*pow ($straal, 2);
}
?>
