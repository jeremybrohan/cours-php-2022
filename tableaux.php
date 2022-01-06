<?php
$tableau = [1,2,3,4,5];
$tableauDesChainesDeCaracteres =['a','b','c','d',];
//On stockera les mêmes types de variables
//On ne fait pas => $tableauBizare = [1,2,3,4,5];
//Lecture d'un tableau
//echo ça fonctionne plus
print_r($tableau);
//Pour avoir un affichage - agreable dans le navigateur
echo '<pre>';
print_r($tableau);
echo '<pre>';

//Accès à une valeur , on utilise les "index"
//Dans un tableau, le premier index,c'est 0
echo $tableau[0];
echo '</br>';
echo $tableauDesChainesDeCaracteres[2];

//Remplir un tableau, "multi dimensions"
$tableauDe2Dimensions =[
    [1, 2, 3],
    [4,5,6],
    [7,8,9]
];
echo $tableauDe2Dimensions [1][1];//5
echo $tableauDe2Dimensions [2][0];//7

$professeur =[
    'prenom'=> 'Arthur',
    'nom'=> 'Weil',
    'age'=> 35,
    'permis_de_conduire'=>
];
$phrase='';
$phrase='Le  professeur s\'appelle';
$phrase= $professeur .'';
$phrase='';
$phrase='';