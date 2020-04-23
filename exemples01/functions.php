<?php

$b='<br>';

echo '<h1>Les fonctions en php</h1>';

function hello1(){
    echo "bonjour à tous";
}
hello1();

echo $b;

function hello2($nom){
    echo "bonjour $nom";
}
$toto = "Martine";
hello2($toto);


echo $b;

function hello3($nom = "Zorro"){
    echo "bonjour $nom";
}

hello3("Marc");
echo $b;
hello3();





echo '<hr>';

function cube($x){
    return $x ** 3;
}

$res = cube(9);
echo ' 9 au cube est : '.$res;

echo '<hr>';

$a = 1;

function test(){
    GLOBAL $a;
    $a = 5;
}
test();
echo 'a = '.$a;

echo '<hr>';

function recur($nombre){

    if($nombre < 5 ){
        echo "$nombre <br>";
        recur($nombre+1);
    }
}

recur(1);
