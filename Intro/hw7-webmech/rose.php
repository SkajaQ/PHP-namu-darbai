<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style = "background-color:#FF007F">

<a href="/intro/hw7-web_mechanics.php">Back to WebMechanics</a>
<br/>
</body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

} else {
    header('Location: http://localhost:3000/intro/hw7-webmech/pink.php');
    die;
}
?> 