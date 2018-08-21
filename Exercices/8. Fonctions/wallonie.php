<pre>
<?php

// Invente une fonction reverse_string( $stringToReverse) qui réécrit une chaine de caractères à l'envers.
// En Wallonie, les mouvements de jeunesse ont une chanson populaire intitulée "Buvons un coup ma serpette est perdue". Utilise la fonction str_replace avec $substitutions = array( E, I, O, U, OU, É, È, OI, UI, OUI, AN, IN, ON, UN, OIN); pour transformer automatiquement les voyelles du couplet selon chaque élément de l'array et ainsi générer les paroles complètes de la chanson (le couplet avec chaque diphtongue remplacée).

echo '<h3>La nouvelle chanson</h3>';

function reverse_string($string){
	return strrev($string);
}

$chanson = "'Buvons un coup ma serpette est perdue,
		Mais le manche, mais le manche,
		Buvons un coup ma serpette est perdue
		Mais le manche est revenu.
		
		A
		Bavas a ca ma sarpata a parda,
		Ma la macha ma la macha
		Bavas a ca ma sarpata a parda
		Ma la macha a ravana.';
		";
// echo reverse_string($chanson);


$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$substitutions = array("E", "I", "O", "U", "OU", "É", "È", "OI", "UI", "OUI", "AN", "IN", "ON", "UN", "OIN");

foreach ($substitutions as $value) {
	echo str_replace($vowels, $substitutions, $chanson);
}



?>
</pre>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chantons chantons une chanson de merde</title>
  </head>
  <body>
	<pre>
		<h3>L'originale</h3>
		'Buvons un coup ma serpette est perdue,<br>
		Mais le manche, mais le manche,<br>
		Buvons un coup ma serpette est perdue<br>
		Mais le manche est revenu.<br>
		<br>
		A<br>
		Bavas a ca ma sarpata a parda,<br>
		Ma la macha ma la macha<br>
		Bavas a ca ma sarpata a parda<br>
		Ma la macha a ravana.';
	</pre>
  </body>
</html>