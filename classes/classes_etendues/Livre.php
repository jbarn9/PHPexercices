<?php
include("Document.php");

class Livre extends Document{
    public $nbPages;
    
    function __construct($sauteur, $stitre, $reference, $nbPages){
        parent::__construct($sauteur, $stitre, $reference);
        $this->nbPages = $nbPages;
    }

    public function getNbPages(){
        return $this->nbPages;
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

$livre = new Livre("Marcel Aymé", "La tête des autres", 488587854, 100);
echo "Auteur : ".$livre->getAuteur()." | Titre : ".$livre->getTitre()." | Référence : ".$livre->getReference()." | Nombre de pages : ".$livre->getNbPages();