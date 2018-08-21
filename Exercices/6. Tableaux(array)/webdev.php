<pre>
<?php 

// Note: Pour chacun de ces exercices, affiche le résultat via la fonction print_r() afin de vérifier que tu obtiens le bon résultat. (Et dans une balise html <pre> c'est encore mieux).
// Crée un tableau $web_development contenant une clef "frontend" et une clef "backend". À chaque clef, associe un sous-tableau vide.
// ensuite, ajoute une ligne en dessous qui ajoute à la bonne clef la technologie suivante: "xhtml".
// ensuite, ajoute une ligne en dessous qui ajoute à la bonne clef la technologie suivante: "Ruby on Rails".
// ensuite, ajoute une ligne en dessous qui ajoute à la bonne clef la technologie suivante: "CSS".
// ensuite, ajoute une ligne en dessous qui ajoute à la bonne clef la technologie suivante: "Flash".
// ensuite, ajoute une ligne en dessous qui ajoute à la bonne clef la technologie suivante: "Javascript".
// ensuite, ajoute une ligne en dessous qui remplace la ligne contenant "xhtml" par "html".
// ensuite, ajoute une ligne en dessous qui efface la ligne contenant "Flash".


$web_development = array(
	'frontend' => array(),
	'backend' => array(),
);

$web_development['frontend'] = array();
$web_development['frontend'] = 'xhtml';
print_r($web_development);

$web_development['backend'] = array();
$web_development['backend'] = 'Ruby';
print_r($web_development);

$web_development['frontend'] = array();
$web_development['frontend'] = 'css';
print_r($web_development);

$web_development['backend'] = array();
$web_development['backend'] = 'Flash';
print_r($web_development);

$web_development['frontend'] = array();
$web_development['frontend'] = 'Javascript';
print_r($web_development);

$web_development['frontend'] = array('xhtml', 'css', 'Javascript');
$replace = array(0 => 'html');
$html = array_replace($web_development, $replace);
print_r($html);

$web_development['backend'] = array('Ruby', 'Flash');
unset ($web_development['backend'][1]);
print_r($web_development);


?>
</pre>