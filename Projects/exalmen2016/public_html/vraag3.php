<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vraag 3: Examen 2015-2016</title>


    <style>

        label {
            width: 100px;
        }

        input[type=text] {
            width: 300px;;
        }


    </style>
</head>
<body>

<?php
    if(isset($_POST['bevestigNaam']))
    {
        echo "Welkomn,  " . $_POST['naam'] . "<br />";
        echo "Geef je voorkeur op<br />";
?>
        <form method="post" action="vraag3_verwerk.php">

            <input type="hidden" name="naam" id="naam" value="<?php echo $_POST['naam'];  ?>" />
            <input type="hidden" name="nWeken" id="nWeken" value="<?php echo $_POST['nWeken']; ?>" /></td>


            <fieldset>
                <legend>Weken</legend>
                <table>
<?php
    for($i = 1; $i <=  $_POST['nWeken']; $i++) {
        echo "<tr>";
        echo    "<td><label for='week$i'>Week$i:</label></td>";
        echo    "<td><input type='text' name='week$i' id='week$i'' /></td>";
        echo "</tr>";
    }
?>
                </table>
            </fieldset>

            <fieldset>
                <legend>Bevestig</legend>
                <input type="submit" id="bevestigWeek" name="bevestigWeek" value="ok" />
            </fieldset>
        </form>

<?php
    } else {
?>
        <form method="post">
            <fieldset>
                <legend>Gegevens</legend>
                <table>
                    <tr>
                        <td><label for="naam">Naam:</label></td>
                        <td><input type="text" name="naam" id="naam" /></td>
                    </tr>
                    <tr>
                        <td><label for="nWeken">Aantal weken:</label></td>
                        <td><input type="text" name="nWeken" id="nWeken" /></td>
                    </tr>
                </table>
            </fieldset>

            <fieldset>
                <legend>Bevestig</legend>
                <input type="submit" id="bevestigNaam" name="bevestigNaam" value="ok" />
            </fieldset>
        </form>
<?php
    }
?>
</body>
</html>