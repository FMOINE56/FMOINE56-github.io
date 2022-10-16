<?php define("SITE_TITLE", "Mon essai");

var_dump(SITE_TITLE);
$concatene = "<br> voilà c'est " .SITE_TITLE;
echo $concatene; 
echo "<br>voila, c'est  <strong><i>".SITE_TITLE ."</i></strong>";

$fruits = ["pomme", "banane", "poire",];


var_dump($fruits);

foreach ($fruits as $fruit) {
    echo '<br>' .$fruit .", ";
}

$fruits[]= "citron";


var_dump($fruits);

echo '<br>' .$fruits["0"];
echo '<br>' .$fruits["1"];

array_push($fruits, "framboise", "mirabelle");

var_dump($fruits);

[3 => $valeur] = $fruits;
echo $valeur;

$truc = ["flanc", "porc", "boeuf",];

var_dump($fruits);

for ($ide = 0; $ide <3; $ide++) {
  var_dump($truc["$ide"]);
}

echo "<br>résultat du traitement " .$ide;

$nbfruits = count($fruits);

 
echo "<br>" .$nbfruits;


var_dump($nbfruits);


for ($index = 0 ; $index < $nbfruits ; $index++)
{
    echo "<br>" .$fruits["$index"] .",";
}


foreach ($fruits as $fruit) {
    echo "<br>" .$fruit;
}

$fruits = ["bon" => "pomme", "super" => "citron", "beurk" => "fruit de la passion",];

foreach ($fruits as $qualificatif => $fruit) {
echo "<br> " .$fruit .", c 'est " . $qualificatif;
}


$heure= date('H');
$etat = $heure < 20 && $heure > 10 ? "en forme" : "fatigué";

var_dump($etat);
echo "<br>Il est $heure h. Je suis $etat.";


?>