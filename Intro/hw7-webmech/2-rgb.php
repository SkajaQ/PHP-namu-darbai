<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

$backcol = "000000";
if ($_GET) {
    $backcol = htmlspecialchars($_GET["color"]);
    echo "$backcol";
}

echo "<body style = 'background-color: #$backcol'>";
    echo "<a style='color: white' href=\"/intro/hw7-webmech/2-rgb.php\">black</a><br/>";
echo "</body>";

?>

</html>
