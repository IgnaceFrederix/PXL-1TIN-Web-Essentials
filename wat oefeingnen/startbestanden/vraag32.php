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
session_start();

$naam = $_SESSION['naam'];
$weken = $_SESSION["weeksaantal"];
?>


</body>
</html>