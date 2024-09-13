<?php

interface travailleur {
    public function travailler();
}

class Employe implements travailleur{
    public $prenom;
    public $nom;
    protected $age;

    public function __construct($prenom, $nom, $age){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->setAge($age);
    }
    public function travailler()
    {
        return "Je suis un employé et je travaille";
    }

    public function presentation(){
        var_dump("Salut, je m'appelle $this->prenom $this->nom, j'ai $this->age ans");
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        if(is_int($age) && $age > 1 && $age<110){
            $this->age = $age;
        }else{
            throw new Exception("L'âge est incorrect");
        }
    }

}

// $employe1 = new Employe("Julie", "Barenne", 29);
// // $employe1->setAge(50);
// $employe1->presentation();

class Patron extends Employe {
    public $voiture;

    public function __construct($prenom, $nom, $age ,$voiture)
    {
        parent::__construct($prenom, $nom, $age);
        $this->voiture = $voiture; 
    }

    public function presentation(){
        var_dump("Bonjour, je m'appelle $this->prenom $this->nom, j'ai $this->age ans et j'ai une $this->voiture !");
    }
    public function travailler(){
        return "Je suis le patron je fais travailler mes salariés.";
    }
    public function rouler(){
        var_dump("Bonjour, je roule avec une $this->voiture");
    }
}
class Etudiant extends Employe{
    public function __construct($prenom, $nom, $age )
    {
        parent::__construct($prenom, $nom, $age);

    }
    public function travailler()
    {
        return "J'étudie";
    }
    public function presentation(){
        var_dump("Bonjour, je m'appelle $this->prenom $this->nom, j'ai $this->age ans et j'étudie !");
    }
}
$patron1 = new Patron("Julie", "Barenne", 50, "Mercedes");
// $patron1->setAge(50);
$patron1->presentation();
$patron1->rouler();
$etudiant = new Etudiant("Julie", "Varennes", 18);
$etudiant->presentation();

// Polymorphisme : on appelle la fonction travailler() sur un objet
// ad'hoc : utiliser la fonction mais en faire sortir des choses différentes
// La fonction travailler prendra différentes formes selon l'objet passé à la
// fonction
function faitTravailler(Travailleur $objet){
    var_dump("Farniente en cours : {$objet->travailler()}");
}

faitTravailler($etudiant);
faitTravailler($patron1);

?>