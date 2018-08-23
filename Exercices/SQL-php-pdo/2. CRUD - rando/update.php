<?php 


include 'read.php';

include 'connect.php';


	// Insert statement
	$sql = "UPDATE hiking SET name= :name, difficulty=:difficulty, distance= :distance, duration= :duration, height_difference= :height_difference WHERE id =:id";

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
		echo 'Hiking modified successfully!';
	}

	$stmt->closeCursor();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add a hiking</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="update.php">Data list</a>
	<h1>Add</h1>
	<form action="" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name">
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
			<input type="text" name="distance">
		</div>
		<div>
			<label for="duration">Duration</label>
			<input type="duration" name="duration">
		</div>
		<div>
			<label for="height_difference">Height Difference</label>
			<input type="text" name="height_difference">
		</div>
		<button type="submit" name="button">Submit</button>
	</form>
</body>
</html>