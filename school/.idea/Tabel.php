<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title></title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />
  <meta name="viewport" content="width=device-width; initial-scale=1.0" />
</head>
<body>
<table border="1">
    <?php
    $groote = 5;

    for ($i = 1; $i <= $groote ; $i++) {
        echo"<tr>";
        for ($j = 1; $j <= $groote ; $j++) {
            $totaal = $i * $j;
            echo"<td>$i * $j = $totaal</td>";
        }
        echo"</tr>";
    }
    ?>
</table>
</body>
</html>