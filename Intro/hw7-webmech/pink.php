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
<form action="http://localhost:3000/intro/hw7-webmech/rose.php" method="POST">
<input type="text" name="color" value="<?= $_POST['color'] ?? '' ?>"><br>
<button type="submit" name="submitform">Go to Rose</button>
</form>
