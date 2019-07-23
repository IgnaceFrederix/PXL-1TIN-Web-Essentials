<?php
	if (isset($_COOKIE['maxSom'])) {
		print 'Hoogste waarde voor de som is: ' . $_COOKIE['maxSom'];
	} else {
		print 'Nog geen waarde bekend.';
	}
?>