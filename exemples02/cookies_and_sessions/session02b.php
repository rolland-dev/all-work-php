<?php
session_start();

$pseudo = $_POST['pseudo'] ?? '';
$email = $_POST['email'] ?? '';

if($pseudo == '' ) $pseudo = 'X';
if($email == '' ) $email = 'xxx@xxx.xxx';

// traitement
// test bidon si user est dans la B.D.
// blabla...
// quelque modifs...
$pseudo = strtoupper($pseudo);
// on sauvegarde dans la super global session
$_SESSION['pseudo'] = $pseudo;
$_SESSION['email'] = $email;

?>

<h1><a href="session02c.php"> Au boulot mon cher </a></h1>

