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
}

echo "<body style = 'background-color: #$backcol'>";
    echo "<a style='color: white' href=\"/intro/hw7-webmech/3-color.php\">black</a><br/>";
echo "</body>";


?>

<form action="" method="GET">

<input type="text" name="color" value="<?= $_GET['color'] ?? '' ?>"><br>

<button type="submit">Eiti</button>

</form>

</html>
<?php

if (!empty($_POST)) {

header('Location: http://localhost:3000/intro/hw7-webmech/3-color.php/?color='.$_GET['color']);
die;
}



