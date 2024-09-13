<?php

class Vehicule{
    public $nom;
    public $nbRoues;
    public $vitesse;

    public function detect(){
        if($this->nbRoues === 4){
            return "Voiture <br>";
        }else{
            return "Moto <br>";
        }
    }

    public function plusRapide($vehicule){
        if($this->vitesse > $vehicule->vitesse){
            return $this->nom." est plus rapide que ".$vehicule->nom."<br>";
        }else{
            return $vehicule->nom." est plus rapide que ".$this->nom."<br>";
        }
    }
}