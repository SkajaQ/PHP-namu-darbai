<h1>5. HOMEWORK - ARRAYS II</h1>

<a href="index.php">Back to main</a>
<br/>
<br/>
<br/>
<?php 
echo "1 uzduotis: "; 
echo "<br/>";
echo "Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 


$arrayOfArrays = []; 
$array = [];
for ($i = 0; $i < 5; $i++) {
    $number = rand(5, 25);
    array_push($array, $number);
}
for ($i = 0; $i < 10; $i++) {
    array_push($arrayOfArrays, $array);
}
var_dump($arrayOfArrays); 
echo "<br/>";

echo "<br/>=======================================<br/>";
echo "<br/>";


echo "2 uzduotis: "; 
echo "<br/>";
echo "Naudodamiesi 1 uždavinio masyvu:
<br/> a) Suskaičiuokite kiek masyve yra elementų didesnių už 10;
<br/> b) Raskite didžiausio elemento reikšmę;
<br/> c) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
<br/> d) Visus masyvus “pailginkite” iki 7 elementų
<br/> e) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$biggest = max($array);

echo "<br/>=======================================<br/>";
echo "<br/>";


echo "3 uzduotis: "; 
echo "<br/>";
echo "Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. 
Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$variable = 0;
echo "Result: $variable";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "4 uzduotis: "; 
echo "<br/>";
echo "Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$variable = 0;
echo "Result: $variable";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "5 uzduotis: "; 
echo "<br/>";
echo "Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id
 atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$variable = 0;
echo "Result: $variable";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "6 uzduotis: "; 
echo "<br/>";
echo "Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$variable = 0;
echo "Result: $variable";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "7 uzduotis: "; 
echo "<br/>";
echo "Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. 
Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15..";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$variable = 0;
echo "Result: $variable";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "8 uzduotis: "; 
echo "<br/>";
echo "Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5. 
Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite. 
Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$variable = 0;
echo "Result: $variable";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "9 uzduotis: "; 
echo "<br/>";
echo "Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, 
kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$variable = 0;
echo "Result: $variable";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "10 uzduotis: "; 
echo "<br/>";
echo "Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. 
Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. 
Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. 
Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva color.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$variable = 0;
echo "Result: $variable";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "11 uzduotis: "; 
echo "<br/>";
echo "Duotas kodas, generuojantis masyvą: (kode komentare)";
echo '<br/> <br/> Reikia apskaičiuoti kiek buvo $sk1 ir $sk2 naudojantis matematika.';
echo "<br/> NEGALIMA! naudoti jokių palyginimo operatorių (if-else, swich, ()?:)
<br/> NEGALIMA! naudoti jokių regex ir string funkcijų.
<br/> GALIMA naudotis tik aritmetiniais veiksmais ir matematinėmis funkcijomis iš skyrelio: https://www.php.net/manual/en/ref.math.php
<br/>
<br/> Jeigu reikia, kodo patogumui galima panaudoti įvairias funkcijas, bet sprendimo pagrindas turi būti matematinis.
<br/>
<br/> Atsakymą reikia pateikti formatu:";
echo '<br/><i>  echo \'&lt;h3&gt;Skaičius 789 yra pakartotas \'.$sk1.\' kartų, o skaičius 123 - \'.$sk2.\' kartų.&lt;/h3&gt;</id>';
echo '<br/>
<br/> Kur rudi skaičiai yra pakeisti skaičiais $a ir $b generuojamais kodo.';
echo '<br/><i> echo "&lt;br/&gt;";</i>';
echo "<br/>.......................................";
echo "<br/>"; 
/*
do {
    $a = rand(0, 1000);
    $b = rand(0, 1000);
} while ($a == $b);
$long = rand(10,30);
$sk1 = $sk2 = 0;
echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
$c = [];
for ($i=0; $i<$long; $i++) {
    $c[] = array_rand(array_flip([$a, $b]));
}
echo '<h4>Masyvas:</h4>';
echo '<pre>';
print_r($c);
echo '</pre>';
*/
$variable = 0;
echo "Result: $variable";
echo "<br/>=======================================<br/>";
echo "<br/>";
?>
