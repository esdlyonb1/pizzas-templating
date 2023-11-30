<?php

$baseDonneesPizzas = [
    [
     "id" => 1,
    "name"=>"reine",
    "description"=> "olives jambon champignons"

    ],

    [
        "id" => 2,
        "name"=>"Quatre fromages",
        "description"=> "parmezan, bleu, chevre, mozzarella"

    ]
];
$baseDonneesTacos = [
    [
        "id" => 1,
        "name"=>"lyonnais",
        "description"=> "lardons sauce fromage"

    ],

    [
        "id" => 2,
        "name"=>"degueu",
        "description"=> "beaucoup de trucs pas bons"

    ]
];

$baseDonneesQuiches = [
    [
        "id" => 1,
        "name"=>"lorraine",
        "description"=> "lardons creme fraiche"

    ],

    [
        "id" => 2,
        "name"=>"saumon",
        "description"=> "beaucoup de saumon"

    ]
];

function afficher($nomDeTemplate, $donnees){

    ob_start();
  extract($donnees);

    require_once "templates/${nomDeTemplate}.html.php";

    $content = ob_get_clean();

    require_once "templates/base.html.php";


}












