<?php
include("Multimedia.php");

class Dvd extends Multimedia{
    public $bonus;
    
    function __construct($sauteur, $stitre, $reference, $duree, $bonus){
        parent::__construct($sauteur, $stitre, $reference, $duree);
        $this->bonus = $bonus;
    }

    public function getBonus(){
        return $this->bonus;

    }
}

$dvd = new Dvd("Stanley Kubrick", "Shining", 524856584, 119, 1);
echo "Réalisateur : ".$dvd->getAuteur()." | Titre : ".$dvd->getTitre()." | Référence : ".$dvd->getReference()." | Durée : ".$dvd->getDuree()." | Bonus : ".$dvd->getBonus();