<?php
session_start();

// recup des données

$p = $_SESSION['pseudo'] ?? '';
$e = $_SESSION['email'] ?? '';

if ($p == '') {
    $p = 'X';
}

if ($e == '') {
    $e = 'xxx@xxx.xxx';
}

echo '<h1>Bonjour <u>' . $p . '</u><br>';
echo 'Vous etes déja passé ici <br>';
echo 'Un message vous attends dans votre boite mail : <u>' . $e . '</u>.<br>Profitez de notre offre!<br></h1>';
