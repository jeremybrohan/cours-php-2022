<?php
//Les variables Booléennes

$jAiLePermisDeConduire = true;
$jAiLePermisDePoidslourd =false;
$age = 16;
define ('AGE_REQUIS_BOITE_DE_NUIT',18);

//je stocke le résultat de ma comparaison
if ($age >= AGE_REQUIS_BOITE_DE_NUIT){
    echo '<p>Je peux rentrer</p>';
}else{
    echo '<p>Je ne peux pas rentrer</p>';
};



$jeRentreEnBoiteDeNuit= ($age >=AGE_REQUIS_BOITE_DE_NUIT);
if ($jeRentreEnBoiteDeNuit){
    echo '<p>Je peux rentrer</p>';
} else{
    echo '<p>Je ne peux pas rentrer</p>';
};

//Voir les operateurs de comparaisons


