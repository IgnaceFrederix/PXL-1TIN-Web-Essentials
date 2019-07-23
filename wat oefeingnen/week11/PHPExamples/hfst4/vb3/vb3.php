<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="./css/opmaak.css" />
	<title><?php echo basename(__FILE__);?></title>
</head>
<body>
<p>
<?php

$a = 1 + 2;  		// int (3)
// int + int		

$b = 3.1 * 4;		//float(12.4)
// float * int 			(float) 4 = 4.0

$c = $b + "a";		// float(12.4)
// float + string 		string wordt gecast naar float
//				(float)"a" = 0.0	

$d = "1.23aaz" * 12;	//float(14.76) 
// string * int			"1.23aaz" kan omgezet worden naar float
//				(float) "1.23aaz" = 1.23
//				(float) 12 =12.0

$e = true + 2.1;		// float(3.1)
// boolean + float		(float) true = 1.0

$f = 1/2;			// float(0.5)
// int / int			(float)	1 = 1.0
// 				(float)	2 = 2.0

$g = 3.99 % 1.1;		// int(3)
// float % float		(int)3.99 = 3
// 				(int) 1.1  = 1

$h = 1 / "12aa";		// float(0.0833333333333)
//  int / string		// (float) 1 =1.0
				// (float) "12aa" = 12.0

echo '$a:  ';
var_dump($a);
echo '<br/>$b  :';
var_dump($b);
echo '<br/>$c  :';
var_dump($c);
echo '<br/>$d  :';
var_dump($d);
echo '<br/>$e  :';
var_dump($e);
echo '<br/>$f  :';
var_dump($f);
echo '<br/>$g  :';
var_dump($g);
echo '<br/>$h  :';
var_dump($h);


?>
</p>
</body>
</html>
