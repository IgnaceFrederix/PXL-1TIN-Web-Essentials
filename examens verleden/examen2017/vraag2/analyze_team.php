<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if (isset($_REQUEST["tName"]) && isset($_REQUEST["oNum"]) && isset($_REQUEST["members"])) {
  var_dump($_POST);
} else {
    echo "Did you forget some input?";
}
?>
</body>
</html>