<?php 

	$temperature  = 34; // Joue avec cette valeur pour tester ton script.

	if( $temperature > 21 ) {
  // code à exécuter si la condition est TRUE
  	$vetement_du_jour = "T-shirt";
  
  	}elseif ( $temperature > 10 ){
    $vetement_du_jour = "Pull-over";

 	} else {
   // code à exécuter si toutes les conditions précédentes sont FALSE
   $vetement_du_jour = "Pull-over, écharpe et bonnet";
 	}
 
 	echo "Porte un $vetement_du_jour";

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
   
 	</body>
</html>