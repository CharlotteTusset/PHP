<?php

include 'connect.php';

// Afficher 
$req = $bdd->query('SELECT * FROM hiking');

echo "
<h1>Hiking - Reunion Island</h1>
<table border='1'>
<caption>Several hikings in Reunion Island</caption>
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
		echo "<td>" . "<form action='delete.php' method='post'><input type='number' name='id'><button type='delete' name='delete'>Delete</button></form>" . "</td>" ; 
	echo "</tr>";
}

echo "</table>";

$req->closeCursor();


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hiking - Reunion Island</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1></h1>
    <table>
    </table>
  </body>
</html>