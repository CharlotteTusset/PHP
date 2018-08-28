<?php 

include 'connect.php';

// Ex_1 Afficher tous les clients.

$sql = $pdo->query('SELECT * FROM clients');

$sql->execute();

echo "Ex_1";

function clients_table() {
	echo 
	"<h1>Clients</h1>
	<table border='3'>
	<caption></caption>
	<tr>
	<th>id</th>
	<th>lastName</th>
	<th>firstName</th>
	<th>birthDate</th>
	<th>card</th>
	<th>cardNumber</th>
	</tr>";
}
clients_table();

while ($data = $sql->fetch()) {
	echo "<tr>";
		echo "<td>" . htmlspecialchars($data['id']) . "</td>";
		echo "<td>" . htmlspecialchars($data['lastName']) . "</td>";
		echo "<td>" . htmlspecialchars($data['firstName']) . "</td>";
		echo "<td>" . htmlspecialchars($data['birthDate']) . "</td>";
		echo "<td>" . htmlspecialchars($data['card']) . "</td>";
		echo "<td>" . htmlspecialchars($data['cardNumber']) . "</td>";
	echo "</tr>";
}

echo "</table>";

$sql->closeCursor();


// Ex_2 Afficher tous les types de spectacles possibles

$sql = $pdo->query('SELECT * from showTypes');

$sql->execute();

echo "<br> Ex_2";

echo 
"<h1>Show Types</h1>
<table border='3'>
<caption></caption>
<tr>
<th>id</th>
<th>Type</th>
</tr>";

while ($data = $sql->fetch()) {
	echo "<tr>";
		echo "<td>" . htmlspecialchars($data['id']) . "</td>";
		echo "<td>" . htmlspecialchars($data['type']) . "</td>";
	echo "</tr>";
}

echo "</table>";

$sql->closeCursor();


// Ex_3 Afficher les 20 premiers clients

$sql = $pdo->query('SELECT * FROM clients LIMIT 20');

$sql->execute();

echo "<br> Ex_3";

clients_table();

while ($data = $sql->fetch()) {
	echo "<tr>";
		echo "<td>" . htmlspecialchars($data['id']) . "</td>";
		echo "<td>" . htmlspecialchars($data['lastName']) . "</td>";
		echo "<td>" . htmlspecialchars($data['firstName']) . "</td>";
		echo "<td>" . htmlspecialchars($data['birthDate']) . "</td>";
		echo "<td>" . htmlspecialchars($data['card']) . "</td>";
		echo "<td>" . htmlspecialchars($data['cardNumber']) . "</td>";
	echo "</tr>";
}

echo "</table>";

$sql->closeCursor();


// Ex_4 N'afficher que les clients possédant une carte de fidélité
echo "<br> Ex_4";

$sql = $pdo->query('SELECT * FROM clients WHERE card = 1');

$sql->execute();

clients_table();

while ($data = $sql->fetch()) {
	echo "<tr>";
		echo "<td>" . htmlspecialchars($data['id']) . "</td>";
		echo "<td>" . htmlspecialchars($data['lastName']) . "</td>";
		echo "<td>" . htmlspecialchars($data['firstName']) . "</td>";
		echo "<td>" . htmlspecialchars($data['birthDate']) . "</td>";
		echo "<td>" . htmlspecialchars($data['card']) . "</td>";
		echo "<td>" . htmlspecialchars($data['cardNumber']) . "</td>";
	echo "</tr>";
}

echo "</table>";

$sql->closeCursor();



// Ex_5 Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M"
echo "<br> Ex_5";

$sql = $pdo->query("SELECT lastName, firstName FROM clients WHERE lastName LIKE 'M%' ORDER BY lastName ASC");

$sql->execute();


while ($data = $sql->fetch()) {
	echo "<p>Last name:" . htmlspecialchars($data['lastName']) . "</p>";
	echo "<p>First name: " . htmlspecialchars($data['firstName']) . "</p><br>";
}


$sql->closeCursor();


// Ex_6 Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultats comme ceci : Spectacle par artiste, le date à heure
echo "<br> Ex_6";

$sql = $pdo->query("SELECT performer, date, startTime, title FROM shows ORDER BY title ASC");

$sql->execute();

echo 
"<h1>Shows</h1>
<table border='3'>
<caption>Shows performers & hours</caption>
<tr>
<th>performer</th>
<th>date</th>
<th>start time</th>
<th>title</th>
</tr>";

while ($data = $sql->fetch()) {
	echo "<tr>";
		echo "<td>" . htmlspecialchars($data['performer']) . "</td>";
		echo "<td>" . htmlspecialchars($data['date']) . "</td>";
		echo "<td>" . htmlspecialchars($data['startTime']) . "</td>";
		echo "<td>" . htmlspecialchars($data['title']) . "</td>";
	echo "</tr>";
}

echo "</table>";


$sql->closeCursor();


echo "<br> Ex_7";
$sql = $pdo->query("SELECT * FROM clients ORDER BY lastName, firstName, birthDate, card, cardNumber");

$sql->execute();

while ($data = $sql->fetch()) {
	echo "<p>Last name:" . htmlspecialchars($data['lastName']) . "</p>";
	echo "<p>First name: " . htmlspecialchars($data['firstName']) . "</p>";
	echo "<p>Birthdate: " . htmlspecialchars($data['birthDate']) . "</p>";
	echo "<p>ID Card: " . htmlspecialchars($data['card']) . "</p>";
	echo "<p>Card Number: " . htmlspecialchars($data['cardNumber']) . "</p><br>";
}

$sql->closeCursor();

?>