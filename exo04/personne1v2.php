<html>
    <head>
        <style>
            body{
                font-size : 24px;
            }
        </style>
    </head>
<body>
<?php
// ////////////////////////////////////////////////
// PROTECTION MINIMALE ICI...
// PROTEGEZ TOUJOURS LES DONNES RECUES.
// NE FAITES PAS CONFIANCE A L'UTILISATEUR...
// ////////////////////////////////////////////////
const B = '<br>';
// traitement des erreurs 
$err = 0;

$nom='';
$prenom='';
$choix_sexe='Non choisi';
$statut_marital='';
$mot_de_passe='';
$passion_pref ='';
$passes_temps =[];

// msg erreurs
$nomerr = '';
$prenomerr = '';
$choix_sexe_err = '';
$mot_de_passe_err = '';
$passion_pref_err = '';
$passes_temps_err = '';



//  blabla : si erreurs alors $err = 1 et on affiche les messages ;

if (isset($_GET['nom'])) {
    $nom = filter_var($_GET['nom'], FILTER_SANITIZE_STRING);
    if ($nom == '') {
        $nomerr = "Le nom est obligatoire..";
        $err = 1;
    }
}

if (isset($_GET['prenom'])) {
    $prenom = filter_var($_GET['prenom'], FILTER_SANITIZE_STRING);
    if ($prenom == '') {
        $prenomerr = "Le prénom est obligatoire..";
        $err = 1;
    }
}

if (isset($_GET['choix_sexe'])) {
    $choix_sexe = filter_var($_GET['choix_sexe'], FILTER_SANITIZE_STRING);
    if ($choix_sexe == '') {
        $choix_sexe_err = "Le choix du sexe est obligatoire..";
        $err = 1;
    }
} else {
    $choix_sexe_err = "Le choix du sexe est obligatoire..";
    $err = 1; 
}

if (isset($_GET['statut_marital'])) {
    $statut_marital = filter_var($_GET['statut_marital'], FILTER_SANITIZE_STRING);
} else {
    $statut_marital = "Non Marié(e)";
}

if (isset($_GET['mot_de_passe'])) {
    $mot_de_passe = filter_var($_GET['mot_de_passe'], FILTER_SANITIZE_STRING);
    if ($mot_de_passe == '' || strlen($mot_de_passe) < 6) {
        $mot_de_passe_err = "Le mot de passe est obligatoire et doit etre de 6 chars minimum..";
        $err = 1;
    }
}

if (isset($_GET['passion_pref'])) {
    $passion_pref = filter_var($_GET['passion_pref'], FILTER_SANITIZE_STRING);
    if ($passion_pref == '') {
        $passion_pref_err = "La Passion préférée est obligatoire..";
        $err = 1;
    }
}else {
    $passion_pref_err = "La Passion préférée  est obligatoire..";
    $err = 1; 
}
if (isset($_GET['passes_temps'])) {
    $passes_temps = filter_var_array($_GET['passes_temps'], FILTER_SANITIZE_STRING);
    if ($passes_temps == []) {
        $passes_temps_err = "Les Passes-temps sont obligatoires..";
        $err = 1;
    }
}else {
    $passes_temps_err = "Les Passes-temps sont obligatoires..";
    $err = 1; 
}



// si erreurs
if ($err == 1) {
    echo "ERREURS:".B.B;
    if($nomerr != '') echo $nomerr.B;
    if($prenomerr != '') echo $prenomerr.B;
    if($choix_sexe_err != '') echo $choix_sexe_err.B;
    if($mot_de_passe_err != '') echo $mot_de_passe_err.B;
    if($passion_pref_err != '') echo $passion_pref_err.B;
    if($passes_temps_err != '') echo $passes_temps_err.B;
}
echo B.B;


echo 'Infos saisies (DEBUG) :'.B.B;
echo "nom : $nom".B;
echo "prenom : $prenom".B;
echo "choix du sexe : $choix_sexe".B;
echo "statut marital : $statut_marital".B;
echo "mot de passe : $mot_de_passe".B; 
echo "Passion préférée : $passion_pref".B;
echo "passes-temps : ".B;
foreach($passes_temps as $v){
    echo "- $v".B;
}


if ($err == 1) {
    echo B.'<a href="javascript:history.back()">Erreurs : Retour page précente..</a>';
} else {

    // ici : pas d'erreurs donc on passe au gabarit 'affichage.php'
    $str = '';
    $str .= 'nom='.$nom;
    $str .= '&prenom='.$prenom;
    $str .= '&txt_sex='.$choix_sexe;
    $str .= '&txt_st_martital='.$statut_marital; 
    $str .= '&mot_de_passe='.$mot_de_passe;
    $str .= '&passion_pref='.$passion_pref;

    $tmp = '<ul>';
    foreach ($passes_temps as $val) {
        $tmp .= "<li>$val</li>";
    }
    $tmp .='</ul>';

    $str .= '&txt_passes_temps='.$tmp;
    echo $str;
    header('Location: affichage.php?'.$str);
}

