<?php
include("maison.php");

$nouvellemaison = new Maison();
$nouvellemaison->nom = "helloworld";
$nouvellemaison->longueur = 50;
$nouvellemaison->largeur = 20;
$nouvellemaison->nbEtages = 2;
echo $nouvellemaison->surface();