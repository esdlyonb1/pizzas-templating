<?php require_once 'logique/logique.php';

// récuperer tous les sushis


   $query = $pdo->query("SELECT * FROM sushis");

   $sushis = $query->fetchAll();


afficher("sushi/index", [
                                        "pageTitle"=>"Les Sushis",
                                        "sushis"=>$sushis]);