<h1>1. HOMEWORK - Variables and Conditions</h1>
<pre>
<br/>
<a href="index.php">Back to main</a>
<br>

<?php 
echo '1 uzduotis: '; 
echo "<br/>";
echo "Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus).
Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
<b>Aš esu Vardenis Pavardenis. Man yra XX metai(ų).</b>";
echo "<br/>";
echo ".......................................";
echo "<br/>";
$vardas = 'Mazena';
$pavarde = 'Zigmund';
$gimimoMetai = '1950';
$dabartiniaiMetai = '2020';
$amzius = $dabartiniaiMetai - $gimimoMetai;
echo "Aš esu $vardas $pavarde. Man yra $amzius metai(ų)";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "2 uzduotis: "; 
echo "<br/>";
echo "Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4.
 Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$pirmas = rand(0, 4);
$antras = rand(0, 4);
if ($pirmas > $antras && $antras != 0) {
    $res = round(($pirmas / $antras), 2);
} else if ($antras > $pirmas && $pirmas != 0) {
    $res = round(($antras / $pirmas), 2);
} else 
    $res = 'visa kita'; 
echo $res;
echo "<br/>=======================================<br/>";
echo "<br/>";


echo '3 uzduotis: '; 
echo "<br/>";
echo "Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25.
 Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$pirmas = rand(0, 25);       
$antras = rand(0, 25);      
$trecias = rand(0, 25);    
echo "$pirmas, $antras, $trecias  ";
if ($pirmas > $antras) {
    $antras > $trecias ? $res = $antras : $res = $trecias;
} else  {
    $pirmas > $trecias ? $res = $pirmas : $res = $trecias;
}
echo "vidurine reiksme $res";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo '4 uzduotis: '; 
echo "<br/>";
echo "Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). 
Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$a = rand(0, 10);
$b = rand(0, 10);
$c = rand(0, 10);
echo "Pirmas sk: $a, antras sk: $b, trečias sk: $c. ";
if ((($a + $b) > $c)&&(($a + $c) > $b)&&(($b + $c) > $a)) {
    echo 'Trikampi sudaryti galima.';
}else {
    echo 'Trikampio sudaryti negalima.';
}
echo "<br/>=======================================<br/>";
echo "<br/>";


echo '5 uzduotis: '; 
echo "<br/>";
echo "Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$pirmas = rand(0, 2);       
$antras = rand(0, 2);      
$trecias = rand(0, 2);    
$ketvirtas = rand(0, 2);
echo "$pirmas, $antras, $trecias, $ketvirtas  ";
$res0 = 0;
$res1 = 0;
$res2 = 0;
if ($pirmas === 0) {
    $res0 = 1;
} else if ($pirmas === 1) {
    $res1 = 1;
} else {
    $res2 = 1;
}
if ($antras === 0) {
    $res0 += 1;
} else if ($antras === 1) {
    $res1 += 1;
} else {
    $res2 += 1;
}
if ($trecias === 0) {
    $res0 += 1;
} else if ($trecias === 1) {
    $res1 += 1;
} else {
    $res2 += 1;
}
if ($ketvirtas === 0) {
    $res0 += 1;
} else if ($ketvirtas === 1) {
    $res1 += 1;
} else {
    $res2 += 1;
}
echo "0: $res0, 1: $res1, 2: $res2";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo '6 uzduotis: '; 
echo "<br/>";
echo "Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. 
Pvz skaičius 3 - rezultatas: &lt;h3&gt;3&lt;/h3&gt;";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$a = rand(0, 6);
echo "<h$a>$a</h$a>";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo '7 uzduotis: '; 
echo "<br/>";
echo "Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 
0 - raudonas, didesni už 0 mėlyni. ";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$a = rand(-10, 10);
$b = rand(-10, 10);
$c = rand(-10, 10);
$zalias = '<span style="color:green">';
$melynas = '<span style="color:blue">';
$raudonas = '<span style="color:red">';
if ($a < 0) {
    echo "$zalias $a </span>"; 
} else if ($a == 0) {
    echo "$raudonas $a </span>"; 
} else {
    echo "$melynas $a </span>"; 
}
if ($b < 0) {
    echo "$zalias $b </span>"; 
} else if ($b == 0) {
    echo "$raudonas $b </span>"; 
} else {
    echo "$melynas $b </span>"; 
}
if ($c < 0) {
    echo "$zalias $c </span>"; 
} else if ($c == 0) {
    echo "$raudonas $c </span>"; 
} else {
    echo "$melynas $c </span>"; 
}
echo "<br/>=======================================<br/>";
echo "<br/>";


echo '8 uzduotis: '; 
echo "<br/>";
echo "Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. 
Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. 
Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$zvakiuKiekis = rand(5, 3000);
if ($zvakiuKiekis < 1000) {
    $kaina = 1;
} else if ($zvakiuKiekis < 2000) {
    $kaina = 0.97;
} else {
    $kaina = 0.96;
}
$suma = $zvakiuKiekis * $kaina;
echo "Kiekis $zvakiuKiekis, suma $suma";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo '9 uzduotis: '; 
echo "<br/>";
echo "Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. 
Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. 
Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.
";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$a = rand(0, 100);
$b = rand(0, 100);
$c = rand(0, 100);
echo "$a, $b, $c  ";

