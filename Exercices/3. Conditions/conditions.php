<?php 

// Exercice 0
	$chambre_est_sale = "immaculée";

	switch ($chambre_est_sale) {
		case "dégoutante":
			echo 'Comment est-ce possible de puer autant, nettoie ta chambre! ';
			break;
		case "sale":
			echo 'C est pas très propre ici, passe l aspi ';
			break;
		case "en ordre":
			echo 'Quel ordre! On reconnait l esprit structuré ';
			break;
		case "immaculée":
			echo 'Wow, je suis éblouie ';
			break;
		default:
			echo 'Si toutes les chambres pouvaient être comme ça ';
	}

// Exercice 1 - Affiche un message de salutation différent selon l'heure courante.
	$hour = date("G");

	if ($hour > '5h00' && '9h00' > $hour) {
	    echo "<br> Bonjour!";
	} elseif ($hour > '9h01' && '12h00' > $hour) {
	    echo "<br> Bonne journée!";
	} elseif ($hour > '12h01' && '16h00' > $hour) {
	    echo "<br> Bon après-midi!";
	} elseif ($hour > '16h01' && '21h00' > $hour) {
	    echo "<br> Bonne soirée!";
	} else {
	    echo "<br> Bonne nuit";
	}

// Exercice 2 - Affiche une salutation différente selon l'âge de l'utilisateur.
// Exercice 3 - Affiche une salutation différente selon l'âge et le genre de l'utilisateur.
// Exercice 4 - Affiche une salutation différente selon l'âge, le genre de l'utilisateur et sa langue maternelle.


	$age = $_GET["age"];
	$gender = $_GET["gender"];
	$english = $_GET["english"];

	if (0 < $age && $age < 12) {
	
		if ($gender == female) {

			if ($english == 'yes') {
				$resultEn = "Hello Girl";
			}
			else {$resultAgeW = "Salut petite";}

		}
		elseif ($gender == male) {

			if ($english == 'yes') {
				$resultEn = "Hello Boy";
			}
			else {$resultAge = "Salut petit";}
		}

	} elseif (12 <= $age && $age <= 18) {

		if ($gender == female) {

			if ($english == 'yes') {
				$resultEn = "Hello Teenage Girl";
			}
			else {$resultAgeW = "Salut l'adolescente";}

		}
		elseif ($gender == male) {
			
			if ($english == 'yes') {
				$resultEn = "Hello Teenage Boy";
			}
			else {$resultAge = "Salut l'adolescent";}
		}

	} elseif (18 <= $age && $age <= 115) {

		if ($gender == female) {

			if ($english == 'yes') {
				$resultEn = "Hello Lady";
			}
			else {$resultAge = "Salut l'adulte";}
		}
		elseif ($gender == male) {
		
			if ($english == 'yes') {
				$resultEn = "Hello Sir";
			}
			else {$resultAge = "Salut l'adulte";}
		}

	} elseif ($age > 115) {

		if ($gender == female) {
			if ($english == 'yes') {
				$resultEn = "Wow! Still alive, old lady?";
			}
			else {$resultAgeW = "Wow! Toujours vivante?";}
		
		}
		elseif ($gender == male) {

			if ($english == 'yes') {
				$resultEn = "Wow! Still alive, old man?";
			}
			else {$resultAge = "Wow! Toujours vivant?";}
		}

	}

// Exercice 5. Retour à l'école de l'échec et du jugement
	$note = $_GET["result"];

	if ($note >= 1 && $note <= 3) {
		$eval = 'Ce travail est nul!';
	}

	elseif ($note >= 6 && $note <= 9) {
		$eval = "Ce travail n'est pas terrible!";
	}

	elseif ($note == 10) {
		$eval = 'Tout juste';
	}

	elseif ($note > 10 && $note <= 14) {
		$eval = "C'est pas mal!";
	}

	elseif ($note >= 15 && $note <= 18) {
		$eval = 'Bravo!';
	}

	elseif ($note >= 19 && $note <= 20) {
		$eval = 'Police! Arrête ce tricheur';
	}

	else {
		$eval = 'Pas de chance, le prof ne dit rien!';
	}

// Exercice 7 - Écrire une expression conditionnelle...
	if ($age >= 21 && $age <= 40 && $gender == "female") {
		echo ' <br> Bonjour, bienvenue parmi nous!';
	} else {
		echo ' <br> Désolé, vous ne remplissez pas les critères de sélection';
	}

// Exercice 8 - Même que le 7 sans ELSE


 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Les conditions - exercices!</title>
	</head>
	<body>
		<!-- Pour ex 2,3,4 -->		
		<form action="conditions.php" method="get">
			<p>Quel est votre âge? <input type="number" name="age"></p>
			<?php 
				echo $resultAge;
				echo $resultAgeW;
				echo $resultEn;
			 ?>
			<p>Quel est votre genre? <br>
				<input type="radio" name="gender" value="male"> Masculin<br>
  				<input type="radio" name="gender" value="female"> Féminin<br>
  			</p>
  			<p>Parles-tu anglais? <br>
  				<input type="radio" name="english" value="yes"> Yes<br>
  				<input type="radio" name="english" value="non"> Non<br> 
  			</p>
  			<button type="submit">Click</button>
		</form>
		<!-- Ex 5 -->
		<form action="conditions.php" method="get">
			<p>Quelle note as-tu obtenu à ton dernier contrôle? <input type="number" name="result">
				<button type="submit">Click</button>
			</p>
			<?php
				echo $eval;  
			?>
		</form>
 	</body>
</html>