<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<form action="" method="GET">
<input type="text" name="color" value="<?= $_GET['color'] ?? '' ?>"><br>
<button type="submit">Zaliai</button>
</form>
<br>
<form action="" method="POST">
<input type="text" name="color" value="<?= $_POST['color'] ?? '' ?>"><br>
<button type="submit">Geltonai</button>
</form>

<?php
$backcol = "white";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $backcol = "yellow";
    header('Location: http://localhost:3000/intro/hw7-webmech/7-postGet.php');
    die;
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $backcol = "green";
}
echo "<body style = 'background-color: $backcol'>";


?>

<body>
</body>


</html>