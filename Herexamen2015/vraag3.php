<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Vraag 3: examen 2014-2015</title>
</head>

<body>

<h1>Reservaties Keuken Cultuurcentrum</h1>
<?php
$beginuren = array("8u30", "9u00", "9u30", "13u00", "13u30", "14u00", "18u00", "18u30", "19u00");
$leden = array("K" => "KVLV", "KA" => "KAV", "O" => "OKRA", "C" => "CM", "V" => "De Voorzorg");

if (isset($_REQUEST["submit"])) {
    $grootte = $_REQUEST["grootte"];
    if (!($grootte == 8 || $grootte == 12 || $grootte == 16 || $grootte == 20)) {
        echo "De grootte van de groep mag enkel 8, 12, 16 of 20 zijn! ";
        echo "Klik op 'vorige' en vul een juiste grootte in.";
    } else {
        $lid = $leden[$_REQUEST["lidnummer"]];
        $duur = $_REQUEST["duur"];
        $tijdstip = $_REQUEST["uur"];
        $tijdstip = $beginuren[$tijdstip];
        ?>
        <h2>U heeft volgende reservatie gemaakt</h2>
        <p> Beste, je hebt voor volgende vereniging - <?php echo $lid ?> - volgende reservatie gemaakt:</p>
        <?php
        foreach ($_REQUEST['dag'] as $dag) {
            ?><p>dag <?php echo $dag ?><p>
            <?php
        }
        ?>
        <p>tijdstip <?php echo $tijdstip ?></p>
        <p>duur <?php echo $duur ?></p>
        <p>grootte <?php echo $grootte ?></p>


        <?php
    }
}
else
{
    ?>
    <header>
        <h2>Gelieve volgend formulier in te vullen</h2>
    </header>
    <form action="vraag3.php" method="post">
        <fieldset>
            <legend>Persoonsgegevens</legend>
            <label for="lidnummer">Geef lidnummer in</label>
            <input id="lidnummer" name="lidnummer" type="text"/>
        </fieldset>
        <fieldset>
            <legend>Reservaties</legend>
            <label for="dagen">Wanneer wil je een keuken reserveren?</label>
            <input type="checkbox" id="maandag" name="dag[]" value="ma">ma
            <input type="checkbox" id="dinsdag" name="dag[]" value="di">di
            <input type="checkbox" id="woensdag" name="dag[]" value="wo">wo
            <input type="checkbox" id="donderdag" name="dag[]" value="do">do
            <input type="checkbox" id="vrijdag" name="dag[]" value="vr">vr
            <input type="checkbox" id="zaterdag" name="dag[]" value="za">za
            <input type="checkbox" id="zondag" name="dag[]" value="zo">zo
            <br/>
            <label for="uur">Hoe laat begint de les?</label>
            <input type="radio" name="uur" value="0"><?php echo $beginuren[0] ?>
            <input type="radio" name="uur" value="1"><?php echo $beginuren[1] ?>
            <input type="radio" name="uur" value="2"><?php echo $beginuren[2] ?>
            <input type="radio" name="uur" value="3"><?php echo $beginuren[3] ?>
            <input type="radio" name="uur" value="4"><?php echo $beginuren[4] ?>
            <input type="radio" name="uur" value="5"><?php echo $beginuren[5] ?>
            <input type="radio" name="uur" value="6"><?php echo $beginuren[6] ?>
            <input type="radio" name="uur" value="7"><?php echo $beginuren[7] ?>
            <input type="radio" name="uur" value="8"><?php echo $beginuren[8] ?>
            <br/>
            <label for="duur">Hoe lang duurt de les?</label>
            <select id="duur" name="duur">
                <option name="1u">1u</option>
                <option name="1,5u">1,5u</option>
                <option name="2u">2u</option>
                <option name="2,5u">2,5u</option>
                <option name="3u">3u</option>
                <option name="4u">4u</option>
            </select>
            <br/>
            <label for="grootte">Geef lidnummer in</label>
            <input id="grootte" name="grootte" type="number"/>
        </fieldset>
        <input type="submit" value="reserveer" name="submit"/>
    </form>
    <?php
}
?>
</body>
</html>