<?php
session_start();
$nom = $_SESSION['nom'] ?? 'inconnue';

echo '<h1>Te revoila  Mme ' . $nom . '</h1>';


print_r($_SESSION);

// session_destroy(); POUR supprimer la session

