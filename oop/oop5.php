<?php

class person{
    var $nom;
    var $email;
    private $age;

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
    function getAge(){
        return $this->age;
    }
    function setAge($age){
        $this->age = $age;
    }
}

$user1 = new person("toto","toto@free.fr",25);

$user1->msg();

//echo $user1->age."<br>";
echo $user1->getAge().'<br>';
//$user1->age = 9999;
$user1->setAge(65);
$user1->msg();

$user2 = new person("titi","titi@free.fr",16);
$user2->msg();


