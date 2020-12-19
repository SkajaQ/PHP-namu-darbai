<h1>6. HOMEWORK - FUNCTIONS</h1>

<a href="index.php">Back to main</a>
<br/>
<br/>
<br/>
<?php 
echo "1 uzduotis: "; 
echo "<br/>";
echo "Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

function toH1($string)
{
    return "<h1>$string</h1>";
}
echo toH1('test');

echo "<br/>=======================================<br/>";
echo "<br/>";


echo "2 uzduotis: "; 
echo "<br/>";
echo "Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). 
Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

function toH($string, $tag)
{
    return "<h$tag>$string</h$tag>";
}
echo toH('test', rand(1, 6));



echo "<br/>=======================================<br/>";
echo "<br/>";


echo "3 uzduotis: "; 
echo "<br/>";
echo "Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. 
Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) 
Keitimui naudokite pirmo uždavinio funkciją.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

function extractNrs($text) 
{
    $modified = '';
    echo $text;
    echo "<br/>";
    for($i=0; $i<strlen($text); $i++) {
        $char = $text[$i];
        if (is_numeric($char)) {
            $nrLength = 0;
            for ($j = $i; $j < strlen($text); $j++) {
                $nrLength++;
                if ($j+1 >= strlen($text) || !is_numeric($text[$j+1])) {
                    break;
                }
                
            }
            $modified .= toH1(substr($text, $i, $nrLength));
            $i += $nrLength-1;
        } else {
            $modified .= $char;
        }
    }
    return $modified;
}

echo extractNrs(md5(time()));

echo "<br/>=======================================<br/>";
echo "<br/>";


echo "4 uzduotis: "; 
echo "<br/>";
echo "Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) 
Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

function healthy($nr) 
{
    if (!is_int($nr)) {
        return "bad number";
    }
    $amount = 0;
    for ($i=2; $i<$nr-1; $i++) {
        if ($nr%$i === 0) {
            $amount++;
        }
    }
    return $amount;
}
echo healthy(193333);


echo "<br/>=======================================<br/>";
echo "<br/>";


echo "5 uzduotis: "; 
echo "<br/>";
echo "Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. 
Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$array = []; 
for ($i = 0; $i < 100; $i++) {
    $number = rand(33, 77);
    $array[] = $number;
}
var_dump($array);

function cmp($a, $b)
{
    $divA = healthy($a);
    $divB = healthy($b);
    return ($divB <=> $divA);
}
usort($array, "cmp");
echo "<br/>";

var_dump($array);

echo "<br/>=======================================<br/>";
echo "<br/>";


echo "6 uzduotis: "; 
echo "<br/>";
echo "Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. 
Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$array = []; 
for ($i = 0; $i < 100; $i++) {
    $number = rand(333, 777);
    $array[] = $number;
}
var_dump($array);

for ($i = 0; $i <100; $i++) {
    if (healthy($array[$i]) === 0) {
        unset($array[$i]);
    }
}
echo "<br/>";
var_dump($array);

echo "<br/>=======================================<br/>";
echo "<br/>";


echo "7 uzduotis: "; 
echo "<br/>";
echo "Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, 
o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. 
Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

function task7() {
    $arraysContainer = [];
    $depth = rand(10, 30);
    for ($i = 0; $i < $depth; $i++) {
        $arrLength = rand(10,20);
        $tempArray = [];
        for ($j = 0; $j < $arrLength; $j++) {
            if ($j != $arrLength-1) {
                $tempArray[] = rand(0, 10); 
            } 
        }
        $arraysContainer[] = $tempArray; 
    }
    $arrayOfArrays = [];
    for ($i = $depth-1; $i > -1; $i--) {
        if ($i+1 < $depth-1) {
            $arraysContainer[$i][] = $arraysContainer[$i+1];
        } else {
            $arraysContainer[$i][] = 0;
        }
    }
    return $arraysContainer[0];
}
var_dump(task7());



// $array = [];
// function create($depth, $array) {

//     $length = rand(10, 20);
//     $depth--;
//     for ($i = 0; $i < $length-1; $i++) {
//         $number = rand(0, 10);
//         $array[] = $number;
//     }
//     $array[] = [];
//             if ($depth != 0) {
//                 $array[$length-1] = create($depth, $array[$length1]);
//             } else {
//                 $array[$length] = 0;
//             }
//     return $array;
// }

// var_dump(create(rand(10, 30), $array));



