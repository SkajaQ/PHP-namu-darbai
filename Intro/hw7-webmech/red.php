<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<?php
if (isset($_GET['need_redirect'])) {
    header('Location: http://localhost:3000/intro/hw7-webmech/blue.php');
    die;
}
?> 

<body style = "background-color:red">

<a href="/intro/hw7-web_mechanics.php">Back to WebMechanics</a>
<br/>
<a style = "color:black" href="?need_redirect">LINKAS</a>
<br/>
</body>
