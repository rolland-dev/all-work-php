<?php
// ////////////////////////////////////////////////
// POUR DES RAISONS DE FACILITE :
// AUCUNE PROTECTION N'A ETE MISE EN OEUVRE ICI
// PROTEGEZ TOUJOURS LES DONNES RECUES.
// NE FAITES PAS CONFIANCE A L'UTILISATEUR...
// ////////////////////////////////////////////////

function display2(){
    if (isset($_POST)) {
        echo '<table border="1">';
        foreach ($_POST as $a => $b) {
            if($a == 'btnSubmit') continue;
            echo "<tr>";
            echo "<td>$a</td>";
            if(!is_array($b)){                
                echo "<td> $b </td>";                
            }    
            else{
                echo '<td><table border="1">';
                foreach ($b as $k => $v){
                    echo "<tr>";
                    echo "<td>$v </td>";
                    echo "</tr>";
                }    
                echo '</table></td>';
            }
            echo "</tr>";           
        }
        echo '</table>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #main{
            width:600px;
            margin: 0 auto;
            font-size: 24px;
        }
        table{
            width: 100%;
        }
        table, tr,td {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<div id="main">
    <?php
    display2();
    ?>
</div>
</body>
</html>

