<?php require_once "logique/logique.php";
if(isset($_POST['type']) &&
    isset($_POST['description']) &&
    isset($_POST['poisson']) &&
    isset($_POST['id'])
) {
    $type = $_POST['type'];
    $description = $_POST['description'];
    $poisson = $_POST['poisson'];
    $id = $_POST['id'];

    //aussi ajouter une verification
    // //que les variables contiennent bien du texte

    $query = $pdo->prepare("UPDATE sushis SET type = :type, description = :description, poisson = :poisson WHERE id = :id");

    $query->execute([
        "type" => $type,
        "description" => $description,
        "poisson" => $poisson,
        "id" => $id
    ]);

    header("Location: tousLesSushis.php");

}




$id = $_GET['id'];



$query = $pdo->prepare("SELECT * FROM sushis WHERE id = :id");

    $query->execute([
        "id" => $id
    ]);

    $sushi = $query->fetch();

afficher('sushi/edit', ["sushi"=>$sushi,
                                    "pageTitle"=> $sushi['poisson'] ]);