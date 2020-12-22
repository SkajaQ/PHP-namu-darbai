<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style = "background-color:pink">

<a href="/intro/hw7-web_mechanics.php">Back to WebMechanics</a>
<br/>
</body>

<br>
<form action="" method="POST">
<input type="text" name="color" value="<?= $_GET['color'] ?? '' ?>"><br>
<button type="submit">Go to Rose</button>
</form>

<?php



    // header('Location: http://localhost:3000/intro/hw7-webmech/orange.php');
    die;

?> 