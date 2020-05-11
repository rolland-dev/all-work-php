<?php

class Person{
    public $nom;
    public $email;
    public static $count =0;

    public const SLOGAN = 'vive le PHP';


    function __construct($nom, $email){
        $this->nom = $nom;
        $this->email = $email;
        self::$count++;
        echo 'objet crée num :'.self::$count.' le slogan est : '.self::SLOGAN.'<br>';
    }
    function me(){
        echo 'je suis '.$this->nom.' le count vaut : '.self::$count.'<br><br>';
    }

}

$user1 = new Person("toto","toto@free.fr");
$user2 = new Person("titi","titi@free.fr");

$user1->me();
$user2->me();

Person::$count=40;

$user1->me();
$user2->me();

echo Person::SLOGAN;

$user1::$count = 400;

$user1->me();
$user2->me();