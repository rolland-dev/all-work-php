<?php

const B='<br><br>';

class FrontDev {
    public $name;

    function jesuis(){
        echo 'je suis '.$this->name.B;
    }
    function front(){
        echo 'je connais le HTML, le CSS et le JS'.B;
    }
}

$p = new FrontDev();
$p->name='pierre';
$p->jesuis();
$p->front();


class FullDev{
    public $name;

    function jesuis(){
        echo 'je suis '.$this->name.B;
    }
    function front(){
        echo 'je connais le HTML, le CSS et le JS'.B;
    }
    function back(){
        echo 'je connais le SQL et le PHP'.B;
    }

}

$a = new FullDev();
$a->name='alex';
$a->jesuis();
$a->front();
$a->back();