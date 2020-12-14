<h1>2. HOMEWORK - STRINGS</h1>

<a href="index.php">Back to main</a>
<br/>
<br/>
<br/>
<?php 
echo "1 uzduotis: "; 
echo "<br/>";
echo "Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). 
Atspausdinti trumpesnį stringą.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$name = 'David';
$surname = 'Duchovny'; 
echo "<br>";
$shortest = mb_strlen($name) > mb_strlen($surname) ? $surname : $name;
echo "Aktorius $name $surname";
echo "<br>";
echo "Trumpesnis yra: $shortest";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "2 uzduotis: "; 
echo "<br/>";
echo "Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$name = 'David';
$surname = 'Duchovny';
$nameUpperCase = strtoupper($name);
$surnameLowerCase = strtolower($surname);
echo "<br>";
echo "Vardas didziosiom: $nameUpperCase, pavarde mazosiom: $surnameLowerCase";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "3 uzduotis: "; 
echo "<br/>";
echo "Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$name = 'David';
$surname = 'Duchovny';
echo "<br>";
$inicialai = substr($name, 0, 1) . substr($surname, 0, 1);
echo "Aktorius $name $surname";
echo "<br>";
echo "Incialai yra: $inicialai";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "4 uzduotis: "; 
echo "<br/>";
echo "Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
 Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$name = 'David';
$surname = 'Duchovny';
echo "<br>";
$trysPaskutinesRaides = substr($name, -3, 3) . substr($surname, -3, 3);
echo "Aktorius $name $surname";
echo "<br>";
echo "Trys paskutines vardo ir pavardes raides yra: $trysPaskutinesRaides";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "5 uzduotis: "; 
echo "<br/>";
echo "Sukurti kintamąjį su stringu: “An American in Paris”. 
Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$text = "An American in Paris";
$replacedText = str_replace(['a','A'], '*', $text);
echo "Pakeistos a raides tekste: $replacedText";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "6 uzduotis: "; 
echo "<br/>";
echo "Sukurti kintamąjį su stringu: “An American in Paris”. 
Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$text = "An American in Paris";
$countBigA = substr_count($text, 'A');
$countSmallA = substr_count($text, 'a');
$countAllA = $countSmallA + $countBigA;
echo "Big A: $countBigA, small a: $countSmallA, all A: $countAllA";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "7 uzduotis: "; 
echo "<br/>";
echo "Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. 
Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$text = "An American in Paris";
$tekstasBeBalsiu = str_replace(array("a","A","e","E","i","I","o","O","u","U","y","Y"), '', $text);
echo "$text be balsiu yra: $tekstasBeBalsiu";
echo "<br>";
$text2 = "Breakfast at Tiffany's";
$tekstasBeBalsiu2 = str_replace(array("a","A","e","E","i","I","o","O","u","U","y","Y"), '', $text2);
echo "$text2 be balsiu yra: $tekstasBeBalsiu2";
echo "<br>";
$text3 = "2001: A Space Odyssey";
$tekstasBeBalsiu3 = str_replace(array("a","A","e","E","i","I","o","O","u","U","y","Y"), '', $text3);
echo "$text3 be balsiu yra: $tekstasBeBalsiu3";
echo "<br>";
$text4 = "It's a Wonderful Life";
$tekstasBeBalsiu4 = str_replace(array("a","A","e","E","i","I","o","O","u","U","y","Y"), '', $text4);
echo "$text4 be balsiu yra: $tekstasBeBalsiu4";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "8 uzduotis: "; 
echo "<br/>";
echo "Stringe, kurį generuoja toks kodas: <i>'Star Wars: Episode'.str_repeat(' ', rand(0,5)).rand(1,9) .' - A New Hope';</i> 
surasti ir atspausdinti epizodo numerį.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$text = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
$episodeNr = (int) filter_var($text, FILTER_SANITIZE_NUMBER_INT);
echo "Tekste: $text - epizodo numeris yra: $episodeNr";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "9 uzduotis: "; 
echo "<br/>";
echo "Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” 
yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$text = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$tempRes = explode(" ", $text);
$wordsUnderFive = 0;
foreach ($tempRes as &$value) {
    if (mb_strlen($value) <= 5) {
        $wordsUnderFive++;  
    }
}
echo "Tekste: $text - Maziau ar lygu uz 5 raides zodziu yra: $wordsUnderFive";
echo "<br>";
$text2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$tempRes2 = explode(" ", $text2);
$wordsUnderFive2 = 0;
foreach ($tempRes2 as &$value2) {
    if (mb_strlen($value2) <= 5) {
        $wordsUnderFive2++;  
    }
}
echo "Tekste: $text2 - Maziau ar lygu uz 5 raides zodziu yra: $wordsUnderFive2";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "10 uzduotis: "; 
echo "<br/>";
echo "Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$randomThreeLetters = "";
$characters = 'abcdefghijklmnopqrstuvwxyz';
$charactersLength = strlen($characters);
$randomString = '';
for ($i = 0; $i < 3; $i++) {
    $randomThreeLetters .= $characters[rand(0, $charactersLength - 1)];
}
echo "Trys sugeneruotos raides yra: $randomThreeLetters";
echo "<br/>=======================================<br/>";
echo "<br/>";


echo "11 uzduotis: "; 
echo "<br/>";
echo "Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, o žodžius 
generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. (reikės masyvo)";
echo "<br/>";
echo ".......................................";
echo "<br/>"; 
$text1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$text2 = "Tik nereikia gąsdinti Pietų Centro geriant sultis pas save kvartale";
$textNew = $text1 . ' ' . $text2;
$res = '';
$source = explode(' ', $textNew);
$arrayLength = count($source);
for ($i = 1; $i <= 10; $i++) {
    $randIndex = rand(0, $arrayLength - 1);
    $res = $res . ' ' . $source[$randIndex];
    unset($source[$randIndex]);
    $source = array_values($source);
    $arrayLength--;
}
echo "10 atsitiktiniu zodziu yra: $res";
echo "<br><br>================================================";
?>


