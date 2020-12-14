<h1>3. HOMEWORK - LOOPS</h1>

<a href="index.php">Back to main</a>
<br/>
<br/>
<br/>
<?php 
echo "1 uzduotis: "; 
echo "<br/>";
echo "Naršyklėje nupieškite linija iš 400 “*”. 
<br/> Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
<br/> Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”;.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$res = '';
for ($i = 0; $i < 400; $i++) {
    $res = $res . '*';
}
echo "<span style='word-wrap: break-word' >$res</span>";
echo "<br/>"; 
echo "<br/>"; 
$res2 = '';
for ($i = 0; $i < 50; $i++) {
    $res2 = $res2. '*';
}
for ($i = 0; $i < 8; $i++) {
    echo $res2;
    echo "<br/>"; 
}

echo "<br/>=======================================<br/>";
echo "<br/>";


echo "2 uzduotis: "; 
echo "<br/>";
echo "Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite 
kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$biggerThan = 0;
for ($i = 0; $i < 300; $i++) {
    $number = rand(0, 300);
    if ($number > 150) {
        $biggerThan++;
    }
    if ($number > 275) {
        echo "<span style='color:red'>$number</span>" . ' ';
    } else {
        echo $number . ' ';
    }
}
echo "<br/>"; 
echo "Result: $biggerThan";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "3 uzduotis: "; 
echo "<br/>";
echo "Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), 
kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. 
Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$res = '';
$skaicius = rand(3000, 4000);
echo "Random: $skaicius";
echo "<br/>"; 
for ($i = 1; $i < $skaicius; $i++ ) {
    if ($i % 77 === 0) {
        $res = $res . $i . ', ';
    } 
}
$res = substr($res, 0, (mb_strlen($res) - 2) );
echo "Result: $res";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "4 uzduotis: "; 
echo "<br/>";
echo "Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
// TODO: sutvarkyti CSS kvadrata

for ($i = 0; $i < 100; $i++) {

    for ($j = 0; $j < 100; $j++) {
        $color = $j === $i || $j === (99 - $i) ? "color:red;" : "";
        
        echo "<span style='line-height: 7.5px; $color'>*</span>";

    }       
    echo "<br/>"; 

}
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "5 uzduotis: "; 
echo "<br/>";
echo "Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

// DONE 

echo "<br/>=======================================<br/>";
echo "<br/>";


echo "6 uzduotis: "; 
echo "<br/>";
echo "Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. 
Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. 
Suprogramuokite keturis skirtingus scenarijus kai monetos metimą stabdome: ";
echo "<br/>";
echo ".......................................";
echo "<br/> Iškritus herbui: ";

$neHerbas = true;
while ($neHerbas) {
    $res = rand(0, 1); 
    if ($res === 0) {
        echo 'H' . ' ';
        $neHerbas = false;
    } else {
        echo 'S' . ' ';
    }
}

echo "<br/> Tris kartus iškritus herbui: ";
$herbas = 0;
while ($herbas < 3) {
    $res = rand(0, 1); 
    if ($res === 0) {
        $herbas++;
        echo 'H' . ' ';
    } else {
        echo 'S' . ' ';
    }
}

echo "<br/> Tris kartus iš eilės iškritus herbui: ";

$herbasIsEiles = 0;
while ($herbasIsEiles < 3) {
    $res = rand(0, 1); 
    if ($res === 0) {
        $herbasIsEiles++;
        echo 'H' . ' ';
    } else {
        echo 'S' . ' ';
        $herbasIsEiles = 0;
    }
}


echo "<br/>=======================================<br/>";
echo "<br/>";


echo "7 uzduotis: "; 
echo "<br/>";
echo "Kazys ir Petras žaidžia šaškėm. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. 
Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. 
Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. 
Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$petras = 0;
$kazys = 0;
$laimetojas = 0;

while ($petras < 222 && $kazys < 222) {
    $petras = $petras + rand(10, 20);
    $kazys = $kazys + rand(5, 25);
}
$laimetojas = $petras > $kazys ? "Petras" : "Kazys";
echo "Petras: $petras, Kazys: $kazys";
echo "<br/>";
echo "Partiją laimėjo: $laimetojas";

echo "<br/>=======================================<br/>";
echo "<br/>";


echo "8 uzduotis: "; 
echo "<br/>";
echo "Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą (https://lt.wikipedia.org/wiki/Rombas), 
kurio aukštis 21 eilutė. Reikia padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis).";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