$vidurkis = round(($a+$b+$c)/3, 0);
echo "Vidurkis yra $vidurkis ";

$suma = 0;
$kiekis = 0;
if ($a > 10 && $a < 90) {
    $suma = $suma + $a;
    $kiekis = $kiekis +1;
}
if ($b > 10 && $b < 90) {
    $suma = $suma + $b;
    $kiekis = $kiekis +1;
}
if ($c > 10 && $c < 90) {
    $suma = $suma + $c;
    $kiekis = $kiekis +1;
}
if ($kiekis !== 0) {
    $res = round(($suma/$kiekis), 0);
    echo "Aritmetinis vidurkis yra $res";
}
echo "<br/>=======================================<br/>";
echo "<br/>";


echo '10 uzduotis: '; 
echo "<br/>";
echo "Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. 
Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. 
Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. 
Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$h = rand(0, 23);
$min = rand(0, 59);
$s = rand(0, 59);
echo "Laikrodis $h : $min : $s ";
$add = rand(0, 300);
echo "Prideta sek: $add   ";
$addMin = floor($add / 60);
$addS = $add % 60; 
if (($s + $addS) < 59 ) {
    $s = $s + $addS;
} else {
    $s = ($s + $addS) - 60;
    $min = $min +1;
};
if (($min + $addMin) < 59 ) {
    $min = $min + $addMin;
} else {
    $min = ($min + $addMin) - 60;
    $h = ($h +1) < 24 ? ($h + 1) : (($h+1) - 24);
}
echo "Laikrodis po pridejimo $h : $min : $s ";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo '11 uzduotis: '; 
echo "<br/>";
echo "Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su atsitiktinem reikšmėm nuo 1000 iki 9999. 
Atspausdinkite reikšmes viename strige, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais. 
Naudoti ciklų ir masyvų <strong>NEGALIMA</strong>.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$a = rand(1000, 9999);
$b = rand(1000, 9999);
$c = rand(1000, 9999);
$d = rand(1000, 9999);
$e = rand(1000, 9999);
$f = rand(1000, 9999);
echo "Pradiniai skaiciai: $a, $b, $c, $d, $e, $f  ";
$smallest = min($a,$b,$c,$d,$e,$f);
$biggest = max($a,$b,$c,$d,$e,$f);
$secondSmallest = 0;
$thirdSmallest = 0;
$middle = 0;
$bigger = 0;
switch ($smallest) {
    case $a:
        $secondSmallest = min($b,$c,$d,$e,$f);
        switch ($secondSmallest) {
            case $b:
                $thirdSmallest = min($c,$d,$e,$f);
                # code...
                break;
            case $c:
                $thirdSmallest = min($b,$d,$e,$f);
                # code...
                break;
            case $d:
                $thirdSmallest = min($b,$c,$e,$f);
                # code...
                break;
            case $e:
                $thirdSmallest = min($b,$c,$d,$f);
                # code...
                break;
            case $f:
                $thirdSmallest = min($b,$c,$d,$e);
                # code...
                break;
            }
        break;
    case $b:
        $secondSmallest = min($a,$c,$d,$e,$f);
        switch ($secondSmallest) {
            case $a:
                $thirdSmallest = min($c,$d,$e,$f);
                # code...
                break;
            case $c:
                $thirdSmallest = min($a,$d,$e,$f);
                # code...
                break;
            case $d:
                $thirdSmallest = min($a,$c,$e,$f);
                # code...
                break;
            case $e:
                $thirdSmallest = min($a,$c,$d,$f);
                # code...
                break;
            case $f:
                $thirdSmallest = min($a,$c,$d,$e);
                # code...
                break;
            }
        break;
    case $c:
        $secondSmallest = min($b,$a,$d,$e,$f);
        switch ($secondSmallest) {
            case $a:
                $thirdSmallest = min($b,$d,$e,$f);
                # code...
                break;
            case $b:
                $thirdSmallest = min($a,$d,$e,$f);
                # code...
                break;
            case $d:
                $thirdSmallest = min($a,$b,$e,$f);
                # code...
                break;
            case $e:
                $thirdSmallest = min($a,$b,$d,$f);
                # code...
                break;
            case $f:
                $thirdSmallest = min($a,$b,$d,$e);
                # code...
                break;
            }
        break;
    case $d:
        $secondSmallest = min($b,$c,$a,$e,$f);
        switch ($secondSmallest) {
            case $a:
                $thirdSmallest = min($c,$b,$e,$f);
                # code...
                break;
            case $c:
                $thirdSmallest = min($a,$b,$e,$f);
                # code...
                break;
            case $b:
                $thirdSmallest = min($a,$c,$e,$f);
                # code...
                break;
            case $e:
                $thirdSmallest = min($a,$c,$b,$f);
                # code...
                break;
            case $f:
                $thirdSmallest = min($a,$c,$b,$e);
                # code...
                break;
            }
        break;
    case $e:
        $secondSmallest = min($b,$c,$d,$a,$f);
        switch ($secondSmallest) {
            case $a:
                $thirdSmallest = min($c,$d,$b,$f);
                # code...
                break;
            case $c:
                $thirdSmallest = min($a,$d,$b,$f);
                # code...
                break;
            case $d:
                $thirdSmallest = min($a,$c,$b,$f);
                # code...
                break;
            case $b:
                $thirdSmallest = min($a,$c,$d,$f);
                # code...
                break;
            case $f:
                $thirdSmallest = min($a,$c,$d,$b);
                # code...
                break;
            }
        break;
    case $f:
        $secondSmallest = min($b,$c,$d,$e,$a);
        switch ($secondSmallest) {
            case $a:
                $thirdSmallest = min($c,$d,$e,$b);
                # code...
                break;
            case $c:
                $thirdSmallest = min($a,$d,$e,$b);
                # code...
                break;
            case $d:
                $thirdSmallest = min($a,$c,$e,$b);
                # code...
                break;
            case $e:
                $thirdSmallest = min($a,$c,$d,$b);
                # code...
                break;
            case $b:
                $thirdSmallest = min($a,$c,$d,$e);
                # code...
                break;
        }
        break;
    
    default:
        # code...
        break;
}



