<?php
$tab = [];
// On peut créer tout l'alphabet si on veut ... ;-)
$tab ['A'] = [    '111110',    '100010',    '111110',    '100010',    '100010' ];
$tab ['B'] = [    '111100',    '100010',    '111100',    '100010',    '111100' ];
$tab ['C'] = [    '011100',    '100010',    '100000',    '100010',    '011100' ];
$tab ['D'] = [    '111100',    '100010',    '100010',    '100010',    '111100' ];
$tab ['E'] = [    '111110',    '100000',    '111110',    '100000',    '111110' ];
$tab ['F'] = [    '111110',    '100000',    '111110',    '100000',    '100000' ];
$tab ['G'] = [    '011100',    '100000',    '101100',    '100010',    '011100' ];
$tab ['H'] = [    '100010',    '100010',    '111110',    '100010',    '100010' ];
$tab ['I'] = [    '011100',    '001000',    '001000',    '001000',    '011100' ];
$tab ['J'] = [    '111110',    '001000',    '001000',    '101000',    '011000' ];
$tab ['K'] = [    '100100',    '101000',    '110000',    '101000',    '100100' ];
$tab ['L'] = [    '100000',    '100000',    '100000',    '100000',    '111110' ];
$tab ['M'] = [    '100010',    '110110',    '101010',    '100010',    '100010' ];
$tab ['N'] = [    '100010',    '110010',    '101010',    '100110',    '100010' ];
$tab ['O'] = [    '011100',    '100010',    '100010',    '100010',    '011100' ];
$tab ['P'] = [    '111100',    '100010',    '111100',    '100000',    '100000' ];
$tab ['Q'] = [    '011100',    '100010',    '100010',    '100110',    '011100' ];
$tab ['R'] = [    '111100',    '100010',    '111100',    '100100',    '100010' ];
$tab ['S'] = [    '011100',    '100000',    '111110',    '000010',    '111100' ];
$tab ['T'] = [    '111110',    '001000',    '001000',    '001000',    '001000' ];
$tab ['U'] = [    '100010',    '100010',    '100010',    '100010',    '011100' ];
$tab ['V'] = [    '100010',    '100010',    '100010',    '010100',    '001000' ];
$tab ['W'] = [    '100010',    '100010',    '101010',    '101010',    '010100' ];
$tab ['X'] = [    '100010',    '010100',    '001000',    '010100',    '100010' ];
$tab ['Y'] = [    '100010',    '100010',    '010100',    '001000',    '001000' ];
$tab ['Z'] = [    '111110',    '000100',    '001000',    '010000',    '111110' ];
$tab [' '] = [    '000000',    '000000',    '000000',    '000000',    '000000' ];
$tab ['.'] = [    '000000',    '000000',    '000000',    '000000',    '010000' ];

const B = '<br>';
const Vide = '&nbsp;';
const Etoile = '▓';

function printMe($param, $etoile){
    GLOBAL $tab;
    $s = ['','','','',''];
    
    $mot = $param;
    $mot = str_ireplace(['é','è','ê','ë'],'e',$mot);       // nettoyage : on peut ajouter plein d'exceptions ...
    $mot = str_ireplace(['à','ä','â'],'a',$mot);           // nettoyage : on peut ajouter plein d'exceptions ...
    $mot = str_ireplace(['î','ï'],'i',$mot);               // nettoyage : on peut ajouter plein d'exceptions ...
    $mot = str_ireplace(['ç'],'c',$mot);                   // nettoyage : on peut ajouter plein d'exceptions ...

    $mot = strtoupper($mot);
    $len = strlen($mot);
    
    $tabchar = str_split($mot);
    for ($i=0; $i < $len ; $i++) { 
        for ($j=0; $j < 5; $j++) { 
            $s[$j] .= $tab[$tabchar[$i]][$j];              // On remplit les 5 lignes, une par une
        }     
    }
    echo '<pre>';
    for ($i = 0; $i < 5; $i++) {
        $str = '';
        for ($j = 0; $j < $len*6 ; $j++) {
            $str .= (($s[$i][$j] == 0) ? Vide : $etoile) ; // on affiches les 5 lignes, une par une
        }
        echo $str . B;
    }
    echo '</pre>';
    echo '<hr>';
    // echo '<pre>';
    // print_r($s);
    // echo '</pre>';
}

printMe("bienvenue chez vous à la maison.",'▓');
printMe("donnez vite des frites aux dwwm",'#');
printMe("Bonne journée",'░');
printMe("codez bien...ça va vous détendre.",'╬');
printMe("abcdefghijklmnopqrstuvwxyz.",'@');
printMe("abcdefghijklmnopqrstuvwxyz.",'▓');


