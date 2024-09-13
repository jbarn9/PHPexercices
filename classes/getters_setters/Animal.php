<?php

class Animal{
    private $id;
    private $libelle;
    private $predateur;

    public function __construct($id, $slibelle,$bpredateur){
        $this->id = $id;
        $this->libelle = $slibelle;
        $this->predateur = $bpredateur;
    }

    public function getId(){
        return $this->id;
    }
    public function getLibelle(){
        return $this->libelle;
    }
    public function getPredateur(){
        if($this->predateur == 1){
            return "Oui";
        }else{
            return "Non";
        }
    }
}

$tortue = new Animal(1, "Tortue", false);
echo 'Espèce : '.$tortue->getLibelle().", Prédateur : ".$tortue->getPredateur(). ", Id : ".$tortue->getId()."<br>"; 

$tigre = new Animal(2, "Tigre", true);
echo 'Espèce : '.$tigre->getLibelle().", Prédateur : ".$tigre->getPredateur(). ", Id : ".$tigre->getId()."<br>"; 
