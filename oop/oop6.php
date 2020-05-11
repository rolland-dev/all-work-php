<?php

class Person{
    public $nom;
    var $email;
    private $age;

    function __construct($nom, $email,$age){
        $this->nom = $nom;
        $this->email = $email;
        $this->setAge($age);
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
        if ($age <0 || $age > 99 || !is_numeric($age)) {
            $this->age = 0;
            echo 'age invalide<br>';
        }else {
            $this->age = $age;
        }
        
    }
}

$user1 = new Person("toto","toto@free.fr",25);

$user1->msg();

//echo $user1->age."<br>";
echo $user1->getAge().'<br>';
//$user1->age = 9999;
$user1->setAge('polo');
$user1->msg();

$user2 = new Person("titi","titi@free.fr",888);
$user2->msg();


