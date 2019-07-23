<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Vraag 3: examen 2014-2015</title>
        <style type="text/css">
            body {
                width: 1000px;
            }
            td label {
                margin: 0px 0px 0px 0px;
            }
            
            
            #resultTable tr td {
                padding-right: 150px;
            }
            
            #inputTable tr td {
                width: 0px;
            }
            
            .firstTD {
                padding-right: 50px;
            }
            
            #lidNummerLabel {
                padding-right: 120px;
            }
            
            
        </style>
    </head>
    <body>
        <?php
        if (isset($_REQUEST["verzendKnop"])) {
            $uren = array("10u-11u", "11u-12u", "12u-13u", "13u-14u", "14u-15u", "15u-16u",
                "16u-17u", "17u-18u");
            $leden = array(14203 => "Jonas Geebelen", 13897 => "Iris Berben", 12356 => "Joris Goris");
            $lidNr = $_POST['ldnrText'];
            $dagSporten = $_POST['dagCheckBox'];
            $plein = $_POST['pleinSelect'];
            $tijd = array($_POST['uurRadioButton']);
            $naam = "niet gevonden";

            foreach ($leden as $key => $val) {
                if ($lidNr == $key) {
                    $naam = $val;
                }
            }
            ?>
            <header>
                <h1>Reservaties</h1>
                <h2>U heeft volgende reservatie gemaakt</h2>
            </header>
            <div>
                <p>Beste <?php echo $naam ?> 
                    je hebt volgende reservatie gemaakt:
                </p>
            </div>
        <table id="resultTable">
            <tr>
                <td>dag</td>
                <td><?php echo $dagSporten ?></td>
            </tr>
            <tr>
                <td>plein</td>
                <td><?php echo $plein ?></td>
            </tr>
            <tr>
                <td>tijdsstip</td>
                <td><?php 
                foreach ($tijd as $key => $val){
                    echo $val;
                } ?></td>
            </tr>
        </table>

    <?php
} else {
    ?>
            <header>
                <h1>Reservaties Fitnessclub</h1>
                <h2>Gelieve volgend formulier in te vullen</h2>
            </header>
        <form action="vraag3.php" method="POST">
                <fieldset>
                    <legend>Persoonsgegevens</legend>
                    <label id="lidNummerLabel">Geef lidnummer in</label>
                    <input type="text" name="ldnrText" id="ldnrText">
                </fieldset>

                <fieldset>
                    <legend>Persoonsgegevens</legend>

                    <table id="inputTable">
                        <tr>
                            <td class="firstTD" >Wanneer wil je sporten</td>
                            <td><input type="checkbox" name="dagCheckBox" id="dagCheckBox" value="ma"></td>
                            <td><label for="dagCheckBox">ma</label></td>

                            <td><input type="checkbox" name="dagCheckBox" id="dagCheckBox" value="di"></td>
                            <td><label for="dagCheckBox">di</label></td>

                            <td><input type="checkbox" name="dagCheckBox" id="dagCheckBox" value="wo"></td>
                            <td><label for="dagCheckBox">wo</label></td>

                            <td><input type="checkbox" name="dagCheckBox" id="dagCheckBox" value="do"></td>
                            <td><label for="dagCheckBox">do</label></td>

                            <td><input type="checkbox" name="dagCheckBox" id="dagCheckBox" value="vr"></td>
                            <td><label for="dagCheckBox">vr</label></td>

                            <td><input type="checkbox" name="dagCheckBox" id="dagCheckBox" value="za"></td>
                            <td><label for="dagCheckBox">za</label></td>

                            <td><input type="checkbox" name="dagCheckBox" id="dagCheckBox" value="zo"></td>
                            <td><label for="dagCheckBox">zo</label></td>

                        </tr>
                        <tr>
                            <td><label class="firstTD">Welk plein wil je reserveren?</label></td>
                            <td colspan="5">
                                <select name="pleinSelect">
                                    <option value="voetbal">voetbal</option>
                                    <option value="voetbal">volleybal</option>
                                    <option value="voetbal">squash</option>
                                    <option value="voetbal">badminton</option>
                                    <option value="voetbal">danszaal</option>
                                    <option value="voetbal">tennis</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td id="firstTD"><label>Hoe laat wil je spelen</label></td>
                            <td><input type="radio" name="uurRadioButton" id="uurRadioButton" value="10-11u"></td>
                            <td><label for="uurRadioButton">10u-11u</label></td>
                            <td><input type="radio" name="uurRadioButton" id="uurRadioButton" value="10-11u"></td>
                            <td><label for="uurRadioButton">11u-12u</label></td>
                            <td><input type="radio" name="uurRadioButton" id="uurRadioButton" value="11u-12u"></td>
                            <td><label for="uurRadioButton">12u-13u</label></td>
                            <td><input type="radio" name="uurRadioButton" id="uurRadioButton" value="12u-13u"></td>
                            <td><label for="uurRadioButton">13u-14u</label></td>
                            <td><input type="radio" name="uurRadioButton" id="uurRadioButton" value="13u-14u"></td>
                            <td><label for="uurRadioButton">14u-15u</label></td>
                            <td><input type="radio" name="uurRadioButton" id="uurRadioButton" value="14u-15u"></td>
                            <td><label for="uurRadioButton">15u-16u</label></td>
                            <td><input type="radio" name="uurRadioButton" id="uurRadioButton" value="15u-16u"></td>
                            <td><label for="uurRadioButton">16u-17u</label></td>
                            <td><input type="radio" name="uurRadioButton" id="uurRadioButton" value="16u-17u"></td>
                            <td><label for="uurRadioButton">17u-18u</label></td>

                        </tr>
                    </table>
                </fieldset>
                <input type="submit" value="ok" name="verzendKnop">
            </form>
        </body>
    <?php
}
?>
</html>
