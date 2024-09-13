<?php
include("Document.php");

class Multimedia extends Document{
    public $duree;

    function __construct($sauteur, $stitre, $reference, $duree){
        parent::__construct($sauteur, $stitre, $reference);
        $this->duree = $duree;
    }

    public function getAuteur(){
        return $this->auteur;
    }
    
    public function getTitre(){
        return $this->titre;
    }
    
    public function getReference(){
        return $this->reference;
    }
    
    public function getDuree(){
        return $this->duree;
    }
}