switch ($biggest) {
    case $a:
        $bigger = max($b,$c,$d,$e,$f);
        switch ($bigger) {
            case $b:
                $middle = max($c,$d,$e,$f);
                # code...
                break;
            case $c:
                $middle = max($b,$d,$e,$f);
                # code...
                break;
            case $d:
                $middle = max($b,$c,$e,$f);
                # code...
                break;
            case $e:
                $middle = max($b,$c,$d,$f);
                # code...
                break;
            case $f:
                $middle = max($b,$c,$d,$e);
                # code...
                break;
            }
        break;
    case $b:
        $bigger = max($a,$c,$d,$e,$f);
        switch ($bigger) {
            case $a:
                $middle = max($c,$d,$e,$f);
                # code...
                break;
            case $c:
                $middle = max($a,$d,$e,$f);
                # code...
                break;
            case $d:
                $middle = max($a,$c,$e,$f);
                # code...
                break;
            case $e:
                $middle = max($a,$c,$d,$f);
                # code...
                break;
            case $f:
                $middle = max($a,$c,$d,$e);
                # code...
                break;
            }
        break;
    case $c:
        $bigger = max($b,$a,$d,$e,$f);
        switch ($bigger) {
            case $a:
                $middle = max($b,$d,$e,$f);
                # code...
                break;
            case $b:
                $middle = max($a,$d,$e,$f);
                # code...
                break;
            case $d:
                $middle = max($a,$b,$e,$f);
                # code...
                break;
            case $e:
                $middle = max($a,$b,$d,$f);
                # code...
                break;
            case $f:
                $middle = max($a,$b,$d,$e);
                # code...
                break;
            }
        break;
    case $d:
        $bigger = max($b,$c,$a,$e,$f);
        switch ($bigger) {
            case $a:
                $middle = max($c,$b,$e,$f);
                # code...
                break;
            case $c:
                $middle = max($a,$b,$e,$f);
                # code...
                break;
            case $b:
                $middle = max($a,$c,$e,$f);
                # code...
                break;
            case $e:
                $middle = max($a,$c,$b,$f);
                # code...
                break;
            case $f:
                $middle = max($a,$c,$b,$e);
                # code...
                break;
            }
        break;
    case $e:
        $bigger = max($b,$c,$d,$a,$f);
        switch ($bigger) {
            case $a:
                $middle = max($c,$d,$b,$f);
                # code...
                break;
            case $c:
                $middle = max($a,$d,$b,$f);
                # code...
                break;
            case $d:
                $middle = max($a,$c,$b,$f);
                # code...
                break;
            case $b:
                $middle = max($a,$c,$d,$f);
                # code...
                break;
            case $f:
                $middle = max($a,$c,$d,$b);
                # code...
                break;
            }
        break;
    case $f:
        $bigger = max($b,$c,$d,$e,$a);
        switch ($bigger) {
            case $a:
                $middle = max($c,$d,$e,$b);
                # code...
                break;
            case $c:
                $middle = max($a,$d,$e,$b);
                # code...
                break;
            case $d:
                $middle = max($a,$c,$e,$b);
                # code...
                break;
            case $e:
                $middle = max($a,$c,$d,$b);
                # code...
                break;
            case $b:
                $middle = max($a,$c,$d,$e);
                # code...
                break;
        }
        break;
    
    default:
        # code...
        break;
}
echo "Rezultatas: $biggest $bigger $middle $thirdSmallest $secondSmallest $smallest";
echo "<br>";?>