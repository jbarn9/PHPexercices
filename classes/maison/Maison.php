<?php

class Maison{
    public $nom;
    public $longueur;
    public $largeur;
    public $nbEtages;

    public function surface(){
        $surface = ($this->longueur * $this->largeur) * $this->nbEtages;
        return "La surface de la maison '".$this->nom."' est de ".$surface." m2";
    }

}