<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Vraag 3: examen 2014-2015</title>
</head>

<body>

<h1>Reservaties Fitnessclub</h1>
<?php
$uren = array("10u-11u", "11u-12u", "12u-13u", "13u-14u", "14u-15u", "15u-16u", "16u-17u", "17u-18u");
$leden = array(14203 => "Jonas Geebelen", 13897 => "Iris Berben", 12356 => "Joris Goris");

if (isset($_REQUEST["submit"])) {
    $lid = $leden[$_REQUEST["lidnummer"]];
    $plein = $_REQUEST["sport"];
    $tijdstip = $_REQUEST["uur"];
    $tijdstip = $uren[$tijdstip];
    ?>
    <h2>U heeft volgende reservatie gemaakt</h2>
    <p> Beste <?php echo $lid ?> je hebt volgende reservatie gemaakt:</p>
    <?php
    foreach($_REQUEST['dag'] as $dag) {
        ?><p>dag: <?php echo $dag?><p>
        <?php
    }
    ?>
    <p>plein: <?php echo $plein?></p>
    <p>tijdstip: <?php echo $tijdstip?></p>

    <?php
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
            <label for="dagen">Wanneer wil je sporten?</label>
            <input type="checkbox" id="maandag" name="dag[]" value="ma">ma
            <input type="checkbox" id="dinsdag" name="dag[]" value="di">di
            <input type="checkbox" id="woensdag" name="dag[]" value="wo">wo
            <input type="checkbox" id="donderdag" name="dag[]" value="do">do
            <input type="checkbox" id="vrijdag" name="dag[]" value="vr">vr
            <input type="checkbox" id="zaterdag" name="dag[]" value="za">za
            <input type="checkbox" id="zondag" name="dag[]" value="zo">zo
            <br/>
            <label for="sport">Welk plein wil je reserveren?</label>
            <select id="sport" name="sport">
                <option name="voetbal">voetbal</option>
                <option name="volleybal">volleybal</option>
                <option name="squash">squash</option>
                <option name="badminton">badminton</option>
                <option name="danszaal">danszaal</option>
                <option name="tennis">tennis</option>
            </select>
            <br/>
            <label for="uur">Hoe laat wil je spelen</label>
            <input type="radio" name="uur" value="0"><?php echo $uren[0] ?>
            <input type="radio" name="uur" value="1"><?php echo $uren[1] ?>
            <input type="radio" name="uur" value="2"><?php echo $uren[2] ?>
            <input type="radio" name="uur" value="3"><?php echo $uren[3] ?>
            <input type="radio" name="uur" value="4"><?php echo $uren[4] ?>
            <input type="radio" name="uur" value="5"><?php echo $uren[5] ?>
            <input type="radio" name="uur" value="6"><?php echo $uren[6] ?>
            <input type="radio" name="uur" value="7"><?php echo $uren[7] ?>
        </fieldset>
        <input type="submit" value="ok" name="submit"/>
    </form>
    <?php
}
?>
</body>
</html>