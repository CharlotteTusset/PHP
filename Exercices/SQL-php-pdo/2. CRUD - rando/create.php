<?php 

// print_r($_POST);

include 'read.php';

try

{
	$bdd = new PDO('mysql:host=localhost;dbname=reunion_island;charset=utf8', 'root', 'rootme');

}

catch(Exception $e)

{
        die('Erreur : '.$e->getMessage());
}


	// Insert statement
	$sql = "INSERT INTO hiking (name, difficulty, distance, duration, height_difference) VALUES(:name, :difficulty, :distance, :duration, :height_difference)"; 

	$stmt = $bdd->prepare($sql);

	// Get data from form
	if(isset($_POST['button'])){ 
		$name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
		$difficulty = filter_var($_POST['difficulty'],FILTER_SANITIZE_STRING);
		$distance = filter_var($_POST['distance'],FILTER_SANITIZE_STRING);
		$duration = filter_var($_POST['duration'],FILTER_SANITIZE_STRING);
		$height_difference = filter_var($_POST['height_difference'],FILTER_SANITIZE_STRING);
		// echo '<pre>';
		// var_dump($name);
		// var_dump($difficulty);
		// var_dump($distance);
		// var_dump($duration);
		// var_dump($height_difference);
		// echo '</pre>';
	}

	$stmt->bindParam(":name", $name);
	$stmt->bindParam(":difficulty", $difficulty);
	$stmt->bindParam(":distance", $distance);
	$stmt->bindParam(":duration", $duration);
	$stmt->bindParam(":height_difference", $height_difference);

	// $bdd->exec($sql);
	
	// $stmt->execute();
	if($stmt->execute()) {
		echo 'Hiking inserted successfully!';
	}

	$stmt->closeCursor();


// Redirection du visiteur vers la page 
// header('Location: read.php');

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add a hiking</title>
	<link rel="stylesheet" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="read.php">Data list</a>
	<h1>Add</h1>
	<form action="create.php" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" id="name" value="">
		</div>

		<div>
			<label for="difficulty">Difficulty</label>
			<select name="difficulty">
				<option value="très facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="très difficile">Très difficile</option>
			</select>
		</div>
		
		<div>
			<label for="distance">Distance</label>
			<input type="text" name="distance" value="" id="distance">
		</div>
		<div>
			<label for="duration">Duration</label>
			<input type="time" name="duration" value="" id="duration">
		</div>
		<div>
			<label for="height_difference">Height difference</label>
			<input type="text" name="height_difference" value="" id="height_difference">
		</div>
		<button type="submit" name="button">Submit</button>
	</form>
</body>
</html>