for ($i = 0; $i < 21; $i++) {
    
    for ($j = 0; $j < 21; $j++) {
        $color = 'color: rgb('. rand(0, 255). ','. rand(0, 255). ','. rand(0, 255). ')';
        if ($i < 11) {
            if ($j < (10-$i) || $j > (10+$i)) {
                echo "<span style='color: transparent;'>*</span>";
            } else {
                echo "<span style='$color'>*</span>";
            }
        } else {
            // i = 11 
            if ($j < ($i-10) || $j > (21-($i-9))) {
                echo "<span style='color: transparent;'>*</span>";
            } else {
                echo "<span style='$color'>*</span>";
            }
        }
    }  
    echo "<br/>"; 
}

echo "<br/>=======================================<br/>";
echo "<br/>";


echo "9 uzduotis: "; 
echo "<br/>";
echo 'Panaudokite funkciją microtime(). Paskaičiuokite kiek sekundžių užtruks kodą: $c = \'10 bezdzioniu suvalge 20 bananu.\'';
echo "<br/>Įvykdyti 1 milijoną kartų ir palyginkite kiek užtruks įvykdyti kodą: </br>";
echo '$c = "10 bezdzioniu suvalge 20 bananu."';
echo "<br/>(Stringas viengubose ir dvigubose kabutėse)";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$time1start = microtime(true);
for ($i = 0; $i < 1000000; $i++) {
    $c = '10 bezdzioniu suvalge 20 bananu.';

}
$time1end = microtime(true);
$res1 = $time1end - $time1start;

$time2start = microtime(true);
for ($i = 0; $i < 1000000; $i++) {
    $c = "10 bezdzioniu suvalge 20 bananu.";
    
}
$time2end = microtime(true);
$res2 = $time2end - $time2start;

echo "Su viengubom: $res1; su dvigubom: $res2";

echo "<br/>=======================================<br/>";
echo "<br/>";


echo "10 uzduotis: "; 
echo "<br/>";
echo "Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).";
echo "<br/> a) 'Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių'.";
echo "<br/> b) 'Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), 
kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.'";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$viniesIlgis = 85; 
$smugiuKiekis = 0;
$viniuKiekis = 0;
$smugis = 0;
while ($viniuKiekis < 5) {
    $smugis = $smugis + rand(5, 20);
    $smugiuKiekis++;
    if ($smugis >= 85) {
        $smugis = 0;
        $viniuKiekis++;
    }
}
echo "a) Smugiu: $smugiuKiekis";


$viniesIlgis = 85; 
$smugiuKiekis = 0;
$viniuKiekis = 0;
$smugis = 0;
while ($viniuKiekis < 5) {
    $pataike = rand(0,1);
    $smugiuKiekis++; 
    if ($pataike === 1) {
        $smugis = $smugis + rand(20, 30);
        
        if ($smugis >= 85) {
            $smugis = 0;
            $viniuKiekis++;
        }
    }
}
echo "<br/>"; 
echo "b) Smugiu: $smugiuKiekis";

echo "<br/>=======================================<br/>";
echo "<br/>";


echo "11 uzduotis: "; 
echo "<br/>";
echo "Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200, atskirtų tarpais. 
Skaičiai turi būti unikalūs (t.y. nesikartoti). Sugeneruokite antrą stringą, pasinaudodami pirmu, 
palikdami jame tik pirminius skaičius (t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys savęs). 
Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki didžiausio.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$counter = 0;
$array = [];
$res1 = '';
while ($counter < 50) {
    $skaicius = rand(1, 200);
    if (!in_array($skaicius, $array)) {
        $array[] = $skaicius;
        $counter++;
        $res1 = $res1 . ' ' . $skaicius;
    }
}
echo $res1;

function primeCheck($number){ 
    if ($number == 1) 
    return 0; 
    for ($i = 2; $i <= $number/2; $i++){ 
        if ($number % $i == 0) 
            return 0; 
    } 
    return 1; 
} 
sort($array);
$res2 = '';
for ($i = 0; $i < 50; $i++) {
    if (primeCheck($array[$i])) {
        $res2 = $res2 . ' ' . $array[$i];
    }
}

echo "<br/>";
echo "Pirminiai isrusiuoti: $res2";


echo "<br/>=======================================<br/>";
echo "<br/>";
?>





 
