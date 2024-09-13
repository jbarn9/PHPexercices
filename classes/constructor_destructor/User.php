<?php

class User {
    private $id;
    private $prenom;
    private $nom;

    public function __construct($id, $sprenom, $snom){
        $this->id = $id;
        $this->prenom = $sprenom;
        $this->nom = $snom;

    }
    public function getId(){
        return $this->id;
    }
    
    public function getNom(){
        return $this->nom;
    }
    
    public function getPrenom(){
        return $this->prenom;
    }

}

$lea = new User(1, "Léa", "Rateau");
echo 'Salut, je m\'appelle '.$lea->getPrenom()." ".$lea->getNom().", j'ai l'id : ".$lea->getId()."<br>"; 

$jerome = new User(2, "Jerome", "Lanvert");
echo 'Salut, je m\'appelle '.$jerome->getPrenom()." ".$jerome->getNom().", j'ai l'id : ".$jerome->getId()."<br>"; 

$cedric = new User(3, "Comes", "Cédric");
echo 'Salut, je m\'appelle '.$cedric->getNom()." ".$cedric->getPrenom().", j'ai l'id : ".$cedric->getId()."<br>"; 
