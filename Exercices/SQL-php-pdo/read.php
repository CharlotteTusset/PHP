<?php

try {
	$bdd = new PDO('mysql:host=localhost;dbname=reunion_island;charset=utf8', 'root', 'rootme', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
} 

// Afficher 
$req = $bdd->query('SELECT * FROM hiking');

echo "
<h1>Hiking - Reunion Island</h1>
<table border='1'>
<caption>5 hikings in Reunion Island</caption>
<tr>
<th>id</th>
<th>name</th>
<th>difficulty</th>
<th>distance</th>
<th>duration</th>
<th>height_difference</th>
</tr>";

while ($data = $req->fetch())
{
	echo "<tr>";
		echo "<td>" . htmlspecialchars($data['id']) . "</td>";
		echo "<td>" . htmlspecialchars($data['name']) . "</td>";
		echo "<td>" . htmlspecialchars($data['difficulty']) . "</td>";
		echo "<td>" . htmlspecialchars($data['distance']) . "</td>";
		echo "<td>" . htmlspecialchars($data['duration']) . "</td>";
		echo "<td>" . htmlspecialchars($data['height_difference']) . "</td>";
	echo "</tr>";
}

echo "</table>";

$req->closeCursor();


?>