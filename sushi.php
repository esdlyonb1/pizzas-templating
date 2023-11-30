<?php require_once "logique/logique.php";
$id = $_GET['id'];



$query = $pdo->prepare("SELECT * FROM sushis WHERE id = :id");

    $query->execute([
        "id" => $id
    ]);

    $sushi = $query->fetch();

afficher('sushi/show', ["sushi"=>$sushi,
                                    "pageTitle"=> $sushi['poisson'] ]);