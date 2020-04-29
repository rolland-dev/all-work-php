<?php
session_start();
$nom = $_SESSION['nom'] ?? 'inconnue';
$prenom = $_SESSION['prenom'] ?? 'pre-inconnue';
$_SESSION['toto'] = 'dfgdgdgdgsgsgd';

echo '<h1>bonjour Mme ' . $nom . ' '.$prenom.'</h1>';
?>

<h1><a href="session01c.php"> Présentation n°2 </a></h1>
