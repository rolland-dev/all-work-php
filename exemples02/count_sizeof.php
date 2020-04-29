<?php
$tab2 = [
    [1,2],
    [3,[4,5]]
];
echo count($tab2).'<br>';
echo sizeof($tab2).'<br>';
echo count($tab2,0).'<br>';
echo count($tab2,1).'<br>'; // count recursif : enfants et petits enfants