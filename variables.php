<?php
//Variables textuelles, pour des chaines de caracteres
$mot = 'Bonjour';
$lettre = 'a';
$vide = ''; //Chaine de caracteres vide
//pour nommer une variable
// pas de caracteres spéciaux
//un nom explicite, on évitera $a ,$foo,$ bar
//les noms des variables en camelCase =>on commence par une minuscule, et chaque nouveau terme prend une majuscule




$prenomDuProfesseur = 'Arthur';
//$pprof= 'Arthur'; =>on ne nomme pas les variables comme ça


echo $mot;
//Une variable , elle peut changer la valeur

$mot = 'au revoir';
echo $mot;

echo '</br>'; // saut de ligne HTML
echo $mot;

// concaténations = coller les chaine de caracteres
//l'operateur de concaténation c'est le point "."

$phrase = $mot . ' M. ' . $prenomDuProfesseur;

echo '</br>';
echo $phrase;

//Opérateur condensé de concaténation .=
$phrase = $mot;//initialisation de ma phrases avec un premier mot
$phrase = $phrase. ' M. ';// "colle" un mot
$phrase = $phrase . $prenomDuProfesseur;// "colle" un mot

echo '</br>';
echo $phrase;   



//Opérateur condensé de concaténation .=
$phrase = $mot;//initialisation qui ne change pas, "="
$phrase .= ' M. ';// " .="
$phrase .= $prenomDuProfesseur;// "colle" un mot
echo '</br>';// saut de ligne HTML
echo $phrase;   

$phrase= ''; //initialisation avec une chaine vide
$phrase .= $mot;// ".="
$phrase .= ' M. ';// " .="
$phrase .= $prenomDuProfesseur;// "colle" un mot
echo '</br>';// saut de ligne HTML
echo $phrase;   
