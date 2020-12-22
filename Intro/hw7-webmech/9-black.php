<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
</body>

<form action="" method="POST">
<input type="text" name="color" value="<?= $_GET['color'] ?? '' ?>"><br>
<button type="submit">Skaiciuoti</button>
</form>

<?php
if (isset($_POST['color'])) {
    $backgroundColor = '#fff';
} else {
    $backgroundColor = '#000';
}

$checkBox = rand(3, 10);
for ($i = 0; $i < $checkBox; $i++) {
    echo '<input type="checkbox" name="c" value="">';
}
?>

<style>
body {
    background: <?= $backgroundColor ?>;
    color: #fff;
}
</style>


</html>