<?php
/*
//Tableau numéroté

$tab_noms = ["jean", "Paul", "Meschac ", "Chadrac"];

// <=> $tab_noms = array("Jean", "Paul", "Meschac" "Chadrac");
echo $tab_noms[2]; //Affiche Meschac
$tab_noms[] = "Manu";

//Tableau associatif

$coordonnes = ["adresse" => " 23 rue paradis",
               "ville" => "Paris 11",
               "Pays" => "France"];

echo $coordonnes ["adresse"]; 


$coordonnes["adresse"] = "43 rue Victor Hugo";

$coordonnes['langue'] = "français";

for($i=0; $i<count($tab_noms); $i++) {
    echo $tab_noms[$i] . '<br>';
}
*/

// 

$notes = [10, 20, 13];
$sum = array_sum($notes);
$moyenne = count($notes);
echo "La moyenne de l'élève est de " . round(array_sum($notes) / $moyenne,2);