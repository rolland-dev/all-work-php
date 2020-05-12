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

    function me(){
        echo "je suis $this->name et je suis le roi du CSS.".B;
    }
}

$p = new FrontDev();
$p->name='pierre';

$p->jesuis();
$p->front();

$p->setEmail('toto@free.fr');
echo $p->getEmail().B;

$p->me();


class FullDev extends FrontDev{
    
    function back(){
        echo 'je connais le SQL et le PHP'.B;
        echo 'mon email est : '.$this->email.B;

    }
    function me(){
        parent::me();
        echo "je suis $this->name et je suis le roi du PHP.".B;
    }

}

$a = new FullDev();
$a->name='alex';
$a->jesuis();
$a->front();
$a->back();

$a->me();


$a->setEmail('alex@free.be');
echo $a->getEmail();