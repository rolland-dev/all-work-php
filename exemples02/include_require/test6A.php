<?php
require_once "test6A.incaaaaa.php";


echo "je suis là";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titre;?></title>
</head>
<body>
    <?php
    $len = sizeof($menus); // = count($menu)
    for ($i=0; $i < $len ; $i++) {
        echo "<a href=\"".$liens[$i]."\">" . $menus[$i] . "</a><br>";
    }
    ?>

</body>
</html>

