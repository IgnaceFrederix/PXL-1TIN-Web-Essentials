<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Platform eXtreme Leadership</title>
    <link href="stijl/stijl.css" rel="stylesheet"/>
</head>
<body>
<header>
    <h1>Counter Terrorism Team Planner</h1>
    <h2>Terrorism is a significant threat to peace and security, prosperity and people.</h2>
    <nav>
        <ul>
            <?php
            define('last', 10);
            for ($x = 1; $x <= last; $x++) {
                if($x != last){
                echo "<li><a href=\"create_team.php?members=" . $x . "\">Create a team consisting out of $x members</a></li>";
                } else{
                    echo "<li><a href=\"create_team.php?members=" . last . "\">Create a team consisting out of " . last . " members</a></li>";
                }
            }
            ?>

        </ul>
    </nav>
</header>
</body>
</html>