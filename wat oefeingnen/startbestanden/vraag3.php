<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo basename(__FILE__);?></title>
    <style>
        .naambox{
            width: 300px;
            float:left;
            margin-bottom:10px;
        }
        .naam{
            clear:both;
            width:100px;
            display:block;
            float:left;
            margin-bottom:10px;
        }
        #wekenbox{
            width:80px;
            float:left;
            margin-bottom:10px;
        }
    </style>
</head>
<body>

    <?php
    if(isset($_POST['submit'])){
        $naam =$_POST['naam'];
        $weken = $_POST['weeksaantal'];
        ?>
    <form action="_verwerk.php" method="post">
    <h4>Welkom, <?php echo $naam ?></h4>
    <p>Geef je voorkeur op:</p><br>
    <input type="hidden" value="<?php echo $naam; ?>" name="naam2"/>
    <input type="hidden" value="<?php echo $weken; ?>" name="weken"/>
    <fieldset>
        <legend>Weken</legend>
        <?php
        for ($x = 1; $x <= $weken; $x++) {
            ?> <label class="naam" for="weken">week <?php echo $x ?> </label>
            <input type="text" class="naambox" name="week <?php echo $x ?>">

            <?php
        }

        ?>
    </fieldset>
    <fieldset>
        <legend>Bevestig</legend>
        <input type="submit" value="ok" name="submit2" id="buton2">
    </fieldset>
    </form>
    <?php
    }else{
    ?>

<form action="vraag3.php" method="post">
    <fieldset>
        <legend>Gegevens</legend>
        <label class="naam" for="naam">Naam:</label>
        <input type="text" name="naam" class="naambox" value=""/><br>
        <label class="naam" for="wekenbox">Aantal weken:</label>
        <input type="text" name="weeksaantal" value=""/>
    </fieldset>
    <fieldset>
        <legend>Bevestig</legend>
        <input type="submit" name="submit" value="ok"/>
    </fieldset>
</form>
<?php
}
?>
</body>
</html>