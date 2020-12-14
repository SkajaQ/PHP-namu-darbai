<h1>4. HOMEWORK - ARRAYS</h1>

<a href="index.php">Back to main</a>
<br/>
<br/>
<br/>
<?php 
echo "1 uzduotis: "; 
echo "<br/>";
echo "Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$array = []; 
for ($i = 0; $i < 30; $i++) {
    $number = rand(5, 25);
    array_push($array, $number);
}
var_dump($array); 
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "2 uzduotis: "; 
echo "<br/>";
echo "Naudodamiesi 1 uždavinio masyvu: ";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$didesniUzDesimt = 0;
foreach ($array as &$value) {
    if ($value > 10) {
        $didesniUzDesimt++;
    }
}
echo "<br/> a) Masyve yra reikšmių didesnių už 10: $didesniUzDesimt";
$biggest = max($array);
echo "<br/> b) Didžiausia masyvo reikšme: $biggest";
$sum = array_sum($array);
echo "<br/> c) Suma: $sum";

$array2 = []; 
for ($i = 0; $i < 30; $i++) {
    array_push($array2, $array[$i] - $i);
}
echo "<br/> d) Minus indeksas ";
var_dump($array2);

for ($i = 0; $i < 10; $i++) {
    array_push($array, rand(5, 25));
}
echo "<br/> e) Papildomi 10 elementu: ";
var_dump($array);

$arrayEven = [];
$arrayOdd = [];

for ($i = 0; $i < 40; $i++) {
    if ($i % 2 === 0) {
        array_push($arrayEven, $array[$i]);
    } else {
        array_push($arrayOdd, $array[$i]);
    }
}
echo "<br/> f) Du nauji masyvai: ";

var_dump($arrayEven);
echo "<br/>";
var_dump($arrayOdd);
echo "<br/>";

foreach ($arrayEven as &$value) {
    if ($value > 15) {
        $value = 0;
    }
}
echo "g) Pakeisti i 0: ";
var_dump($arrayEven);
echo "<br/>";

$indeksas = 0;

for ($i = 0; $i < 40; $i++) {
    if ($array[$i] > 10) {
        $indeksas = $i;
    }
}

echo "h) Pirmas didesnis uz 10: $i";
echo "<br/>";

for ($i = 0; $i < 40; $i++) {
    if ($i % 2 === 0) {
        unset($array[$i]);
    }
}
echo "i) Be poriniu: ";
var_dump($array);
echo "<br/>";


echo "<br/>=======================================<br/>";
echo "<br/>";



echo "3 uzduotis: "; 
echo "<br/>";
echo "Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$input = array("A", "B", "C", "D");
$arrayNew = [];
$output = array(0, 0, 0, 0);


for ($i = 0; $i <200; $i++){
    $randomIndex = rand(0, 3);
    array_push($arrayNew, $input[$randomIndex]);
    $output[$randomIndex]++;
}
var_dump($input);
var_dump($arrayNew);
echo "<br/>";
echo "Raidziu A yra: $output[0]";
echo "<br/>";
echo "Raidziu B yra: $output[1]";
echo "<br/>";
echo "Raidziu C yra: $output[2]";
echo "<br/>";
echo "Raidziu D yra: $output[3]";
echo "<br/>";

echo "<br/>=======================================<br/>";
echo "<br/>";


echo "4 uzduotis: "; 
echo "<br/>";
echo "Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

sort($arrayNew);
var_dump ($arrayNew);


echo "<br/>=======================================<br/>";
echo "<br/>";


echo "5 uzduotis: "; 
echo "<br/>";
echo "Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, 
sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių reikšmių kombinacijų gavote.";
echo "<br/>";
echo ".......................................";


$input = array("A", "B", "C", "D");
$arrayNew1 = [];
$arrayNew2 = [];
$arrayNew3 = [];
$output = [];


for ($j = 0; $j <200; $j++) {
    array_push($arrayNew1, $input[rand(0, 3)]);
}
for ($j = 0; $j <200; $j++) {
    array_push($arrayNew2, $input[rand(0, 3)]);
}
for ($j = 0; $j <200; $j++) {
    array_push($arrayNew3, $input[rand(0, 3)]);
}

for ($i = 0; $i < 200; $i++) { 
    array_push($output, $arrayNew1[$i] . $arrayNew2[$i] . $arrayNew3[$i]);
}
var_dump($output);
echo "<br/>";
$result = array_unique($output);
var_dump($result);
$size = count($result);
echo "Result: $size";

