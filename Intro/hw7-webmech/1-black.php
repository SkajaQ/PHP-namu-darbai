<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

$backcol = "black";
if ($_GET) {
    $backcol = "red";
}

echo "<body style = 'background-color: $backcol'>";
    echo "<a style='color: white' href=\"/intro/hw7-webmech/1-black.php\">black</a><br/>";
    echo "<a style='color: white' href=\"/intro/hw7-webmech/1-black.php/?color=1\">red</a><br/>";
echo "</body>";

?>

</html>