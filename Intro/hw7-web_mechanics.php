<h1>7. HOMEWORK - WEB mechanics (background edition)</h1>

<a href="index.php">Back to main</a>
<br/>
<br/>
<br/>
<?php 
echo "1 uzduotis: "; 
echo "<br/>";
echo "Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su failo vardu, 
o kita nuoroda su failo vardu ir GET duomenų  perdavimo metodu perduodamu kintamuoju color=1. 
Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, 
o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$link = "<a href=\"/intro/hw7-webmech/1-black.php\">1-black</a><br/>";
echo $link;


echo "<br/>=======================================<br/>";
echo "<br/>";


echo "2 uzduotis: "; 
echo "<br/>";
echo "Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, 
URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$link = "<a href=\"/intro/hw7-webmech/2-rgb.php\">2-lgbt</a><br/>";
echo $link;


echo "<br/>=======================================<br/>";
echo "<br/>";


echo "3 uzduotis: "; 
echo "<br/>";
echo "Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

$link = "<a href=\"/intro/hw7-webmech/2-rgb.php\">3-color</a><br/>";
echo $link;


echo "<br/>=======================================<br/>";
echo "<br/>";


echo "4 uzduotis: "; 
echo "<br/>";
echo "Sukurkite du puslapius <i>lemon.php</i> ir <i>orange.php</i>. Jų fonus nuspalvinkite atitinkamom spalvom. 
Į lemon.php puslapį įdėkite kodą, kuris naršyklę visada peradresuotų į puslapį orange.php. Pademonstruokite veikimą.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

echo "<a href=\"/intro/hw7-webmech/lemon.php\">Lemon</a><br/>";
echo "<a href=\"/intro/hw7-webmech/orange.php\">Orange</a><br/>";

echo "<br/>=======================================<br/>";
echo "<br/>";


echo "5 uzduotis: "; 
echo "<br/>";
echo "Sukurkite du atskirus puslapius <i>blue.php</i> ir <i>red.php</i> Juose sukurkite linkus į pačius save (abu į save ne į kitą puslapį!). 
Padarykite taip, kad paspaudus ant  linko puslapis ne tiesiog persikrautų, 
o PHP kodas (ne tiesiogiai html tagas!) naršyklę peradresuotų į kitą puslapį (iš raudono į mėlyną ir atvirkščiai).";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 

echo "<a href=\"/intro/hw7-webmech/blue.php\">Blue</a><br/>";
echo "<a href=\"/intro/hw7-webmech/red.php\">Red</a><br/>";

echo "<br/>=======================================<br/>";
echo "<br/>";


echo "6 uzduotis: "; 
echo "<br/>";
echo "Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skairtingas formas- vieną GET ir kitą POST. ";
echo 'Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, o tik tikrindami pačius masyvus, nuspalvinkite foną žaliai, 
kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST.';
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$variable = 0;
echo "Result: $variable";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "7 uzduotis: "; 
echo "<br/>";
echo "Pakartokite 6 uždavinį. Papildykite jį kodu, kuris naršyklę po POST metodo peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$variable = 0;
echo "Result: $variable";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "8 uzduotis: "; 
echo "<br/>";
echo "Sukurkite du puslapius <i>pink.php</i> ir <i>rose.php</i>. Nuspalvinkite juos atitinkamo spalvom. 
Į pink.php puslapį įdėkite formą su POST metodu ir mygtuku “GO TO ROSE”. Formą nukreipkite, kad ji atsidarinėtų rose.php puslapyje. 
Padarykite taip, kad surinkus naršyklėje tiesiogiai adresą į rose.php puslapį, naršyklė būtų peradresuojama į pink.php puslapį.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$variable = 0;
echo "Result: $variable";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "9 uzduotis: "; 
echo "<br/>";
echo "Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C… 
Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, 
rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek).";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$variable = 0;
echo "Result: $variable";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "10 uzduotis: "; 
echo "<br/>";
echo "Pakartokite 9 uždavinį. Padarykite taip, kad atsirastų du skaičiai. 
Vienas rodytų kiek buvo pažymėta, o kitas kiek iš vis buvo jų sugeneruota.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$variable = 0;
echo "Result: $variable";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "11 uzduotis: "; 
echo "<br/>";
echo "Suprogramuokite žaidimą. Žaidimas prasideda dviem laukeliais, kuriuose žaidėjai įveda savo vardus ir mygtuku “pradėti”. 
Šone yra rodomas žaidėjų rezultatas. Paspaudus “pradėti” turi atsirasti pirmo žaidėjo vardas ir mygtukas “mesti kauliuką”. 
Jį nuspaudus skriptas automatiškai sugeneruoja skaičių nuo 1 iki 6 ir jį prideda prie žaidėjo rezultato, 
o pirmo žaidėjo vardas pakeičiamas antro žaidėjo vardu (parodo kieno eilė “mesti kauliuką”). 
Žaidimas tęsiamas iki tol, kol kažkuris žaidėjas surenka 30 taškų. Tada parodomas pranešimas apie laimėjimą ir vėl leidžiama 
suvesti žaidėjų vardus ir pradėti žaidimą iš naujo.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$variable = 0;
echo "Result: $variable";
echo "<br/>=======================================<br/>";
echo "<br/>";
?>


