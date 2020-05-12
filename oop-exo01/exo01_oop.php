<?php
const H = '<hr>';

// 1 ///////////////////////////////

class Hello
{
    public function __construct()
    {
        echo 'Bonjour et bienvenue en POO<br>';
    }
}

$obj1 = new Hello();

echo H;

// 2 ///////////////////////////////

class Hello_Mr
{
    public function __construct($m)
    {
        echo 'Bienvenue Mr ' . $m . '<br>';

    }
    public function affiche()
    {
        echo 'Ca va ?<br>';
    }
}

$obj2 = new Hello_Mr("Cesar");
$obj2->affiche(); 

echo H;

// 3 ///////////////////////////////

class Point
{
    public $x;
    public $y;
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function add($a, $b)
    {
        $this->x += $a;
        $this->y += $b;
    }
    public function sub($a, $b)
    {
        $this->x -= $a;
        $this->y -= $b;
    }
    public function mul($m)
    {
        $this->x *= $m;
        $this->y *= $m;
    }
    public function div($m)
    {
        if ($m == 0) {
            echo 'alerte!!! division par ZERO impossible<br>';
            return;
        }
        $this->x /= $m;
        $this->y /= $m;
    }
    public function doPrint(){
        echo 'point(' . $this->x . ',' . $this->y . ')<br>';
    }
}

$obj3 = new Point(1, 1);
$obj3->doPrint();
$obj3->add(3, 2);
$obj3->doPrint();
$obj3->sub(1, 1);
$obj3->doPrint();
$obj3->mul(4);
$obj3->doPrint();
$obj3->div(2);
$obj3->doPrint();
$obj3->div(0);
$obj3->doPrint();

echo H;

// 4 ///////////////////////////////

class Player
{
    public $pseudo;
    public $age;
    public $score = 0;
    public function __construct($pseudo, $age)
    {
        $this->pseudo = $pseudo;
        $this->age = $age;
    }
    public function affiche()
    {
        return 'player [' . $this->pseudo . ',' . $this->age . ',' . $this->score . ']<br>';
    }
    public function monteScore()
    {
        $this->score += 10;
    }
    public function testPa()
    {
        return ($this->age > 13 && $this->score >= 180);
    }
}
$obj4 = new Player('Bella', 25);
echo $obj4->affiche();

$obj4->monteScore();
echo $obj4->affiche();
echo ($obj4->testPa() ?"C'est TRUE":"C'est FALSE").'<br>';

$obj4->score = 200;
echo $obj4->affiche();
echo ($obj4->testPa() ?"TRUE":"FALSE").'<br>';

echo H;

// 5 ///////////////////////////////

class Voiture
{
    public $marque;
    public $matricule;
    public $prix;
    public static $nbeVoitures=0;
    public function __construct($marque, $matricule, $prix){
        $this->marque = $marque;
        $this->matricule = $matricule;
        $this->prix = $prix;
        self::$nbeVoitures++;
        echo $this->nombreV();
    }
    public function nombreV(){
        return 'Le nombre de voitures dans le parc est :'.self::$nbeVoitures.'<br>';
    }
}
$parc = [
    new Voiture('Renault','MLK 55 JU',12510),
    new Voiture('Fiat','MLK 55 JU',22510),
    new Voiture('Peugeot','MLK 55 JU',10400),
    new Voiture('Audi','MLK 55 JU',37300),
    new Voiture('Strava','MLK 55 JU',8510)
];

echo H;

// 6 ///////////////////////////////

class Article 
{
    public $nom;
    public $prix;
    public static $tva=20;
    public function __construct($nom, $prix){
        $this->nom = $nom;
        $this->prix = $prix;
    }
    public function affiche(){
        $prixTCC = $this->prix * (1 + self::$tva/100);
        return 'Article : '.$this->nom.' Prix ttc : '.$prixTCC.' €<br>';
    }
    public static function changeTva($v){
        self::$tva = $v;
    }
}

$obj6 = [
    new Article('pull',50),
    new Article('chemise',39),
    new Article('robe',80)
];

foreach ($obj6 as $art) {
    echo $art->affiche();
}
Article::changeTva(22);

foreach ($obj6 as $art) {
    echo $art->affiche();
}

echo H;