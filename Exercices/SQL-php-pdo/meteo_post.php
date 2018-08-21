<?php

// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'root', 'rootme', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO Météo (ville, haut, bas) VALUES(?, ?,?)');
$req->execute(array($_POST['ville'], $_POST['haut'], $_POST['bas']));

// Redirection du visiteur vers la page météo
header('Location: index.php');

?>