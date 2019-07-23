<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title> vb11.php</title>
</head>
<body>
<body>
<p>

<?php 

for ($i = 0; $i < 10; $i++){
		${"var_$i" } =$i;
		}

for ($i = 0; $i < 10; $i++){
		echo ${"var_$i" }. "<br/>\n" ;
		}

echo $var_5. "<br/>\n" ;
?>

</p>
</body>
</html>
