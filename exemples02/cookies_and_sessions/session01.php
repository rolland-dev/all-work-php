<?php
session_start();
$_SESSION['nom'] = 'Martine';
$_SESSION['prenom'] = 'Dupont';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>session01</title>
</head>
<body>
    <h1><a href="session01b.php"> Présentation </a></h1>
</body>
</html>
