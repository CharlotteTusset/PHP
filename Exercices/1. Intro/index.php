<?php

	function sayHello($name) {
		return "Hello $name";
	}
	print sayHello("Charlotte");

	echo "\n <img src='Naymushin-cat.jpeg' alt='Rainbow Cat'/>";
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>PHP</title>
	</head>
	<body>
		<header></header>
		<h1>Le chat appeuré</h1>
		<?php include 'cats.php'; ?>
		<footer></footer>

	</body>
</html>