<pre>
<?php

// Construis une boucle qui affiche chaque élément de l'array à l'aide de foreach
// Ensuite, dans ta boucle, conjuge le verbe "coder" en fonction du pronom. (utilise une condition pour cela)


$pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');


foreach ($pronoms_personnels as $key => $value) {
	// echo $value . ' code <br/>' ;
	switch ($key) {
		case 0:
			echo $value . ' code <br>';
			break;
		case 1:
			echo $value . ' codes <br>';
			break;
		case 2:
			echo $value . ' code <br>';
			break;
		case 3:
			echo $value . ' codons <br>';
			break;
		case 4:
			echo $value . ' codez <br>';
			break;
		case 5:
			echo $value . ' codent <br>';
			break;
		default:
			echo 'bug';
			break;
	}

};


// Exercice bonus

$moi = array (
	'0' => 'Charlotte',
	'1' => '1991',
	'2' => 'musique',
	'3' => '4'
);

print_r($moi);

foreach ($moi as $key => $value) {
	switch ($key) {
		case 0 :
			echo "Je m'appelle " . $value . '<br>';
			break;
		case 1:
			echo "et je suis née en " . $value . '<br>';
			break;
		case 2:
			echo "Je suis fan de " . $value . '<br>';
			break;
		case 3:
			echo "Mon chiffre préféré est " . $value . '<br>';
			break;
		default:
			# code...
			break;
	}
};


?>
</pre>