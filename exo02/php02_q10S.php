<?php
// Q0  init

const B = '<br>';

$tab = [];
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 9; $j++) {
        $tab[$i][$j] = "* ";
    }
}
// suppresion des etoiles là ou il faut
$x = '&nbsp; ';
$tab[0][1] = $x;
$tab[1][1] = $x;
$tab[1][4] = $x;
$tab[1][5] = $x;
$tab[1][7] = $x;
$tab[2][1] = $x;
$tab[3][1] = $x;
$tab[3][3] = $x;
$tab[3][4] = $x;
$tab[3][7] = $x;
$tab[4][7] = $x;

// impression
echo "<pre>";
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 9; $j++) {
        echo $tab[$i][$j];
    }
    echo B;
}
echo "</pre>";