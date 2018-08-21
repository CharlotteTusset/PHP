<pre>
<?php 

// Décris-toi dans une tableau associatif: $moi. Utilise au moins deux valeurs de chaque type: texte (par exemple prenom), booléenne (par exemple aime_le_foot) et Int (par exemple: age).

$moi = array (

	'surname' => 'Charlotte',
	'name' => 'Tusset',
	'born_year' => 1991,
	'city' => 'Brussels',
	'love_music' => True,
	'like_sport' => True,
	'fav_num' => array(4,7,21),
	'hobby' => array('gigs', 'festivals', 'running', 'exhibitions', 'reading', 'coding'),
	'papa' => $papa,
);


// Crée un deuxième tableau similaire au tien, qui décrive ton papa (ou une personne de ta famille): $papa.
// Assure-toi d'y avoir également décrit ses hobbies
// Ensuite, à ton tableau $moi, ajoute un élément dont la clef est 'papa' et la valeur équivaut à $papa.
// Affiche le contenu de $moi via la fonction print_r(). (Utilise la balises html <pre> pour rendre cela plus lisible).
// Relis ton code pour t'assurer de comprendre ce qui se passe à chaque ligne.

$papa = array(

	'surname' => 'Silvano',
	'born_year' => 1953,
	'city' => 'Moha',
	'like_sport' => True,
	'hobby' => array('racing bike','watching sports','reading'),  

);

print_r($moi);

// Tu veux savoir combien de hobbies a ton père. Trouve la fonction PHP qui permette de compter le nombre d'éléments d'un tableau.
// Compte tes propres hobbies
echo "<br>Nombre d'hobbies de mon Papa:<br>";
echo count($papa[hobby]);
echo "<br>Nombre de mes hobbies:<br>";
echo count($moi[hobby]);
echo "<br>";

$nbrHobbyPapa = count($papa[hobby]);
$nbrHobbyMoi = count($moi[hobby]);

// Additionne les deux et affiche le résultat
echo "Addition des deux résultats: <br>";
echo ($nbrHobbyPapa + $nbrHobbyMoi) . "\n" . "\n";


// Un jour, tu rencontres ton $ame_soeur.
// Décris-la sous forme d'un Tableau $toi .
// Quels seront le ou les hobbies que votre enfant aura?
$toi = array (
	'hobby' => array(gigs, guitar, painting, arts),
	'surname' => 'Arno',
	'city' => 'Amsterdam',
);

print_r($toi);

// soit l'intersection (les hobby communs aux deux array),
// soit la fusion (tous les hobby de chaque array).
//  Devine le nom des 2 fonctions PHP correspondantes dans la documentation de PHP (indice: elles commencent toutes deux par array_) et teste leur syntaxe. Affiche le résultat de chacune via la fonction print_r().
$hobbyMerge = array_merge($moi[hobby], $toi[hobby]);
print_r($hobbyMerge);

$hobbyInt = array_intersect($moi[hobby], $toi[hobby]);
print_r($hobbyInt);

?>
</pre>