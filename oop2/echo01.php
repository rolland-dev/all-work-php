<?php
class Person{
    public $nom;
    public $email;
    public $age;

    function __construct($nom,$email,$age){
        $this->nom = $nom;
        $this->email = $email;
        $this->age = $age;
    }

    function presentation(){
        return "je suis $this->nom, j'ai $this->age. mon email est $this->email<br>";
    }

}

$p = new Person("kumalov","kumalov@federation.ru",28);

echo $p->presentation();