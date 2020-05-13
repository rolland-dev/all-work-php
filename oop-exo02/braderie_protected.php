<?php
abstract class Bradeu {
    const PRIXM2 = 6.10;
    const TAXE_TABLE = 25.0;
    const TAXE_AUVENT = 50.0;
    const TAXE_SALARIES = 80;
    const GROUPE = 3;

    protected $numEmpl;
    protected $surface;

    function __construct($num, $surf){
        $this->numEmpl = $num;
        $this->surface = $surf;
    }
    function calcTaxe(){
        return $this->surface * self::PRIXM2;
    }
    function afficheInfos(){
        return "Emplacement N° : $this->numEmpl, Surface : $this->surface m².";
    }
}

class Particulier extends Bradeu{

    protected $nom;

    function __construct($num, $surf, $nom){
        parent::__construct($num, $surf);
        $this->nom = $nom;
    }
    function afficheInfos(){
        $str =  "Nom : $this->nom<br>";
        $str .=  parent::afficheInfos().'<br>';   
        return $str;  
    }
}

abstract class Commercant extends Bradeu {

    protected $nomEnt;
    protected $codeTva;

    function __construct($num, $surf, $nomEnt, $codeTva){
        parent::__construct($num, $surf);
        $this->nomEnt = $nomEnt;
        $this->codeTva = $codeTva;
    }    
}

class Restaurateur extends Commercant {

    protected $nbreTables;
    protected $hasAuvent;

    function __construct($num, $surf, $nomEnt, $codeTva, $nbeTables, $hasAuvent){
        parent::__construct($num, $surf, $nomEnt, $codeTva);
        $this->nbreTables = $nbeTables;
        $this->hasAuvent = $hasAuvent;        

    }
    function calcTaxe(){
        $taxe = parent::calcTaxe();
        $taxe += $this->nbreTables * self::TAXE_TABLE;
        $taxe += (($this->hasAuvent)? 1 : 0 ) * self::TAXE_AUVENT;
        return $taxe;
    }
    function afficheInfos(){        
        $str = "Entreprise : $this->nomEnt. CodeTVA : $this->codeTva<br>";
        $str .= parent::afficheInfos().'<br>';
        $str .= "Nombre de table : $this->nbreTables. Auvent : ($this->hasAuvent)<br>";
        return $str;
    }    
}

class VendeurPro extends Commercant {

    protected $nbreSalaries;

    function __construct($num, $surf, $nomEnt, $codeTva, $nbreSalaries){
        parent::__construct($num, $surf, $nomEnt, $codeTva);
        $this->nbreSalaries = $nbreSalaries;
    }
    function calcTaxe(){
        $taxe = parent::calcTaxe();
        $taxe += ceil($this->nbreSalaries/ self::GROUPE) * self::TAXE_SALARIES;
        return $taxe;
    }
    function afficheInfos(){
        $str  = "Entreprise : $this->nomEnt. CodeTVA : $this->codeTva<br>";
        $str .= parent::afficheInfos().'<br>';
        $str .= "Nombre de salariés : $this->nbreSalaries.<br>";
        return $str;
    }  
}

////////////////
/// Evaluations
////////////////

$all = [
    new Particulier (45, 5.0, "Tommy"),
    new Particulier (25, 7.5, "Martine"),
    new Restaurateur(1, 50, "La belle frite", 7485659812, 10, true),
    new Restaurateur(2, 50, "Le saucisson des landes", 7539514560, 7, false),
    new Restaurateur(3, 50, "Le poisson doré", 2581473215, 11, true),
    new VendeurPro  (4, 50, "Le jean en folie", 3214569870, 13),
    new VendeurPro  (4, 50, "Pulls et Chemises d’inde", 8476257629, 8)
];

$alltaxe = 0.0;
foreach ($all as $brad) {
    echo $brad->afficheInfos().'<br>';
    echo "Taxe à régler :  ".$brad->calcTaxe().' €<br><hr>';
    $alltaxe += $brad->calcTaxe();
}

echo "Taxe Totale : ".$alltaxe ." €";