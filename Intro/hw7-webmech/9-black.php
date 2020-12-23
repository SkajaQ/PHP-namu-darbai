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
<button type="submit" name="submitform">Skaiciuoti</button>
<?php
$checkBox = rand(3, 10);
$array = range('A','Z');
for ($i = 0; $i < $checkBox; $i++) {
    echo '<input type="checkbox" name="A" value="">';
    echo $array[$i];
}
?>
</form>

<?php
if (isset($_POST['submitform'])) {
    $backgroundColor = '#fff';
} else {
    $backgroundColor = '#000';
}

if(isset($_POST['submitform']))
{
    echo 'labas';
} else {
    echo 'iki';
    $formDisplay = 'block';
}
?>

<style>
body {
    background: <?= $backgroundColor ?>;
    color: #fff;
}
form {
    display: <?php 
        if (isset($_POST['submitform'])) {
            echo 'none';
        } else {
            echo 'block';
        }
        ?>;
}

</style>


</html>