<?php

const B='<br><br>';

class FrontDev {
    public $name;
    protected $email;
    private $age = 25;

    function jesuis(){
        echo 'je suis '.$this->name.B;
    }
    function front(){
        echo 'je connais le HTML, le CSS et le JS'.B;
    }
    function setEmail($e){
        $this->email = $e;
    }
    function getEmail(){
        return $this->email;
    }
}

$p = new FrontDev();
$p->name='pierre';
//$p->email="pierre@free.fr";
$p->jesuis();
$p->front();
//echo $p->email;
$p->setEmail('toto@free.fr');
echo $p->getEmail();


class FullDev extends FrontDev{
    
    function back(){
        echo 'je connais le SQL et le PHP'.B;
        echo 'mon email est : '.$this->email;
        //echo 'age = '.$this->age;
    }

}

$a = new FullDev();
$a->name='alex';
$a->jesuis();
$a->front();
$a->back();
//$a->email = 'toto@free.fr';
$a->setEmail('alex@free.be');
echo $a->getEmail();