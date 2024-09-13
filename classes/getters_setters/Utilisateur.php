<?php 
class Utilisateur {
    public $id;
    public $nom;
    public $prenom;

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return "Mon identifiant (id) est ".$this->id;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function getNom(){
        return "Mon nom est ".$this->nom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function getPrenom(){
        return "Mon prénom est ".$this->prenom;
    }

}

$lea = new Utilisateur();
$lea->setId(1);
$lea->setNom("Rateau");
$lea->setPrenom("Léa");
echo 'Salut, je m\'appelle '.$lea->getPrenom()." ".$lea->getNom().", j'ai l'id : ".$lea->getId()."<br>"; 

$jerome = new Utilisateur();
$jerome->setId(2);
$jerome->setNom("Lanvert");
$jerome->setPrenom("Jerome");
echo 'Salut, je m\'appelle '.$jerome->getPrenom()." ".$jerome->getNom().", j'ai l'id : ".$jerome->getId()."<br>"; 

$cedric = new Utilisateur();
$cedric->setId(3);
$cedric->setNom("Comes");
$cedric->setPrenom("Cedric");
echo 'Salut, je m\'appelle '.$cedric->getPrenom()." ".$cedric->getNom().", j'ai l'id : ".$cedric->getId()."<br>"; 
