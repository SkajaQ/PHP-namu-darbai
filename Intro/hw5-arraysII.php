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
for ($i = 0; $i < 10; $i++) {
    $array = [];
    for ($j = 0; $j < 5; $j++) {
        $number = rand(5, 25);
        array_push($array, $number);
    }

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
<br/> e) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. 
T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$count = 0; 
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($arrayOfArrays[$i][$j] > 10) {
            $count++;
        }
    }
}

echo "a) Didesniu uz 10: $count"; 
echo "<br/>";

$biggest = 0;
for ($i = 0; $i <10; $i++) {
    $maxInArray = max($arrayOfArrays[$i]);
    if ($biggest < $maxInArray) {
        $biggest = $maxInArray;
    }
}
echo "b) Biggest $biggest";
echo "<br/>";

echo 'c) Sumos: ';
echo "<br/>";
for ($i = 0; $i < 5; $i++) {
    $sum = 0;
    for ($j = 0; $j < 10; $j++) {
        $sum += $arrayOfArrays[$j][$i];
    }
    echo $sum;
    echo "<br/>";
}
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 2; $j++) {
        $number = rand(5, 25);
        array_push($arrayOfArrays[$i], $number);
    }
}
echo "d) pailginti masyvai: ";
echo "<br/>";
var_dump($arrayOfArrays); 

$arrayOfSums = [];
for ($j = 0; $j < 10; $j++) {
    $sum = array_sum($arrayOfArrays[$j]);
    array_push($arrayOfSums, $sum);
}
echo "<br/>";
echo "e) array of sums: ";
echo "<br/>";
var_dump($arrayOfSums);

echo "<br/>=======================================<br/>";
echo "<br/>";


echo "3 uzduotis: "; 
echo "<br/>";
echo "Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. 
Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$arrayOfArrays = []; 
$array = [];
$characters = strtoupper('abcdefghijklmnopqrstuvwxyz');
$charactersLength = strlen($characters);


for ($i = 0; $i < 10; $i++) {
    $array = [];
    $kiekis = rand(2, 20);
    for ($j = 0; $j < $kiekis; $j++) {
        array_push($array, $characters[rand(0, $charactersLength - 1)]);
    }
    array_push($arrayOfArrays, $array);
}
var_dump($arrayOfArrays); 
echo "<br/>";


for ($i = 0; $i < 10; $i++) {
    sort($arrayOfArrays[$i]);
}

var_dump($arrayOfArrays); 
echo "<br/>";

echo "<br/>=======================================<br/>";
echo "<br/>";


echo "4 uzduotis: "; 
echo "<br/>";
echo "Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

sort($arrayOfArrays);
var_dump($arrayOfArrays);

echo "<br/>=======================================<br/>";
echo "<br/>";


echo "5 uzduotis: "; 
echo "<br/>";
echo "Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id
 atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 


$array5 = [];
$uniqueIds = [];

for ($i = 0; $i < 30; $i++) {
    $userId = rand(1, 1000000);
    while (in_array($userId, $uniqueIds)) {
        $userId = rand(1, 1000000);
    }
    $uniqueIds[] = $userId;
    $tempArray = ["user_id" => $userId, "place_in_row" => rand(0, 100)];
    $array5[] = $tempArray;
}

var_dump($array5); 
echo "<br/>";


echo "<br/>";

echo "<br/>=======================================<br/>";
echo "<br/>";


echo "6 uzduotis: "; 
echo "<br/>";
echo "Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$array7 = $array5;
$array6 = $array5;
array_multisort($array5);
var_dump($array5);
echo "<br/>";

function cmp($arrA, $arrB)
{
    $a = $arrA["place_in_row"];
    $b = $arrB["place_in_row"];
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? 1 : -1;
}
usort($array6, "cmp");

echo "<br/>";
var_dump($array6);

echo "<br/>=======================================<br/>";
echo "<br/>";


echo "7 uzduotis: "; 
echo "<br/>";
echo "Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. 
Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15..";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

for ($i = 0; $i < 30; $i++) {
    $nameLength = rand(5, 15);
    $surnameLength = rand(5, 15);

    $name = '';
    for ($j = 0; $j < $nameLength; $j++) {
        $name = $name.$characters[rand(0, $charactersLength - 1)];
    }

    $surname = '';
    for ($j = 0; $j < $surnameLength; $j++) {
        $surname = $surname.$characters[rand(0, $charactersLength - 1)];
    }
    $array7[$i]["name"] = $name;
    $array7[$i]["surname"] = $surname;
}

var_dump($array7);

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

$arrayOfArrays = []; 
for ($i = 0; $i < 10; $i++) {
    $array = [];
    $arrLength = rand(0,5);
    for ($j = 0; $j < $arrLength; $j++) {
        $number = rand(0, 10);
        array_push($array, $number);        
    }
    if ($arrLength === 0) {
        array_push($arrayOfArrays, $number);
    } else {
    array_push($arrayOfArrays, $array);
    }
}   
var_dump($arrayOfArrays); 
echo "<br/>";


echo "<br/>=======================================<br/>";
echo "<br/>";


echo "9 uzduotis: "; 
echo "<br/>";
echo "Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, 
kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$absoluteSum = 0;
$arrayOfSums = [];
for ($j = 0; $j < 10; $j++) {    
    if (is_array($arrayOfArrays[$j])) {
        $absoluteSum += array_sum($arrayOfArrays[$j]);
    } else {
        $absoluteSum += $arrayOfArrays[$j];
    }
}
echo $absoluteSum;
echo "<br/>";


function compareElOrArr($objA, $objB)
{
    $a = is_array($objA) ? array_sum($objA) : $objA;
    $b = is_array($objB) ? array_sum($objB) : $objB;
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}
usort($arrayOfArrays, "compareElOrArr");
var_dump($arrayOfArrays);
echo "<br/>";

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

$parentArray = [];
$symbols = ('#%+*@裡');


function generateHex () {
    $hexSym = ('abcdef0123456789');
    $symLength = strlen($hexSym);
    $hex = '';
    for ($i = 0; $i < 6; $i++) {
        $hex .= rand(0, $hexSym[$symLength - 1]);
    }
    $hexNew = '#'.$hex;
    return $hexNew;
}

for ($i = 0; $i < 10; $i++) {
    $arrayOfArrays = []; 
    for ($j = 0; $j < 10; $j++) {
        $array = [];
        array_push($arrayOfArrays, ["value" => $symbols[rand(0, 5)], "color" => generateHex()]);     
    }
    array_push($parentArray, $arrayOfArrays);
}   
var_dump($parentArray); 
echo "<br/>";

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $color = $parentArray[$i][$j]['color'];
        $value = $parentArray[$i][$j]['value'];

        echo "<span style= 'color: $color; padding: 5px'>$value</span>";

    }
    echo "<br/>";

}



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

$sum = array_sum($c);
$div = $b - $a;
$up = $sum - ($a*$long);

$sk2 = $up / $div;
$sk1 = $long - $sk2;
echo "<h3>Skaičius $a yra pakartotas $sk1 kartų, o skaičius $b - $sk2 kartų.</h3>";
echo "<br/>=======================================<br/>";
echo "<br/>";
?>
