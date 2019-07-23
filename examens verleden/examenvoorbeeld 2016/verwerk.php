<?php
 	session_start(); //zorgt dat je met de $SESSION['variabelenaam'] van vorige php pagina kunnen werken
	
	$aantal = $_SESSION['aantal'];
	for ($i = 0; $i < $aantal; $i++){
		global $som;
		$som += $_GET['getal'.$i];
	}

	if (isset($_COOKIE['maxSom'])) {
		if ($_COOKIE['maxSom'] < $som) {
			setcookie('maxSom', $som, time()+(60 * 60 * 24));
		} 
	}else {
			setcookie('maxSom', $som, time()+(60 * 60 * 24));
	}
	print 'De som is ' . $som . '</br>';
	print '<a href="cookie.php">toonCookie</a>"'
?>