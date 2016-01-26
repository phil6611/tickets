<?php

$template = "./template/template.inc.php";
$html = file_get_contents($template);
    
    $compte = 1;
    $message = NULL;
    
$array_search = [

    ];
    
$array_replace = [

];
    
$corps = str_replace($array_search, $array_replace, $html);


//On affiche la page.
echo $corps;