echo "<br/>=======================================<br/>";
echo "<br/>";


echo "6 uzduotis: "; 
echo "<br/>";
echo "Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. 
Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$array6a = []; 
for ($i = 0; $i < 100; $i++) {
    $number = rand(100, 999);
    array_push($array6a, $number);
}
var_dump($array6a); 
echo "<br/>";

$array6b = []; 
for ($i = 0; $i < 100; $i++) {
    $number = rand(100, 999);
    array_push($array6b, $number);
}
var_dump($array6b); 


echo "<br/>=======================================<br/>";
echo "<br/>";


echo "7 uzduotis: "; 
echo "<br/>";
echo "Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$array7 = [];
for ($i = 0; $i < 100; $i++) {
    if (!in_array($array6b[$i], $array6a)) {
        array_push($array7, $array6a[$i]);
    } 
}
var_dump($array7);
echo "<br/>";

echo "<br/>=======================================<br/>";
echo "<br/>";


echo "8 uzduotis: "; 
echo "<br/>";
echo "Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$array8 = [];
// for ($i = 0; $i < 100; $i++) {
//     if ($array6a[$i] == $array6b[$i]) {
//         array_push($array8, $array6b[$i]);
//     }
// }

$array8 = array_intersect($array6a, $array6b);
var_dump($array8);
echo "<br/>";


echo "<br/>=======================================<br/>";
echo "<br/>";


echo "9 uzduotis: "; 
echo "<br/>";
echo "Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės būtų iš antrojo masyvo.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 


$array9 = [];
for ($i = 0; $i < 100; $i++) {
    $array9[$array6a[$i]] = $array6b[$i];
}
var_dump($array9);
echo "<br/>";


echo "<br/>=======================================<br/>";
echo "<br/>";


echo "10 uzduotis: "; 
echo "<br/>";
echo "Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. Trečias, pirmo ir antro suma. 
Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 


$array10 = [];
$array10[0] = rand(5, 25);
$array10[1] = rand(5, 25);
for ($i = 2; $i < 10; $i++) {
    $array10[$i] = $array10[$i-2] + $array10[$i-1];
}
var_dump($array10);
echo "<br/>";


echo "<br/>=======================================<br/>";
echo "<br/>";


echo "11 uzduotis: "; 
echo "<br/>";
echo "Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais nuo 0 iki 300. 
Reikšmes kurios tame masyve yra ne unikalios pergeneruokite iš naujo taip, kad visos reikšmės masyve būtų unikalios. 
Išrūšiuokite masyvą taip, kad jo didžiausia reikšmė būtų masyvo viduryje, o einant nuo jos link masyvo pradžios ir pabaigos reikšmės mažėtų. 
Paskaičiuokite pirmos ir antros masyvo dalies sumas (neskaičiuojant vidurinės). 
Jeigu sumų skirtumas (modulis, absoliutus dydis) yra didesnis nei | 30 | rūšiavimą kartokite.
 (Kad sumos nesiskirtų viena nuo kitos daugiau nei per 30).";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$array11 = []; 
for ($i = 0; $i < 101; $i++) {
    $number = rand(0, 300);
    array_push($array11, $number);
}
var_dump($array11); 
echo "<br/>";

for ($i = 0; $i < 101; $i++) {
    $tempArray = $array11;
    unset($tempArray[$i]);
    while (in_array($array11[$i], $tempArray)) {
        $array11[$i] = rand(0, 300);
    }
}
var_dump($array11); 
echo "<br/>";

$sortedArray = $array11;
sort($sortedArray);
$array11[50] = array_pop($sortedArray);
for ($i = 1; $i <= 50; $i++) {
    $array11[50 - $i] = array_pop($sortedArray);
    $array11[50 + $i] = array_pop($sortedArray);
}
echo "<br/>";
echo "<br/>";
var_dump($array11); 
echo "<br/>";

$sum1 = 0;
$sum2 = 0;
for ($i = 1; $i <= 50; $i++) {
    $sum1 = $sum1 + $array11[50 - $i];
    $sum2 = $sum2 + $array11[50 + $i];
}
echo "Suma kaire: $sum1";
echo "<br/>";
echo "Suma desine: $sum2";

$difference = abs($sum1 - $sum2);
echo $difference;

echo "<br/>=======================================<br/>";
echo "<br/>";
?>
