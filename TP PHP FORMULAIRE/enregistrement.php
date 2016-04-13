<?php

extract($_POST);

$nom=strtolower($nom);
$nom=ucfirst($nom);
$prenom=strtolower($prenom);
$prenom=ucfirst($prenom);

if($sexe=="femme"){
  $sexe="Madame";
} else {
  $sexe="Monsieur";
}

echo "Bonjour ".$sexe." ".$prenom." ".$nom;
?>