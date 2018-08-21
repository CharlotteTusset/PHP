<pre>
<?php  

echo "<h1>PHP - Exercices sur les fonctions</h1>";

echo '<h2>10 premiers exercices</h2>';

// Utilise une fonction qui mette la première lettre de l'argument en majuscule.
echo ucfirst("hello world! <br>");
// Utilise la fonction fournie par PHP te permettant d'afficher l'année en cours.
echo date("Y");
// Affiche à présent la date, l'heure, les minutes et les secondes, en utilisant la même fonction.
echo '<br>';
echo date("l jS \of F Y h:i:s A");

// Crée une fonction prenant deux arguments numériques et qui retourne la somme de ces deux arguments.
// Améliore la fonction précédente pour que si l'un des (ou les deux) arguments envoyés n'est pas une valeur numérique (int), la fonction retourne le message suivant: "Erreur, argument non numérique".
function sum ($num1, $num2) {
    if (is_int($num1) == true && is_int($num2) == true) {
      $total = $num1 + $num2;
      echo $total;
    }
    else {
      echo 'Erreur, argument non numerique';
    }
  }
echo '<br>'; 
// Test fonction
sum(7, 21); 
echo '<br>';
sum(7, 'nana');
echo '<br>';


// Crée une fonction qui prend en argument une chaîne de caractères (plusieurs mots) et qui retourne les initiales de chaque mot en majuscule. (Exemple: "In code we trust!" devient: ICWT).
function acronym ($string) {
    foreach (explode(' ', $string) as $word) {
        $lettre .= ucfirst($word[0]);
    }
    return $lettre;
}
echo acronym('i cant wait to eat');
echo '<br>';


// Invente une fonction qui remplace les lettres "a" et "e" par le caractère "æ" dans chacune des chaînes suivantes: "caecotrophie", "chaenichthys","microsphaera", "sphaerotheca".
function giveme_ae ($string) {
	$new = str_replace('ae', 'æ', $string);
	echo $new;
}
echo giveme_ae("caecotrophie," . " chaenichthys," . " microsphaera," . " sphaerotheca");
echo '<br>';

// Crée la fonction inverse, qui remplace le caractère "æ" par "ae" dans les chaines suivantes: cæcotrophie, chænichthys, microsphæra, sphærotheca
function giveme ($string) {
	$orig = str_replace('æ','ae', $string);
	echo $orig;
}
echo giveme("cæcotrophie," . " chænichthys," . " microsphæra," . " sphærotheca");
echo '<br>';


// Crée une fonction te permettant de gérer des messages envers l'utilisateur grâce à deux arguments: le premier argument est le message, le second permet de spécifier un attribut de classe html qui sera utilisée par le CSS (par exemple: "info", "error", "warning"). Grâce à cette fonction, on pourra écrire en php: echo feedback("adresse email incorrecte", "warning"); ce qui provoquera cette injection d'html: <div class="warning">Adresse email incorrecte.</div>
// Trouve par toi-même dans la documentation php comment modifier ta fonction pour que, si le second argument n'est pas spécifié, sa valeur soit égale à "info".

function message ($string, $class = 'info') {
	$feedback = "<div class=' ".$class ." '>" . $string . "</div>";
	return $feedback;
}
echo message('adresse e-mail incorrecte');
echo '<br>';


// Crée un générateur de mots aléatoires, générant deux mots: un allant de 1 à 5 lettres, l'autre allant de 7 à 15 lettres. L'écran ne montrera que ceci: Un titre invitant l'utilisateur à générer un nouveau mot, ensuite: les deux mots générés, ensuite: un bouton permettant de rafraichir la page (et donc de recréer deux mots).
$alphabet = array_combine(range(1,26), range('a','z'));

  function word_generator() {
    global $alphabet;
    for ($i = 0; $i <= rand(1, 5); $i++) {
      $key = rand(1, 26);
      $letter = $alphabet[$key];
      echo $letter;
    }
    echo ' ';
    for ($i = 0; $i <= rand(7, 15); $i++) {
      $key = rand(1, 26);
      $letter = $alphabet[$key];
      echo $letter;
    }
  }

echo '<h2>Generateur de mot</h2>';
echo word_generator();
echo '<br>';
echo '<button onclick="reload()">Refresh</button>';
echo '<br>';
echo '<script> function reload(){location.reload();} </script>';


echo "<h2>Suite</h2>";

// Convertis la chaîne suivante: "ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!" en lettres minuscules.
echo strtolower("ARRETE DE CRIER JE N'ENTENDS PLUS RIEN!!!");


// Dans ton nouveau boulot, tu récupères du code du développeur précédent:
// Calcul du volume d'un cône de rayon 5 et de hauteur 2  
// $volume = 5 * 5 * 3.14 * 2 * (1/3);  
// echo 'Le volume du cône de rayon 5 et de hauteur 2 est : ' . $volume . ' cm<sup>3</sup><br />';  
// Calcul du volume d'un cône de rayon 3 et de hauteur 4  
// $volume = 3 * 3 * 3.14 * 4 * (1/3);  
// echo 'Le volume du cône de rayon 3 et de hauteur 4 est : ' . $volume . ' cm<sup>3</sup><br />';  

function VolumeCone($rayon, $hauteur)
{
   $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3); 
   return $volume; 
}

$volume = VolumeCone(3, 1);
echo 'Le volume d\'un cône de rayon 3 et de hauteur 1 est de ' . $volume;

?>
</pre>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP - Fonctions</title>
  </head>
  <body>

  </body>
</html>