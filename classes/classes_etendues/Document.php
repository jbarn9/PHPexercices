<?php

abstract class Document {
    public $auteur;
    public $titre;
    public $reference;

    function __construct($sauteur, $stitre, $reference){
        $this->auteur = $sauteur;
        $this->titre = $stitre;
        $this->reference = $reference;
    }

    abstract public function getAuteur();
    
    abstract public function getTitre();
    
    abstract public function getReference();
}