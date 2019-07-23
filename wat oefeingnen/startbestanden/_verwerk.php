
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo basename(__FILE__);?></title>
    <head>

    </head>
    <body>

<?php

$weken = $_POST["weken"];
$naam = $_POST["naam"];
?>
<h4>Welkom, <?php $naam ?></h4>
<p>Je selecteerde <?php $weken ?> weken:</p><br>
<?php
echo "<ul>\n";
foreach ($_GET as $k => $v) {
    if ($k == "submit2"|| $k == $weken || $k == $naam) {

    } else {
        echo "<li>$v</li>\n";
    }

}
echo "</ul>\n";
?>
</body>
</html>