echo "<br/>=======================================<br/>";
echo "<br/>";


echo "8 uzduotis: "; 
echo "<br/>";
echo "Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

function countNumbers($arr) {
    $arrLength = count($arr);
    $sum = 0;
    for ($i = 0; $i < $arrLength; $i++) {
        if (is_int($arr[$i])) {
            $sum += $arr[$i];
        } else {
            $sum += countNumbers($arr[$i]);
        }
    }
    return $sum;
} 
echo "Sum is " . countNumbers(task7());


echo "<br/>=======================================<br/>";
echo "<br/>";


echo "9 uzduotis: "; 
echo "<br/>";
echo "Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33.
 Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, 
 prie masyvo pridėkite dar vieną elementą - atsitiktinį skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia 
 pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti elemento.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$array = []; 
for ($i = 0; $i < 3; $i++) {
    $number = rand(1, 33);
    $array[] = $number;
}
var_dump($array);
echo "<br/>";

while (lastNotPrimes($array)) {
    $number = rand(1, 33);
    $array[] = $number;
}

function primeCheck($number){ 
    if ($number == 1) 
    return 0; 
    for ($i = 2; $i <= $number/2; $i++){ 
        if ($number % $i == 0) 
            return 0; 
    } 
    return 1; 
} 

function lastNotPrimes($arr) {
    $arrLength = count($arr);
    for ($i = $arrLength-3; $i < $arrLength; $i++) {
        if (!primeCheck($arr[$i])) {
            return true;
        }
    }
    return false;
}

var_dump($array);


echo "<br/>=======================================<br/>";
echo "<br/>";


echo "10 uzduotis: "; 
echo "<br/>";
echo "Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 100. 
Jeigu tokio masyvo pirminių skaičių vidurkis mažesnis už 70, suraskite masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3. 
Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$arrayOfArrays = []; 
for ($i = 0; $i < 10; $i++) {
    $array = [];
    for ($j = 0; $j < 10; $j++) {
        $number = rand(1, 100);
        $array[] = $number;
    }
    $arrayOfArrays[] = $array;
}
var_dump($arrayOfArrays);
echo "<br/>";

for ($i = 0; $i < 10; $i++) {
    $value = $arrayOfArrays[$i];
    while (notValid($value)) {
        $minIndex = array_keys($value, min($value))[0];
        $value[$minIndex] = $value[$minIndex] + 3;
    }
    var_dump($value);
    echo "<br/>";
}

function notValid($arr) {
    $countPrime = 0;
    $sumPrime = 0;
    foreach ($arr as &$value) {
        if (primeCheck($value)) {
            $sumPrime += $value;
            $countPrime++;
        }
    }
    if ($countPrime === 0) {
        return true;
    }
    return ($sumPrime/$countPrime) < 70;
}


echo "<br/>=======================================<br/>";
echo "<br/>";


echo "11 uzduotis: "; 
echo "<br/>";
echo "Sugeneruokite masyvą, kurio ilgis atsitiktinai kinta nuo 10 iki 100. Masyvo reikšmes sudaro atsitiktiniai skaičiai 0-100 ir masyvai 
Santykis skaičiuojamas atsitiktinai, bet taip, kad skaičiai sudarytų didesnę dalį nei masyvai. Reikšmių masyvų gylis nuo 1 iki 5, 
o reikšmės analogiškos (nuo 50% iki 100% atsitiktiniai skaičiai 0-100, o likusios masyvai) ir t.t. kol visos galutinės reikšmės bus 
skaičiai ne masyvai. Suskaičiuoti kiek elementų turi masyvas. 
Suskaičiuoti masyvo elementų (tie kurie ne masyvai) sumą. Suskaičiuoti maksimalų masyvo gylį. Atvaizduokite masyvą grafiškai . 
Masyvą pavazduokite kaip div elementą, kuris yra display:flex, kurio viduje yra skaičiai. Kiekvienas div elementas turi savo unikalų id 
ir unikalią background spalvą (spalva pvz nepavaizduota). 
<br/> pvz: &lt;div id=”M1”&gt;10, 46, 67, &lt;div id=”M2”&gt; 89, 45, 89, 34, 90, &lt;div id=”M3”&gt; 84, 97 &lt;/div&gt; 90, 56 &lt;/div&gt; &lt;/div&gt;.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 





echo "<br/>=======================================<br/>";
echo "<br/>";
?>


