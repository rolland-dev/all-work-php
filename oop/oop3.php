<?php

class person{
    var $nom;
    var $email;
    var $age;

    function __construct($param){
        echo "un objet est crée. reçu : $param.<br><br>";

    }
}

$user1 = new person("zaza");
$user1->nom =' toto ';
$user1->email= 'toto@free.fr';
$user1->age=25;

echo $user1->email.'<br>';

$user2 = new person("zozo");
$user2->nom =' titi ';
$user2->email= 'titito@free.fr';
$user2->age=25;

echo $user2->email.'<br>';

$user3 = new person("zozotatat");
$user3->nom =' titzozoi ';
$user3->email= 'titito@free.fr';
$user3->age=25;

echo $user3->email.'<br>';
