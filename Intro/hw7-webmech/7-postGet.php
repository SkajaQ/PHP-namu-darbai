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
<input type="text" name="color" value="<?= $_GET['color'] ?? '' ?>"><br>
<button type="submit">Geltonai</button>
</form>

<?php
$backcol = "white";
if (isset($_GET['color'])) {
    $backcol = "green";
    echo "<body style = 'background-color: $backcol'>";
} else if (isset($_POST['color'])) {
    $backcol = "yellow";
    echo "<body style = 'background-color: $backcol'>";
}
?>

<body>
    
</body>



</html>