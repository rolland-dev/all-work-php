<?php

class person{
    var $nom;
    var $email;
    var $age;
}

$user1 = new person;
$user1->nom =' toto ';
$user1->email= 'toto@free.fr';
$user1->age=25;

echo $user1->email.'<br>';

$user2 = new person;
$user2->nom =' titi ';
$user2->email= 'titito@free.fr';
$user2->age=25;

echo $user2->email.'<br>tttt';