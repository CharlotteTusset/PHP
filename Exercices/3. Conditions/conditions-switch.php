<?php 

// Exercice 6 - Structure Switch
$note = $_GET["result"];

switch ($note) {
	case '1';
	case '2';
	case '3';
		$eval = 'Ce travail est nul!';
		break;

	case '6';
	case '7';
	case '8';	
	case '9';
		$eval = "Ce travail n'est pas terrible!";
		break;

	case '10':
		$eval = 'Tout juste';
		break;

	case '11';
	case '12';
	case '13';
	case '14';
		$eval = "C'est pas mal!";
		break;

	case '15';
	case '16';
	case '17';
	case '18';
		$eval = 'Bravo!';
		break;

	case '19';
	case '20';
		$eval = 'Police! Arrête ce tricheur';
		break;
	
	default:
		$eval = 'Pas de chance, le prof ne dit rien!';
		break;
}



?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Les conditions - Switch!</title>
	</head>
	<body>
		<!-- Ex 6 -->
		<form action="conditions-switch.php" method="get">
			<p>Quelle note as-tu obtenu à ton dernier contrôle? <input type="number" name="result">
				<button type="submit">Click</button>
			</p>
			<?php
				echo $eval;  
			?>
		</form>
 	</body>
</html>