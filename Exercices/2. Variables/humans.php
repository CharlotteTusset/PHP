<?php 

	$surname = "Charlotte";
	$age = 26;
	$hungry = FALSE;
	$eyesColour = "grey-green";
	$family = array("Martine", "Silvano", "Justine", "Lionel", "Giulia", "Cléa");

	echo "$surname is $age and have $eyesColour eyes;" 

 ?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Hi!</title>
	</head>

	<body>
    	<h1>Bonjour <?php echo $_GET['nom']; ?>!</h1>
 	</body>
</html>