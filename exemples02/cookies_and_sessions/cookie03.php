<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lecture de cookie</title>
</head>
<body>

<?php
$nom = $_COOKIE['visiteur'] ?? 'X';

echo '<h1>Bon retour parmi nous Mr ' . $nom . '</h1>';
echo '<h1>Bienvenue dans la Matrice.</h1>';

?>

</body>
</html>