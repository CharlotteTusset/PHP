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
	<form action="" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="">
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
			<input type="text" name="distance" value="">
		</div>
		<div>
			<label for="duration">Duration</label>
			<input type="duration" name="duration" value="">
		</div>
		<div>
			<label for="height_difference">Height difference</label>
			<input type="text" name="height_difference" value="">
		</div>
		<button type="submit" name="button">Submit</button>
	</form>
</body>
</html>