<?php
$nom = "chaperon";
$prenom = "yoann";
$age = 41 ;

$nom2 = "Gobard";
$prenom2 = "aurelie";
$age2 = 40;

function presentation($nom, $prenom, $age) {
var_dump("Bonjour je suis $nom $prenom et j'ai $age ans");
};

presentation($nom, $prenom, $age);
presentation($nom2, $prenom2, $age2);