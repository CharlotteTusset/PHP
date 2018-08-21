<?php 

// Exercice 10 - Déclare à l'aide d'une expression ternaire, une variable $bonjour dont la valeur est un message de salutation selon qu'une autre variable $genre soit 'H' ou 'F'.
// Termine par afficher la valeur de $bonjour.

$bonjour = "Bonjour cher codeur, que fais-tu de beau aujourd'hui?";

$genre = "H";

$autre = ($genre == 'F') ? $bonjour : "Rien";

echo $autre;

?>