<?php
include('Vehicule.php');

$vehicule1 = new Vehicule;
$vehicule1->nom = "Mercedes";
$vehicule1->nbRoues = 2;
$vehicule1->vitesse = 250;
echo $vehicule1->detect();

$vehicule2 = new Vehicule;
$vehicule2->nom = "Honda";
$vehicule2->nbRoues = 4;
$vehicule2->vitesse = 180;
echo $vehicule2->detect();
echo $vehicule2->plusRapide($vehicule1);
