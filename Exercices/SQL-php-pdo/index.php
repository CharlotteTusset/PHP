<?php

try {
	$bdd = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'root', 'rootme', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$resultat = $bdd->query('SELECT * FROM Météo');

echo "
<h1>Météo</h1>
<table border='1'>
<caption>Données météorologiques belges francophones</caption>
<tr>
<th>Ville</th>
<th>T° max</th>
<th>T° min</th>
</tr>";

while ($donnees = $resultat->fetch())
{
	echo "<tr>";
		echo "<td>" . htmlspecialchars($donnees['ville']) . "</td>";
		echo "<td>" . htmlspecialchars($donnees['haut']) . "</td>";
		echo "<td>" . htmlspecialchars($donnees['bas']) . "</td>";
	echo "</tr>";
}

echo "</table>";

$resultat->closeCursor();

?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>php-pdo ex</title>
        <meta name="description" content="PHP-PDO">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- <link rel="manifest" href="site.webmanifest"> -->        
		<link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="main.css">
    </head>
    <body><br>
 		<form action="meteo_post.php" method="post">
 			<label>Ville:</label> <input type="text" name="ville" id="ville"> 
 			<label>T° max:</label> <input type="number" name="haut" id="haut">
 			<label>T° min:</label> <input type="number" name="bas" id="bas">
 			<input type="submit" value="insert">
 		</form>
 	<script type="text/javascript"></script>
    </body>
</html>