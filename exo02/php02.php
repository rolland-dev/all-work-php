<?php
// Q0  init

const H = '<hr>';
const B = '<br>';

// ************************
// Q1

function bonjour()
{
    echo 'bonjour.' . B;
}
bonjour();
echo H;

// Q2

function afficherNombres()
{
    for ($i = 1; $i <= 100; $i++) {
        echo $i . (($i % 10 == 0) ? B : ' ');
    }
}
afficherNombres();
echo H;

// Q3

function somme2Entiers($int1, $int2)
{
    return $int1 + $int2;
}
echo 'La somme de 67 et 33 est : ' . somme2Entiers(67, 33);
echo H;

// Q4

function longueurChaine($para)
{
    return strlen($para);
}
$str = 'les ascenceurs html sont Has Been';
$res = longueurChaine($str);
echo "la longueur de la phrase : '($str)' est : $res";
echo H;

// Q5

function remplaceCaractere($para)
{
    return str_ireplace('e', '_', $para);
}
$str = "les ElEphants d'asiE, d'afrique et dEs parties politiques sont en dangEr d'extinction";
echo remplaceCaractere($str);
echo H;

// Q6

function listeVal($tab)
{
    $str='';
    foreach ($tab as $key => $value) {
        $str .= strtoupper($key) . ' : ' . strtolower($value) . ' (' . strlen($value) . ')' . B;
    }
    return $str;
}
$montab = [
    "equipe" => 'football club de barcelone',
    "slogan" => 'le beau jeu en marquant plus : tiki taka',
    "stars"  => 'Messi et Iniesta',
    "secret" => 'Un Club qui appartient au Socios',
];
echo "Résultat : ".B.listeVal($montab);
echo H;

// Q8

echo "<pre>";
for ($i = 1; $i <= 7; $i++) {
    for ($j = 1; $j <= 7; $j++) {
        echo  str_pad($i * $j, 4, ' ', STR_PAD_LEFT);
    }
    echo B;
}
echo "</pre>";
echo H;

/* 
        // echo sprintf("%' 4d",$i*$j);
        // echo sprintf("%-4d",$i*$j);
        // echo sprintf(" %'02d",$i*$j);
*/

// Q9

function triangle($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo '* ';
        }
        echo B;
    }
}
$n = 2; echo "N = $n".B; triangle($n);
$n = 5; echo "N = $n".B; triangle($n);
echo H;

// Q10

const Vide = '&nbsp;';
const Etoile = '*';

$tab = [383, 357, 383, 333, 509]; 
echo '<pre>';
for ($i = 0; $i < 5; $i++) {
    $str = '';
    for ($j = 0; $j <= 10; $j++) {
        $x = $tab[$i] & (2 ** $j);
        $str = (($x == 0) ? Vide : Etoile) . ' ' . $str;
    }
    echo $str . B;
}
echo '</pre>';
echo H;

// Q11

function damier($n){
    $m = 2*$n;
    echo "<table border=1 width='".(50*$n) ."'>";
    for ($i = 1; $i <= $m; $i++) {
        echo '<tr>';
        for ($j = 1; $j <=$m; $j++) {
            $mycol = (($i +$j) %2 == 0) ? 'black' : 'white';
            echo '<td style="background-color:'.$mycol.';">&nbsp;</td>';
        }
        echo '</tr>';
    }  
    echo '</table>'; 
}

$n = 2; echo "N = $n".B; damier($n);
$n = 3; echo "N = $n".B; damier($n);
echo H;