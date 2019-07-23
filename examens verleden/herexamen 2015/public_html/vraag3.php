<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Vraag 3: examen 2014-2015</title>
</head>

<body>
    <?php
    error_reporting(0);
    $beginuren = array("8u30","9u00","9u30","13u00","13u30","14u00","18u00","18u30","19u00");
    $leden = array("K" => "KVLV", "KA" => "KAV", "0" => "OKRA", "C" => "CM", "V" => "De Voorzorg");
    $lid = $_POST['nummerVereningingTextVeld'];
    $dag = $_POST['wanneer'];
    $tijdstip = $_POST['beginLes'];
    $duur = $_POST['duur'];
    $grootte = $_POST['groepGroote'];
        
        if(isset($_POST['Okbtn']))
        {
            echo '<h1>Reservaties Keuken Cultuurcentrum</h1><br />';
            echo '<h3>U heeft volgende reservatie gemaakt</h3><br />';
            echo 'Beste, je hebt voor volgende vereniging - ' . $leden[$lid] .' - volgende reservatie gemaakt: <br />';
            echo 'Dag ' . $dag . '<br />';
            echo 'tijdstip ' . $beginuren[$tijdstip] .'<br />';
            echo 'duur ' . $duur .'<br/>';
            echo 'grootte' . $grootte . '<br/>';
         }
        else{
    ?>
    
    <form action="vraag3.php" method="post">
        
        <h1>Reservatie Keuken Cultuurcentrum</h1>
           
        <h3>Gelieve volgend formulier in te vullen</h3>
        
        <fieldset>
            <legend>Algemene Gegevens</legend>
            <table>
                <tr>
                    <td> <label>Geef nummer vereniging in</label></td>
                    <td>    <input type="text" name="nummerVereningingTextVeld" value="" size="30" /></td>
                </tr>
            </table>
        </fieldset>
        
        <br />
        
        <fieldset>
            <legend>Reservaties</legend>
            <table>
                <tr>
                    <td><label>Wanneer wil je een keuken reserveren?</label></td>
                    <td> <input type="checkbox" name="wanneer" value="ma" /> ma</td>
                    <td> <input type="checkbox" name="wanneer" value="di" /> di</td>
                    <td> <input type="checkbox" name="wanneer" value="wo" /> wo</td>
                    <td> <input type="checkbox" name="wanneer" value="do" /> do</td>
                    <td> <input type="checkbox" name="wanneer" value="vr" /> vr</td>
                    <td> <input type="checkbox" name="wanneer" value="za" /> za</td>
                    <td> <input type="checkbox" name="wanneer" value="zo" /> zo</td>
                </tr>
                <tr>
                    <td>Hoe laat begint de les?</td>
                    <td><input type="radio" name="beginLes" value="0" /> 8u30</td>
                    <td><input type="radio" name="beginLes" value="1" /> 9u00</td>
                    <td><input type="radio" name="beginLes" value="2" /> 9u30</td>
                    <td><input type="radio" name="beginLes" value="3" />13u00</td>
                    <td><input type="radio" name="beginLes" value="4" />13u30</td>
                    <td><input type="radio" name="beginLes" value="5" />14u00</td>
                    <td><input type="radio" name="beginLes" value="6" />18u00</td>
                    <td><input type="radio" name="beginLes" value="7" />18u30</td>
                    <td><input type="radio" name="beginLes" value="8" />19u00</td>
                </tr>
            
                
                
                <tr>
                    <td>Hoe lang duurt de les?</td>
                    <td>
                        <select name="duur" id="duur">
                            <option value="1u">
                                1u
                            </option>
                            <option value="1,5u">
                                1,5u
                            </option>
                            <option value="2u">
                                2u
                            </option>
                            <option value="2,5u">
                                2,5u
                            </option>
                            <option value="3u">
                                3u
                            </option>
                            <option value="4u">
                                4u
                            </option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>Hoe groot is de groep</td>
                    <td><input type="text" name="groepGroote" value="" size="10" /></td>
                </tr>
            </table>
        </fieldset>
        <br />
        <input type="submit" value="ok" name="Okbtn"/>
    </form>    
<?php } ?>   
    
</body>
</html>