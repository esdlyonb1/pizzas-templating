<?php
require_once "debugmode.php";
require_once "logique/logique.php";

if(isset($_POST['type']) &&
    isset($_POST['description']) &&
    isset($_POST['poisson'])
){
    $type = $_POST['type'];
    $description = $_POST['description'];
    $poisson = $_POST['poisson'];

    //aussi ajouter une verification
    // //que les variables contiennent bien du texte

    $query = $pdo->prepare("INSERT INTO sushis SET type = :type, description = :description, poisson = :poisson");

    $query->execute([
         "type"=>$type,
        "description"=>$description,
        "poisson"=>$poisson
    ]);

    header("Location: tousLesSushis.php");



}


afficher("sushi/create", ["pageTitle"=> "nouveau sushi"]);