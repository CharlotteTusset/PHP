<pre>
<?php 

// Ecris une boucle qui affiche les numéros de 1 à 120 à l'aide de  while
echo '<br> While';

while ($nombre <= 120)
{
    echo $nombre . '<br>';
    $nombre++; // équivaut à écrire $nombre = $nombre +1;
};


// Ecris une boucle qui affiche les numéros de 1 à 120 à l'aide de  for
echo '<br> For';

for ($nombre = 1; $nombre <= 120; $nombre++)
{
    echo '<br>' . $nombre;
}


// Crée un tableau contenant tous les prénoms des personnes composant ta classe. Affiche ces prénoms à l'aide d'une boucle.
echo '<br> <br> Classe Be Code'; 

$becode = array ('<br>', 'Alex', 'Marie', 'Eric', 'Cookie', 'Jesse', 'Marie Louise', 'Massimo', 'Cédric', 'Thib', 'Adri', 'Géraldine', 'Guillaume D', 'Guillaume', 'Marco', 'JF', 'Hakan', 'Colombe', 'Stéphane', 'Mery', 'Ajay', 'Liam', 'Nathan', 'Antoni', 'Charlotte');

$length = count($becode);

for ($i = 0; $i < $length ; $i++) { 
	print $becode[$i] . '<br>';
};


// Crée un tableau contenant au moins 10 pays du monde. Une fois fait, utilise une boucle pour générer du html correspondant à une selectbox permettant à un utilisateur d'indiquer son pays dans un formulaire html.
echo '<br> Where do you want to live? '; 

$countries = array('Choose', 'Japan', 'Belgium', 'Italy', 'Argentina', 'New Zealand', 'Mongolia', 'Uruguay', 'Sénégal', 'United Kingdom', 'Lebanon', 'Other');

$length_countries = count($countries);

echo '<select>';

for ($i=0; $i < $length_countries ; $i++) { 
	print '<option> ' . $countries[$i] . '</option>';
}
echo "</select>";


// A présent, modifie ton tableau contenant les pays pour qu'il soit un tableau associatif: la clef est le code ISO du pays, la valeur étant le nom du pays: par exemple: $pays = array('BE'=>'Belgique'); au lieu de simplement $pays = array('Belgique');. Utilise la clef pour qu'elle devienne la valeur de la balise option dans ton html.
echo '<br> Where do you want to live? '; 

$countries_iso = array('JPN' => 'Japan','BE' => 'Belgium', 'IT' => 'Italy', 'ARG' => 'Argentina', 'NZ' => 'New Zealand', 'MNG' => 'Mongolia', 'URY' => 'Uruguay', 'SEN' => 'Sénégal', 'UK' => 'United Kingdom', 'LBN' => 'Lebanon');

echo "<form method='get' action='while-for.php'>";
echo "<select name='country'>";

foreach ($countries_iso as $key => $value) {
	print "<option value='" . $key . "''>" . $value . "</option>";
}
echo "</select>";
echo "<br><input type='submit' value='Submit'>";
echo "</form>";

?>
</pre>

