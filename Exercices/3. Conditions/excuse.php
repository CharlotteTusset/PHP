<?php 

// Variables

$nom = filter_var (isset($_POST["nomEnf"]) ? $_POST["nomEnf"]: NULL, FILTER_SANITIZE_STRING);
$genre = isset($_POST["genre"]) ? $_POST["genre"]: NULL;
$nomInst = isset($_POST["nomInst"]) ? $_POST["nomInst"]: NULL;

$date = date('l d M Y');

$absence = isset($_POST['absence']) ? $_POST['absence'] : NULL;

$excuse = "Chère Madame " . $nomInst . ", mon enfant, " . $nom . " est absent en ce " . $date . " car ";

// Conditions excuses
switch ($absence) {
 	case 'malade':
 		$absence = "". $nom ." avait fait un gros vomi dans son lit, il a mangé beaucoup trop de bonbons hier et il ne sera pas présent(e) à l'école, c'est mieux d'éviter qu'il n'arrose les autres élèves. il sera de retour dès qu'il aura évacué toutes ces toxines. Merci de votre compréhension. <br> Sincères salutations. <br> Michelle C.";
 		break;

 	case 'décès':
 		$absence = "mon pauvre enfant est en désolation: son petit cochon domestique, Billy, est décédé hier, étouffé par une carotte en plastique. il était vraiment attaché(e) à cet animal et la famille entière souffre de cette perte. Voir ses petits camarades manger du jambon risque de la/le heurter davantage et je préfère donc la/le tenir à l'écart de l'école quelques jours. <br> Merci pour votre compréhension. <br> Victorine Dellaferme.";
 		break;

 	case 'extra':
 		$absence = "chaque année, j'envoie ". $nom ." quelques jours au bout du monde, pour nous foutre la paix mais surtout pour qu'il apprenne à se démerder et qu'il apprenne une langue étrangère. C'est tout bénèf, n'est ce pas? il ne sera donc pas à l'école pendant 1 mois car il est en Papouasie Nouvelle-Guinée, espérons que les cannibales n'aient pas raison de mon enfant. <br> Merci. <br> Bien à vous. <br> Bénédicte Gérard. ";
 		break;

 	case 'autre':
 		$absence = " j'en ai marre d'inventer des fausses excuses, ". $nom ." ne veut plus aller à l'école, votre enseignement de merde et peu valorisant le/la décourage. Vous le/la cadenassez dans un moule pour lequel il n'est pas fait(e)! À la revoyure, chère direction. Faites attention à ne pas tuer l'éducation nécéssaire à créer une société plus juste et plus épanouie. <br> Manu Lemalin.";
 		break;
 	
 	default:
 		$excuse = "Remplissez le formulaire pour générer une excuse";
 } 

// Condition genre
$femme = str_replace("il", "elle", $absence);
$homme = str_replace("elle", "il", $absence);

if ($genre == 'femme') {
	$absence = $femme;
}
elseif ($genre == 'homme') {
	$absence = $homme;
}

?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Générateur d'excuses</title>
		<!-- Css -->
		<link rel="stylesheet" href="style.css">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/png" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRe3XIGc9g6qztssRWCePc2Doh4zs2VEY6C3NWX6MKyBYmK8J82"/>
	</head>
	<body>
		<h1>Générateur d'excuses</h1>
		<h2>Formulaire</h2>
		<form action="excuse.php" method="post">
			<label>Nom de l'enfant </label> <br>
				<input type="text" name="nomEnf"> <br><br>
			<label>Genre </label><br>
				<input type="radio" name="genre" value="homme"> Masculin
				<input type="radio" name="genre" value="femme"> Féminin<br><br>
			<label>Nom de l'institutrice </label> <br>
				<input type="text" name="nomInst"> <br><br>
			<label>Raison de l'absence </label> <br>
				<input type="radio" name="absence" value="malade"> Maladie <br>
				<input type="radio" name="absence" value="décès"> Décès de l'animal de compagnie <br>(ou d'un membre de la famille) <br>
				<input type="radio" name="absence" value="extra"> Activité extra-scolaire importante <br>
				<input type="radio" name="absence" value="autre"> Toute autre excuse de ton choix <br><br>
			<input type="submit" name="soumettre" class="btn"> 
		</form>
		<br>
		<div class="echo">
			<h3>Excuse générée</h3>
			<?php 
			echo $excuse . $absence;
			?>
		</div>
		<footer> © Charlotte Tusset / BeCode.org</footer>
 	</body>
</html>
