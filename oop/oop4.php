<?php

class person{
    var $nom;
    var $email;
    var $age;

    function __construct($nom, $email,$age){
        $this->nom = $nom;
        $this->email = $email;
        $this->age = $age;
    }
    function msg(){
        echo "$this->nom a pour mail : $this->email et a $this->age. <br><br>";
        if ($this->age >= 18) {
            echo "Majeur<br>";
        }else {
            echo "Mineur<br>";
        }
    }
}

$user1 = new person("toto","toto@free.fr",25);

$user1->msg();


$user2 = new person("titi","titi@free.fr",16);
$user2->msg();


