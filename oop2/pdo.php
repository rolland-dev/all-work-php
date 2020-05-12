<?php
const H = '<hr>';

echo H; /////////////////////////////////////

$dsn = "mysql:host=localhost;dbname=books";
$db = new PDO($dsn, "root","root");

$sql = "select * from books where id = 3 or auteur = 'Martine Delaporte'";

$res = $db->query($sql);

foreach ($res as $row) {
    var_dump($row);
}
echo H; /////////////////////////////////////

$sql = "select * from books where auteur = ? or id = ?";

$stmt = $db->prepare($sql);
$stmt->bindValue(1,"Martine Delaporte");
$stmt->bindValue(2,3);
$stmt->execute();
$res = $stmt->fetchAll();

var_dump($res);

echo H; /////////////////////////////////////

$sql = "select * from books where auteur = :auteur or id = :id";

$stmt = $db->prepare($sql);
$stmt->bindValue('auteur','Martine Delaporte');
$stmt->bindValue('id',3);
$stmt->execute();
$res = $stmt->fetchAll();

var_dump($res);

echo H; /////////////////////////////////////

$sql = "select * from books where auteur = :auteur or id = :id";

$param = ['auteur' => 'Martine Delaporte','id' => 3];
$stmt->execute($param);
$res = $stmt->fetchAll();
var_dump($res);