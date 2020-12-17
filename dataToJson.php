<!-- PHP TO JS (JSON) -->

<?php

$array = ['user'=>'blabla','email'=>'vard@pavard.lt','age'=>50];

$json = json_encode($array);

print_r($json);

?>

<script>

const json = <?php echo $json;?>;

console.log(json);

</script>