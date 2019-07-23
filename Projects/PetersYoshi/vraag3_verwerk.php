<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vraag 3 verwerk: Examen 2015-2016</title>
</head>
<body>

<?php
    echo "Beste,  " . $_POST['naam'] . ",<br /><br />";
    echo "Je selecteerde " . $_POST['nWeken'] . " weken<br />";
    echo "<ul>";

        for($i = 1; $i <=  $_POST['nWeken']; $i++) {
            echo' <li>' . $_POST["week$i"] . "</li>";
        }

    echo "</ul>";
?>
</body>
</html>