<?php require_once "debugmode.php";
require_once "logique/logique.php";

if(isset($_GET['id'])){

   $id = $_GET['id'];

    $query = $pdo->prepare("DELETE FROM sushis WHERE id = :id");
    $query->execute([
        "id"=>$id
    ]);

    header('Location: tousLesSushis.php');
}
