<?php
include("Multimedia.php");

class Cd extends Multimedia{
    public $nbPlages;
    function __construct($sauteur, $stitre, $reference, $duree, $nbPlages){
        parent::__construct($sauteur, $stitre, $reference, $duree);
        $this->nbPlages = $nbPlages;
    }
    
    public function getPlages(){
        return $this->nbPlages;
    }

}

$cd = new Cd("Gorillaz", "Demon Days", 4844558856, 60, 15);
echo "Groupe : ".$cd->getAuteur()." | Titre de l'album : ".$cd->getTitre()." | Référence : ".$cd->getReference()." | Nombre de plages : ".$cd->getPlages()." | Duree : ".$cd->getDuree();
