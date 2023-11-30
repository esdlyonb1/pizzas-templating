<?php
require_once 'logique/logique.php';


foreach ($baseDonneesTacos as $tacos){

    if($tacos['id'] == $_POST['tacosId'])
    {
        $unTacos = $tacos;
    }

}

afficher('tacos/unTacos', ["unTacos"=>$unTacos]);
