<?php

class Salle{
    private $id;
    private $libelle;
    private $capacite;
    private $occupe;

    public function __construct($id, $slibelle, $capacite, $boccupe) {
        $this->id = $id;
        $this->libelle = $slibelle;
        $this->capacite = $capacite;
        $this->occupe = $boccupe;
    }

    public function getId(){
        return $this->id;
    }
    
    public function getLibelle(){
        return $this->libelle;
    }
    
    public function getCapacite(){
        return $this->capacite;
    }
    public function getOccupe(){
        if($this->occupe == 1){
            return "Oui";
        }else{
            return "Non";
        }
    }
}

$tortue = new Salle(1, "Salle tortue", 35, false);
echo 'Nom salle : '.$tortue->getLibelle().", capacité : ".$tortue->getCapacite(). ", Occupée : ".$tortue->getOccupe().", Id : ".$tortue->getId()."<br>"; 

$tigre = new Salle(2, "Salle tigre", 50, true);
echo 'Nom salle : '.$tigre->getLibelle().", capacité : ".$tigre->getCapacite(). ", Occupée : ".$tigre->getOccupe().", Id : ".$tortue->getId()."<br>"; 
