<?php
// Q0 ----------------------------------------------------------------

function prArr($tab){
    echo '<pre>';
    print_r($tab);
    echo '</pre>';
}

// Q1 ----------------------------------------------------------------

function triTab($tab)
{
    sort($tab); // sort($tab, SORT_STRING)
    return $tab;

}
$t = ['yohan', 'pierre', 'arthur', 'george', 'nadine'];

prArr($t);
prArr(triTab($t));

// Q2 ----------------------------------------------------------------

function triTabN($tab)
{
    sort($tab, SORT_NUMERIC);
    return $tab;
}

$t2 = [36, 11, 89, 55, 63, 1, 80];

prArr($t2);
prArr(triTabN($t2));

// Q3 ----------------------------------------------------------------

$capitales = [
    "Italie" => "Rome", "Luxembourg" => "Luxembourg", "Belgique" => "Bruxelles",
    "France" => "Paris", "Pologne" => "Varsovie", "Pays-Bas" => "Amsterdam",
    "Portugal" => "Lisbonne", "Ireland" => "Dublin", "Chypre" => "Nicosie",
    "Espagne" => "Madrid",
];
// -a
asort($capitales);
prArr($capitales);

// -b
ksort($capitales);
prArr($capitales);

// Q4 ----------------------------------------------------------------

function insertAtPos($tab, $T, $pos)
{

    if ($pos > count($tab)) {
        array_push($tab, $T);
        
    } else if ($pos <= 0) {
        array_unshift($tab, $T);
        
    } else {
        array_splice($tab, $pos - 1, 0, $T);
    }
    return $tab;
}

$t3 = [9, 0, 7, 1, 8, 2];
prArr($t3); // tableau initial

$res = insertAtPos($t3, 99, 0); //  milieu
prArr($res);

$res = insertAtPos($t3, 88, -3); // début
prArr($res);

$res = insertAtPos($t3, 77, 63); // fin
prArr($res);

// Q5 ----------------------------------------------------------------

function giveTheMax($tab){
    return max($tab);
}
$t4 = [5, 9, 1, 23, 2, 45, 12, 0];

$themax =  giveTheMax($t4);
echo 'max du tableau = '.$themax.'<br>';

// Q6 ----------------------------------------------------------------

function between_2Nbres($val1, $val2)
{
    $str = '';
    for ($i = $val1; $i <= $val2; $i++) {
        if ($i % 4 === 0 && ($i % 6 !== 0 && $i % 7 !== 0)) {
            $str .= $i. ' ';
        }
    }
    return $str;
}

prArr(between_2Nbres(311,477));

// Q7 ----------------------------------------------------------------

$t5 = [
    "id3" => ["nom"=>"marc", "age" => 25],
    "id4" => ["nom"=>"pierre", "age" => 26],
    "id2" => ["nom"=>"marie", "age" => 27],
    "id5" => ["nom"=>"anne", "age" => 28],
    "id1" => ["nom"=>"martine", "age" => 29]
];

echo "Tableau initial :<br>";
prArr($t5);

function callBackNom($x, $y)
{
    return ($x['nom'] <=> $y['nom']); // return -1 si $x plus petit, 1 si plus grand et 0 sinon(égalité)
}
function callBackAge($x, $y)
{
    return ($x['age'] <=> $y['age']);
}
uasort($t5,"callBackNom");
echo "Tableau trié par nom :<br>";
prArr($t5);

uasort($t5,"callBackAge");
echo "Tableau trié par âge :<br>";
prArr($t5);

sort($t5); // !!! perte des indices
echo "Tableau trié pr défault :<br>";
prArr($t5);

// Q8 ----------------------------------------------------------------

function duree($d1, $d2){

    $interval = date_diff($d1, $d2);
    echo $interval->format('%y an, %m mois et %d jours');

}
duree(date_create("2020-03-16"), date_create("2020-05-11"));

echo "<br>";

// Q9 ----------------------------------------------------------------

function jourOuvrable($d){
    
    $jour = date("l",strtotime($d));
    if($jour != "Saturday" && $jour != "Sunday"){
        return date("Y/m/d",strtotime($d));
    }else {
        return date("Y/m/d ",strtotime("next Monday".$d));
    }
}
echo "data jour ouvré : " . jourOuvrable("2020-04-25")."<br>";

// QF 1 ----------------------------------------------------------------

$fichier = "exemple.txt";
$txt = "vive le PHP.";

$fp = fopen($fichier, "w+");
fputs($fp, $txt);
fclose($fp);

file_put_contents($fichier, $txt); // alias de fopen + fputs + fclose MAIS : fopen permet plus de flag

// QF 2 ----------------------------------------------------------------

function count_Lines($file){
        return count( file($file) );
}

$f = "php03.php";
echo "nombre de ligne de $f est : ".count_Lines($f)."<br>";

// QF 3 ----------------------------------------------------------------

$f = "test.txt";
echo "le contenu de  $f est : <br><br>";

echo '<hr>';
readfile($f);

echo '<hr>';
echo nl2br(file_get_contents($f));

echo '<hr>';
$t6 = file($f);
for ($i=0; $i < count($t6); $i++) { 
    echo nl2br($t6[$i]);
}

echo '<hr>';
$fp = fopen($f,'r');
do
{
        $ligne = fgets($fp) ;
        echo nl2br($ligne) ;
}
while($ligne != '') ;
fclose($fp);

