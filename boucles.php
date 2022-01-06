<?php//répéter des instructions

// Je veux un tableau avec les 100 premiers nombres

$tableauMillePremiersNombres[] = 1;
$tableauMillePremiersNombres[] = 2;


//1000 fois
$tableauMillePremiersNombres[];
for ($nombre = 1; $nombre<=1000;$nombre++){
    $tableauMillePremiersNombres[]=$nombres;

}
echo $nombre;//1001
echo '</pre>';
print_r($tableauMillePremiersNombres);//indexé de 0 à 999
echo '</pre>';

// $nombre = 1 => initiation
// $nombre <=1000 => Conditions d'arret
//$nombre++ => pas

//boucle while=> On verra dans les challenges
// while(true) avec break

//Boucle foreach
//Parcourir les éléments d'un tableau
$mots = ['Bonjour','M.','Arthur'];
];

//Foreach simple 
$phrase = '';
foreach($mots as $mot){
    $phrase.=$mot;
}
// Foreach compliqué avec clés 

$phrase='';
$nbMots = count($mots);
foreach ($mots as $indec =>$mot){
    $phrase.= $mot;
    if ($inde +1 < $nbMots){
        $phrase.= '';

    }else{
        $phrase.= '.';
    }
}


$phrase='';
$nbMots = count($mots);
foreach ($mots as $indec =>$mot){
    $phrase.= $mot;
    if ($inde +1 < $nbMots){
        $phrase.= '';
        continue;// Directement passé à l'itération suivante 
        //Donc le code en dessous ne s'execute pas
    }
    $phrase.='.';
}
echo '<p>' . $phrase . '</p>';

//break

$objets = [
    'stylo',
    'tasse',
    'telephone',
    'montre',
    'boite',
    'cahier'
];

$jAiUneMontre = false;
define('OBJET_RECHERCHE','montre');
foreach($objets as $object){
    if($object === OBJET_RECHERCHE){
        $jAiUneMontre = true;
        break; //Je "casse " = termine la boucle les iterations restantes ne sont pas effectuer
    }
}
if ($jAiUneMontre) {
    echo '<p> J\'ai bien une '. OBJET_RECHERCHE.'</p>';
}else{
    echo '<p>  Je n\'ai pas de '. OBJET_RECHERCHE.'</p>';
}
