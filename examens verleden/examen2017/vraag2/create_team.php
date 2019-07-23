<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php
        echo $title;
        ?></title>
    <link href="stijl/stijl.css" rel="stylesheet"/>
</head>
<body>
<?php
if (isset($_REQUEST['members']) && is_numeric($_REQUEST["members"]) && ($_REQUEST["members"] > 1 || $_REQUEST["members"] < 12)) {
    $number_of_members = $_GET['members'];
    $title = "Create a team with " . $number_of_members . "Members";
    session_start();
    setcookie('Team', 'PXL');
    ?>
    <h1>Team and Game Values</h1>
    <form method="post" action="analyze_team.php">
        <input type="hidden" name="members" value="<?php echo $number_of_members ?>">
        <fieldset>
            <legend>Team Information</legend>
            <label for="tName">Team name:</label>
            <input type="text" id="tName" name="tName" value="<?php echo $_COOKIE['Team'] ?>">
        </fieldset>
        <fieldset>
            <legend>Members</legend>
            <?php
            for ($x = 1; $x <= $number_of_members; $x++) {
                echo "<fieldset>
                <legend>Member " . $x . "</legend>
                <label for=\"mFunc\">Member " . $x . "</label>
                <select id=\"mFunc\" name=\"mFunc" . $x . "\">
                    <option name=\"breacher\">Breacher</option>
                    <option name=\"1,5u\">Leader</option>
                    <option name=\"2u\">Assaulter</option>
                    <option name=\"2,5u\">Sniper</option>
                </select>
                <label for=\"mFunc\">Weapon " . $x . "</label>
                <select id=\"mWeap\" name=\"mWeap" . $x . "\">
                    <option name=\"Mini Door Ram\">Mini Door Ram</option>
                    <option name=\"MP5\">MP5</option>
                    <option name=\"AR15\">AR15</option>
                    <option name=\"M24 SWS\">M24 SWS</option>
                </select>
            </fieldset>";
            }
            ?>
        </fieldset>
            <fieldset>
                <legend>Operation Information</legend>
                <label for="oNum">Number of opponents</label>
                <input type="text" id="oNum" name="oNum">
            </fieldset>
        <input type="submit" name="submit" value="Analyse Team">
    </form>

<?php } else if (!(isset($_REQUEST['members']) && is_numeric($_REQUEST["members"]))) {
    $title = "Unable to create team!";
    echo "<h1>Error: you can't create a team without providing the number of members.</h1>";
} else
    if (!($_REQUEST["members"] > 1 || $_REQUEST["members"] < 12)) {
        $title = "Unable to create team!";
        echo "<h1>Error: you can't create a team with the provided number of members.</h1>";
    } ?>
</body>
</html>